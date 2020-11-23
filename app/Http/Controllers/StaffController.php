<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff(){
        
        $staff = 
        [
            ['name'=>'Paolo', 'surname'=>'Quattrocchi', 'description'=>'odontoiatra', 'img'=>'/img/membro_staff_1.jpeg'],
            ['name'=>'Valeria', 'surname'=>'Vallese', 'description'=>'assistente dentista', 'img'=>'/img/assistente-dentista.jpg'],
            ['name'=>'Flavio', 'surname'=>'Faraone', 'description'=>'odontoiatra', 'img'=>'/img/membro_staff_1.jpeg'],
            ['name'=>'Riccardo', 'surname'=>'Franceschi', 'description'=>'odontoiatra', 'img'=>'/img/membro_staff_1.jpeg'],
            ['name'=>'Kaori', 'surname'=>'Rella', 'description'=>'assistente alla poltrona', 'img'=>'/img/igienista-dentale.jpg'],
            ['name'=>'Paolo', 'surname'=>'Quattrocchi', 'description'=>'breve descrizione', 'img'=>'/img/membro_staff_1.jpeg'],

        ];

        return view('staff', compact('staff'));
    }
}
