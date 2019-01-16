<?php

namespace App\Http\Controllers;


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




class TestController extends Controller{

	public function testUrl(){
		/*$user = User::first();
        $token = JWTAuth::fromUser($user);

        return Response::json(compact('token'));*/
	}

	public function testSaveUser(){
		$user = User::create([
            'name' => 'rakib3',
            'email' => 'rakib3@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        /*$token = JWTAuth::fromUser($user);
        
        return Response::json(compact('token'));*/
        return $user ;
	}

	public function testLogin(){
		$user = User::where('id',2)->first();
		$token = JWTAuth::fromUser($user);
        return Response::json(compact('token'));
	}

	public function testLoggedInUser(){
		$token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly8xMjcuMC4wLjEvc291dGhwb2xlL3Byb2plY3RzL3dlYmFwaS90ZXN0Q3JlZGVudGlhbFVzZXIiLCJpYXQiOjE1NDY3NzcwMDUsImV4cCI6MTU0Njc4MDYwNSwibmJmIjoxNTQ2Nzc3MDA1LCJqdGkiOiI2djJZeHNEZGpNNGdSSVo3In0.uCPszVTXoMT-hi7a3d0hIHzh2G28M_I3laG3_xg5epM';
		$user = JWTAuth::toUser($token);
        return Response::json(compact('user'));
	}

	public function testCredentialUser(){


        $credentials = [
        	'email' => 'rakib3@gmail.com',
        	'password' => '123456'
        ];
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        return Response::json(compact('token'));
	}

	public function testQueryString($id='1',Request $request){
		return $request->all();
		return $id;
		/*$token = $request['token'];
		$user = JWTAuth::toUser($token);
        return Response::json(compact('user'));*/
	}


	public function socialLogin($provider){
        //return Socialite::driver($provider)->redirect();
        return Socialite::driver('facebook')->scopes(
            [
                "manage_pages",
                "publish_pages",
                "pages_show_list"
            ])->redirect();

        //return 'hello';
	}

    public function socialLoginRedirectCallback($provider){

        $user = Socialite::driver($provider)->user();

	    Session::put('user' , $user);
	    return redirect('/afterSocialLogin');
    }

    public function afterSocialLogin(Request $request){
         $user = Session::get('user');
         echo '<pre>';
         print_r($user) ;
         echo '</pre>';

        try {
            // Returns a `FacebookFacebookResponse` object
            //  /me/accounts
            //  /370138096875935/posts
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
}
