<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/details', [HomeController::class, 'PortfolioDetails'])->name('home.details');
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

