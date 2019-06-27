<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function getindex(){
    	return view('page.trangchu');
    }
    public function login(){
    	return view('login');
    }
    public function getregister(){
    	return view('page.register');
    }
    public function register(){
    	return view('register2');
    }
    
}
