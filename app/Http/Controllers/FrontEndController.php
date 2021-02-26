<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\File;
use App\Like;
use App\Comment;

class FrontEndController extends Controller
{

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

    public function test(){
        $data = File::with('user', 'likes', 'comments')->get()->toArray();
        dd($data);
    }

}
