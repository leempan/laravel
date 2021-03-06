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
Route::get('newstore','newstoreController@addnewstore');
Route::resource('/item/new','ItemController@newItem');

Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('show', 'UserController@show');

Route::get('user/{name}/{id}', function ($name,$id) {
    try {
           $users = DB::table('users')->get(); 
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }  
    $result =  DB::select('select * from users');
    return $result;
});

