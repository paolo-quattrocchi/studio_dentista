<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff(){
        
        $staff = 
        [
            ['name'=>'Paolo', 'surname'=>'Quattrocchi', 'description'=>'breve descrizione', 'img'=>'/img/membro_staff_1.jpeg'],
            ['name'=>'Paolo', 'surname'=>'Quattrocchi', 'description'=>'breve descrizione', 'img'=>'/img/membro_staff_1.jpeg'],
            ['name'=>'Paolo', 'surname'=>'Quattrocchi', 'description'=>'breve descrizione', 'img'=>'/img/membro_staff_1.jpeg'],
            ['name'=>'Paolo', 'surname'=>'Quattrocchi', 'description'=>'breve descrizione', 'img'=>'/img/membro_staff_1.jpeg'],
            ['name'=>'Paolo', 'surname'=>'Quattrocchi', 'description'=>'breve descrizione', 'img'=>'/img/membro_staff_1.jpeg'],
            ['name'=>'Paolo', 'surname'=>'Quattrocchi', 'description'=>'breve descrizione', 'img'=>'/img/membro_staff_1.jpeg'],

        ];

        return view('staff', compact('staff'));
    }
}
