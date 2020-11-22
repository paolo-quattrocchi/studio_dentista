<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services() {

        $services = [

            ['servizio'=>'sbiancamento dei denti', 'description' =>'breve descrizione2','img'=>'/img/chirurgia-dentale.jpg'],
            ['servizio'=>'sbiancamento dei denti', 'description' =>'breve descrizione2','img'=>'/img/estetica-dentale.jpg'],
            ['servizio'=>'sbiancamento dei denti', 'description' =>'breve descrizione2','img'=>'/img/estetica-dentale.jpg'],
        ];

    return view('services', compact('services'));    

    }
}
