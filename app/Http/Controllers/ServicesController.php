<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services() {

        $services = [

            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','image'=>'https://picsum.photos/200/300'],
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','image'=>'https://picsum.photos/200/300'],
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','image'=>'https://picsum.photos/200/300'],
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','image'=>'https://picsum.photos/200/300'],
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','image'=>'https://picsum.photos/200/300'],
        ];

    return view('services', ['services' => $services]);    

    }
}
