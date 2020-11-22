<?php

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

Route::get('/', function() {

    $services = [

            ['servizio'=>'Sbiancamento dei denti', 'description' =>'breve descrizione2','img'=>'/img/chirurgia-dentale.jpg', 'button'=>''],
            ['servizio'=>'Igiene dentale', 'description' =>'breve descrizione2','img'=>'/img/estetica-dentale.jpg'],
            ['servizio'=>'Protesi dentarie', 'description' =>'breve descrizione2','img'=>'/img/1.jpg'],
        ];

    return view('services', ['services' => $services]);

    return view('welcome');
})->name('welcome'); 

Route::get('/contacts', function() {
    return view('contacts');
})->name('contacts'); 

Route::get('/servicespage', function () {
    return view('servicespage');
})->name('servicespage');

Route::get('/staff', [StaffController::class, 'staff'])->name('staff');
Route::get('/services', [ServicesController::class, 'services'])->name('services');

