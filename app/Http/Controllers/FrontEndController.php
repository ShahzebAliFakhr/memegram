<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function __construct(){

    }

    public function index(){
    	return view('frontend/index');
    }

    public function feed(){
    	return view('frontend/feed');
    }

    public function profile(){
    	return view('frontend/profile');
    }

    public function editProfile(){
        return view('frontend/edit-profile');
    }

    public function explore(){
        return view('frontend/explore');
    }

}
