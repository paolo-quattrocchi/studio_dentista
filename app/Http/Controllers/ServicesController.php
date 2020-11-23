<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services() {

        $services = [

            ['servizio'=>'Sbiancamento dei denti', 'description' =>'breve descrizione2','img'=>'/img/chirurgia-dentale.jpg', 'button'=>''],
            ['servizio'=>'Igiene dentale', 'description' =>'breve descrizione2','img'=>'/img/estetica-dentale.jpg'],
            ['servizio'=>'Protesi dentarie', 'description' =>'breve descrizione2','img'=>'/img/1.jpg'],
        ];

    return view('services', ['services' => $services]);    

    }
}
