<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        return view('admin.dashboard');
    }


// aboutUs
    public function getList(){
    	return view('admin.aboutUs.list');
    }

    public function getAdd(){
    	return view('admin.aboutUs.add');
    }

    public function postAdd(){
    	
    }

    public function getDelete(){
    	
    }

    public function getEdit(){
    	return view('admin.aboutUs.edit');
    }

    public function postEdit(){
    	
    }

    // endAboutUS
}
