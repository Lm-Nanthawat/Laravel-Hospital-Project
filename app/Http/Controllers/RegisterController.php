<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function showRegisterPage()
    {
        return view('auth.register.register');
    }
}
