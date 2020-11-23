<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services() {

        $services = [

            ['servizio'=>'Sbiancamento', 'description' =>'Ritrova un sorriso sano e smagliante','img'=>'/img/chirurgia-dentale.jpg', 'button'=>''],
            ['servizio'=>'Igiene dentale', 'description' =>'Ritrova un sorriso sano e smagliante','img'=>'/img/estetica-dentale.jpg'],
            ['servizio'=>'Protesi dentarie', 'description' =>'Ritrova un sorriso sano e smagliante','img'=>'/img/1.jpg'],
        ];

    return view('services', ['services' => $services]);    

    }
}
