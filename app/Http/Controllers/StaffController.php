<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff(){
        
        $staff = 
        [
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','img'=>'https://picsum.photos/100'],
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','img'=>'https://picsum.photos/100'],
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','img'=>'https://picsum.photos/100'],
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','img'=>'https://picsum.photos/100'],
            ['name'=>'paolo','surname'=>'quattrocchi', 'description' =>'breve descrizione','img'=>'https://picsum.photos/100'],

        ];

        return view('staff', ['staff' => $staff]);
    }
}
