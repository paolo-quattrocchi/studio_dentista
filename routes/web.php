<?php

use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function() {
    return view('contacts');
})->name('contacts'); 

Route::get('/staff', [StaffController::class, 'staff'])->name('staff');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
