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
    //DB::insert('insert into Persons (userID, userName) values (?, ?)', [$id, $name]);
        
    //echo $name;
    
    try {
           $users = DB::table('user')->get(); 
        //$result =  DB::select('select userName from Persons where userID = 123');
       // $con = mysql_connect("localhost","root","!((@!))$@lmp");
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    
    //echo $users;
    
    $result =  DB::select('select * from user where id = ?',[$id]);
    return $result;
    //return (string)($name).(string)($id);
    //return getenv('APP_ENV');
});
Route::get('show', 'UserController@show');
Route::get('login', 'UserController@login');