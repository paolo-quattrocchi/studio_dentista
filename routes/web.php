<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
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

// Route::get('/', [ServicesController::class, 'services'])->name('services');
Route::get('/', [ServicesController::class, 'services'])->name('services');

//
Route::get('/contacts', [ContactController::class, 'contactUs'])->name('contacts');
Route::post('/contact_save', [ContactController::class, 'contactSave'])->name('contact_save');
Route::get('/thank_you', [ContactController::class, 'thankYou'])->name('thank_you');

// Route::get('/servicespage', function () {
//     return view('servicespage');
// })->name('servicespage');

Route::get('/staff', [StaffController::class, 'staff'])->name('staff');
// Route::get('/services', [ServicesController::class, 'services'])->name('services');

Route::get('/services', function() {
    return view('services');
})->name('services'); 