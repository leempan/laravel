<?php
/**
 * Created by PhpStorm.
 * User: lmq
 * Date: 6/6/15
 * Time: 8:25 PM
 */

namespace App\Http\Controllers;


class UserController extends Controller {

    function login() {
        return view('user/login');

    }

    function show() {
        //return view('user/login');
        //throw new NotFoundHttpException;
        //return "id = ".$id;
        echo "1";
        //$result = DB::select('select name from person where id = 1');
        //throw new NotFoundHttpException;
        $result = DB::select('select * from Persons where id = 123');
        echo "2";
        return $result;
    }

}