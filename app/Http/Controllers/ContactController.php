<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function welcome () {
        $contact = new Contact;
        $message = $contact->messageContact();
        return view('contact', ['message' => $message]);
    }
}
