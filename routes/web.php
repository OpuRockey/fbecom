<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/testUrl',[
    'uses'=>'TestController@testUrl',
    'as'=>'testUrl'
]);

Route::get('/testSaveUser',[
    'uses'=>'TestController@testSaveUser',
    'as'=>'testSaveUser'
]);

Route::get('/testLogin',[
    'uses'=>'TestController@testLogin',
    'as'=>'testLogin'
]);

Route::get('/testLoggedInUser',[
    'uses'=>'TestController@testLoggedInUser',
    'as'=>'testLoggedInUser'
]);

Route::get('/testCredentialUser',[
    'uses'=>'TestController@testCredentialUser',
    'as'=>'testCredentialUser'
]);

Route::get('/testQueryString/{id?}',[
    'uses'=>'TestController@testQueryString',
    'as'=>'testQueryString'
]);


Route::get('/socialLogin/{provider}',[
    'uses'=>'TestController@socialLogin',
    'as'=>'socialLogin'
]);

Route::get('/socialLoginRedirectCallback/{provider}',[
    'uses'=>'TestController@socialLoginRedirectCallback',
    'as'=>'socialLoginRedirectCallback'
]);

Route::get('/afterSocialLogin',[
    'uses'=>'TestController@afterSocialLogin',
    'as'=>'afterSocialLogin'
]);


/** All development segments are implimented above **/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/loginWithFb',[
    'uses'=>'Auth\SocialAuth\FBController@loginWithFb',
    'as'=>'loginWithFb'
]);



Route::get('/loginWithFbVerify/{usertype?}',[
    'uses'=>'Auth\SocialAuth\FBController@loginWithFbVerify',
    'as'=>'loginWithFbVerify'
]);

Route::get('/loginWithFbVerifyResponse',[
    'uses'=>'Auth\SocialAuth\FBController@loginWithFbVerifyResponse',
    'as'=>'loginWithFbVerifyResponse'
]);

Route::get('/fb_dashboard',[
    'uses'=>'Auth\SocialAuth\FBController@fb_dashboard',
    'as'=>'fb_dashboard'
]);

Route::get('/dashboard/setup/{usertype?}',[
    'uses'=>'Auth\SocialAuth\FBController@userSetup',
    'as'=>'userSetup'
]);

Route::post('/userSetupAttempt',[
    'uses'=>'Auth\SocialAuth\FBController@userSetupAttempt',
    'as'=>'userSetupAttempt'
]);

Route::get('/fb_dashboard/pages/products/{pageid?}/{accesstoken?}',[
    'uses'=>'Auth\SocialAuth\FBController@findProducts',
    'as'=>'findProducts'
]);





















