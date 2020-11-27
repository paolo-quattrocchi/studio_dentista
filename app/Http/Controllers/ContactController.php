<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Laravel\Ui\Presets\React;

class ContactController extends Controller
{
  public function contactUs(){
    return view('contacts');
  }

  public function contactSave(Request $request){

    $contact = new Contact();

    $contact->name = $request->input('name');
    $contact->surname = $request->input('surname');
    $contact->email = $request->input('email');
    $contact->phone = $request->input('phone');
    $contact->description = $request->input('description');

    $contact->save();

    /* dd($contact); */

    /* non serve più perché adesso c'è il database */
    /* $contact = compact('name','email','phone','description'); */

    Mail::to('pina.lasbiancatrice@service.com')->send(new ContactReceived($contact));

      return redirect(route('thank_you'));

  }

  public function thankYou(){
      return view('thank_you');
  }
}
