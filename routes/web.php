<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//     return view('welcome');
// });

# Home Controller 
# Show Home Page
Route::get('/', [HomeController::class, 'showHomePage'])->name('home.page');





# RegisterController

# Show Register Page 
Route::get('/register', [RegisterController::class, 'showRegisterPage'])->name('register.page');
