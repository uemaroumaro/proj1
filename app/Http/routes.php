<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('mongotest', 'MongotestController@getIndex');

Route::get('mqtt', 'MQTTController@getIndex');
Route::get('graphtest', 'GraphTestController@getIndex');
Route::get('getjson', 'GraphTestController@getJson');
Route::get('phpinfo', 'PhpinfoController@getIndex');


//DebugBarが出なくなった時のやつ
//Route::get('/_debugbar/assets/stylesheets', [
//    'as' => 'debugbar-css',
//    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@css'
//]);
//
//Route::get('/_debugbar/assets/javascript', [
//    'as' => 'debugbar-js',
//    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@js'
//]);
//
//Route::get('/_debugbar/open', [
//    'as' => 'debugbar-open',
//    'uses' => '\Barryvdh\Debugbar\Controllers\OpenController@handler'
//]);