<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
   public function getlist(){
   	$contacts = Contact::all();


   	return view ('contact',compact('contacts'));
   }

   public function cform(){
   	return view('fcontact');
   }

    public function store(Request $request)
   {
   	$c = new Contact();
   	$c->name = $request->name;
   	$c->address = $request->address;
   	$c->phone = $request->phone;
   	$c->save();

   	return redirect('contact');
   }
}
