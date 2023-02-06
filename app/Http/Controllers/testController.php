<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{

	//Its a test page
	
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index(){
     	 return view('test');
     }
}
