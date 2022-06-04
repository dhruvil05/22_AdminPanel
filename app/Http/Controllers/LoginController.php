<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function viewLoginForm(){
        return view('auth.login');
    }
    public function viewSignupForm(){
        return view('auth.signup');
    }
}
