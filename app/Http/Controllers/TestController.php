<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        // echo "This is test controller";
        return view('testview');
    }


    public function form(){
    	return view('formview');
    }

    public function middletest(){
    	echo "in middle test";
    }
}
