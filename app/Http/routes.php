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
Route::get('/', 'WelcomeController@index');
Route::get('lmq', function(){return "梁明强是个大煞笔";});
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('user/{name}/{id}', function ($name,$id) {
    try {
           $users = DB::table('user')->get(); 
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }  
    $result =  DB::select('select * from user where id = ?',[$id]);
    return $result;
});
Route::get('show', 'UserController@show');
Route::get('login', 'UserController@login');