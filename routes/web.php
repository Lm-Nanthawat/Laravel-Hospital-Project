<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
// Route::get('/', function () {
//     return view('welcome');
// });

# Home Controller 
# Show Home Page
Route::get('/', [HomeController::class, 'showHomePage'])->name('home.page');





# RegisterController

    # Show Register Page 
Route::get('/register', [RegisterController::class, 'showRegisterPage'])->name('register.page');




# Login Controller

    # Show Login Page
Route::get('/login', [LoginController::class, 'showLoginPage'])->name('login.page');
