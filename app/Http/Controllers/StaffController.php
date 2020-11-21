<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff(){
        $staff = 
        [
            ['name'=>'paolo', 'surname'=>'quattrocchi', 'img'=>'https://picsum.photos/200/300'],
            ['name'=>'paolo', 'surname'=>'quattrocchi', 'img'=>'https://picsum.photos/200/300'],
            ['name'=>'paolo', 'surname'=>'quattrocchi', 'img'=>'https://picsum.photos/200/300'],
            ['name'=>'paolo', 'surname'=>'quattrocchi', 'img'=>'https://picsum.photos/200/300'],
            ['name'=>'paolo', 'surname'=>'quattrocchi', 'img'=>'https://picsum.photos/200/300'],
            ['name'=>'paolo', 'surname'=>'quattrocchi', 'img'=>'https://picsum.photos/200/300'],

        ];

        return view('staff', compact('staff'));
    }
}
