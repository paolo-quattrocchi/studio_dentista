<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services() {

        $services = [

            ['servizio'=>'sbiancamento dei denti', 'description' =>'breve descrizione','img'=>'https://picsum.photos/200/300'],
            ['servizio'=>'sbiancamento dei denti', 'description' =>'breve descrizione','img'=>'https://picsum.photos/200/300'],
            ['servizio'=>'sbiancamento dei denti', 'description' =>'breve descrizione','img'=>'https://picsum.photos/200/300'],
            ['servizio'=>'sbiancamento dei denti', 'description' =>'breve descrizione','img'=>'https://picsum.photos/200/300'],
            ['servizio'=>'sbiancamento dei denti', 'description' =>'breve descrizione','img'=>'https://picsum.photos/200/300'],
        ];

    return view('services', ['services' => $services]);    

    }
}
