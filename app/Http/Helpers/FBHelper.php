<?php

namespace App\Http\Helpers;


use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;
use JWTFactory;
use JWTAuth;
use Response;
use Socialite;
use Session ;
use DB ;
use App\Http\Helpers\CMHelper ;


class FBHelper {

    public static function  test(){
        echo 'Fb Helper works' ;
    }

    public static function if_logged_in(){
        if(empty(Session::get('user'))){
            return false ;
        }else{
            return true ;
        }
    }

    public  static function loginViaFb($usertype){

        Session::put('usertype' , $usertype);
        return Socialite::driver('facebook')->scopes(
            [
                "manage_pages",
                "publish_pages",
                "pages_show_list"
            ])
            ->redirect();
    }

    public static function loginViaFbResponse(){
        $user = Socialite::driver('facebook')->user();
        Session::put('user' , json_encode($user));
        return $user;
    }

    public static function get_page_info($user){
        try {
            $fb = new Facebook ;
            $response = $fb->get(
                '/me/accounts',
                $user->token
            );
            return $response->getGraphEdge() ;
        } catch(FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
    }

    public static function check_if_user_registered($user){
        $curUser = DB::table('users')->where('fb_id', $user->id)->first() ;
        $user_type = Session::get('usertype');
        if($curUser !== null){
            return [
                'user_exists' => true,
                'user' => $user,
                'user_type' => $user_type
            ] ;
        }else {
            $id = DB::table('users')->insertGetId(
                [
                    'name' => $user->name,
                    'fb_id' => $user->id,
                    'email' => $user->email,
                    'user_type' => $user_type ,
                    'password' => bcrypt('123456'),
                    'created_at' =>  now(),
                    'updated_at' =>  now(),
                ]
            );
            return [
                'user_exists' => false,
                'new_user_created' => true,
                'user' => $user,
                'db_user_id' => $id ,
                'user_type' => $user_type
            ] ;
        }
    }

    public static function ifUserSetup($currentUserObj){

        $currentUserDbData =  DB::table('users')->where('fb_id', $currentUserObj->id)->first() ;
        if($currentUserDbData !== null){
            if($currentUserDbData->is_setup == 'no'){
                return false ;
            }else{
                return true ;
            }
        }
    }

    public static function savePagesSetupData($data){

        $activePage = explode('_' , $data->activePage) ;

        //CMHelper::debug($activePage);
        //exit ;

        $updateData = DB::table('users')
            ->where('fb_id', $data->fb_id)
            ->update([
                'activePages' => $activePage[0],
                'is_setup' => 'yes',
            ]);
        if($updateData > 0){


            try {
                $fb = new Facebook ;
                $response = $fb->post(
                    '/'. $activePage[0] .'/subscribed_apps?subscribed_fields=feed',
                    [],
                    $activePage[1]
                );
                //CMHelper::debug($response);
                //exit;
            } catch(FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
            return true ;
        }else{
            return false ;
        }
    }

    public static function get_pages_db($userPageDb){
        $userPageDb =  DB::table('users')->where('fb_id', $userPageDb->id)->first() ;
        return $userPageDb ;
    }

    public static function get_posts_of_page($page_id,$page_token){
        //CMHelper::debug($page_id);
        //CMHelper::debug($page_token);
        try {
            $fb = new Facebook ;
            $response = $fb->get(
                '/'. $page_id .'/feed?fields=picture,from,message,name,type,comments{created_time,id,parent,message},created_time',
                $page_token
            );
            return $response->getGraphEdge() ;
        } catch(FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
    }

    public static function saveProductOrder($request){
        $id = DB::table('fb_feed')->insertGetId(
            [
                'json' =>  $request->getContent() ,
                'created_at' =>  now(),
                'updated_at' =>  now(),
            ]
        );
    }
}
