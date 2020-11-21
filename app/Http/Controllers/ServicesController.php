<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services() {

        $services = [

            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','img'=>'https://picsum.photos/10 '],
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','img'=>'https://picsum.photos/10 '],
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','img'=>'https://picsum.photos/10 '],
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','img'=>'https://picsum.photos/10 '],
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','img'=>'https://picsum.photos/10 '],
        ];

    return view('services', compact('services'));    

    }
}
