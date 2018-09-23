<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index(){
        if(Auth::user()){
            return view('admin.index');
        }else{
           return redirect('/login'); 
        }
    }
}
