<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function index(){
        return view('register');
    }
    public function log_in(){
        return view('login');
    }
   
    
}
