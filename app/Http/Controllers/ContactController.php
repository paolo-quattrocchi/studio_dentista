<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Laravel\Ui\Presets\React;

class ContactController extends Controller
{
  public function contactUs(){
    return view('contacts');
  }

  public function contactSave(Request $request){

    $name = $request  -> input('name');
    $email = $request  -> input('email');
    $phone = $request  -> input('phone');
    $description = $request  -> input('description');

    $contact = compact('name','email','phone','description');

    Mail::to('pina.lasbiancatrice@service.com')->send(new ContactReceived($contact));

      return redirect(route('thank_you'));

  }

  public function thankYou(){
      return view('thank_you');
  }
}
