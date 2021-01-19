<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class NewController extends BaseController
{

    public function index(){
        $new = DB::select('select * from test');
        $test = $new->test;
        echo $test;
        return view('welcome',['test'=>$test]);
    }
}