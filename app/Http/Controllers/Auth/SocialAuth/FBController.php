<?php

namespace App\Http\Controllers\Auth\SocialAuth;

use App\Http\Controllers\Controller;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;
use App\User;
use JWTFactory;
use JWTAuth;
use Response;
use Socialite;
use Session ;
use App\Http\Helpers\FBHelper ;
use App\Http\Helpers\CMHelper ;




class FBController extends Controller{


    public function __construct(){

    }

    public function loginWithFb(){
        //echo 'LoginWithFb found' ;
        //FBHelper::test();
        return view('auth.fbLogin');
    }

    public function loginWithFbVerify($usertype = 'other'){
        // echo $usertype ; // member , vendor
        if($usertype == 'member' || $usertype == 'vendor'){
            return FBHelper::loginViaFb($usertype);
        }else{
            echo $usertype ;
        }
    }

    public function loginWithFbVerifyResponse(){

        $user = FBHelper::loginViaFbResponse();
        $user_rg_status = FBHelper::check_if_user_registered($user);
        //CMHelper::debug($user_rg_status);
        //exit ;
        if($user_rg_status['user_exists'] == true){
            if(is_object($user_rg_status['user'])){
                if(property_exists($user_rg_status['user'],'token')){
                    return redirect('/fb_dashboard');
                }
            }
        }else{
            return redirect('dashboard/setup/' . $user_rg_status['user_type']);
        }
    }

    public function fb_dashboard(){
        if(!FBHelper::if_logged_in()){
            return redirect('/loginWithFb');
        }
        $user = [
            'userDetails' => Session::get('user'),
            'usertype' => Session::get('usertype'),
        ] ;
        $userDetailsObj = json_decode($user['userDetails']);
        $is_active = FBHelper::ifUserSetup($userDetailsObj);
        if(!$is_active){
            return redirect('dashboard/setup/' . $user['usertype']);
        }
        $userPage = FBHelper::get_page_info($userDetailsObj);
        $userPageDb = FBHelper::get_pages_db($userDetailsObj);
        $userPageArr = [] ;
        foreach($userPage->asArray() as $up){
            if($up['id'] == $userPageDb->activePages){
                $userPageArr[$up['id']] = $up ;
            }
        }
        $user['userPages'] = $userPageArr ;
        //CMHelper::debug($userPage->asArray());
        //CMHelper::debug($userPageDb);
        //CMHelper::debug($userPageArr);
        //exit ;
        return view('dashboard.userDashboard',[
            'user' => $user,
            'userDetails' => $userDetailsObj,
            'userPageDb' => $userPageDb,
        ]);
    }

    public function userSetup($usertype = null){
        $currentUserJson = Session::get('user');
        $currentUserObj = json_decode($currentUserJson);
        $currentUserType = Session::get('usertype');
        if($currentUserType == 'vendor' || $currentUserType == 'member'){
            $is_setup = FBHelper::ifUserSetup($currentUserObj);
            if(!$is_setup){
                if($currentUserType == 'vendor'){
                    $userPage = FBHelper::get_page_info($currentUserObj);
                    return view('auth.vendorSetup',[
                        'currentUserObj' => $currentUserObj,
                        'currentUserType' => $currentUserType,
                        'userPages' => $userPage->asArray(),
                    ]);
                }
                if($currentUserType == 'member'){
                    return view('auth.memberSetup',[
                        'currentUserObj' => $currentUserObj
                    ]);
                }
            }else{
                return redirect('/fb_dashboard');
            }
        }else{
            return 'You are not authorized' ;
        }
    }

    public function userSetupAttempt(Request $request){
        $curresponse = FBHelper::savePagesSetupData($request);
        if($curresponse){
            return redirect('/fb_dashboard');
        }
    }

    public function findProducts($pageid=null,$accesstoken=null){
        $response = FBHelper::get_posts_of_page($pageid,$accesstoken);
        //CMHelper::debug($respponse);
        //CMHelper::debug($respponse->asArray());
        if(!FBHelper::if_logged_in()){
            return redirect('/loginWithFb');
        }
        $user = [
            'userDetails' => Session::get('user'),
            'usertype' => Session::get('usertype'),
        ] ;
        $userDetailsObj = json_decode($user['userDetails']);
        $is_active = FBHelper::ifUserSetup($userDetailsObj);
        if(!$is_active){
            return redirect('dashboard/setup/' . $user['usertype']);
        }

        //CMHelper::debug($response->asArray());

        //exit ;

        return view('dashboard.vendorProducts',[
            'user' => $user,
            'userDetails' => $userDetailsObj,
            'products'=> $response->asArray()
        ]);

    }



    public function receiveMessages(Request $request){
        echo FBHelper::saveProductOrder($request);
    }





















}
