<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff(){
        $staff= 
        [
            ['name'=>'paolo','surname'=>'quattrocchi','description'=>'breve descrizione'],

            ['name'=>'paolo','surname'=>'quattrocchi','description'=>'breve descrizione'],

            ['name'=>'paolo','surname'=>'quattrocchi','description'=>'breve descrizione'],

            ['name'=>'paolo','surname'=>'quattrocchi','description'=>'breve descrizione'],

            ['name'=>'paolo','surname'=>'quattrocchi','description'=>'breve descrizione'],

        ];

        return view('staff', compact('staff'));
    }
}
