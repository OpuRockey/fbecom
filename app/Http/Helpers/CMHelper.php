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


class CMHelper {

    public static function  test(){
        echo 'Fb Helper works' ;
    }

    public static function debug($param){
        echo '<pre>';
        print_r($param);
        echo '</pre>';
    }
}
