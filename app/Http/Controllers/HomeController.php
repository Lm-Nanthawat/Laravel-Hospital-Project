<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function showHomePage()
    {
        return view('welcome');
    }
}
