<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        return view('admin.dashboard');
    }

    public function getIntroduce() {

        return view('admin.introduce.introduce');
    }

// aboutUs
    public function getList(){
    	return view('admin.aboutUs.list');
    }

    public function getAdd(){
    	return view('admin.aboutUs.add');
    }


    // endAboutUS
}
