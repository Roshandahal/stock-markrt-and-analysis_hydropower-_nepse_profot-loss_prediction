<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminhomecontroller extends Controller
{
    public function admin(){
        return view('admin.home');
    }
    // for updatehome 
    public function updateadmin(){
        return view('admin.updatehome');
    }
}
