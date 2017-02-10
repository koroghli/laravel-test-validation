<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
  public function index()
  {
      return view('/contact');
  }

  public function insert(Request $request){
    $persons = new Contact;


    //recuperer les valeurs des trois elements

    $persons->name = $request->name;
    $persons->message = $request->message;
    $persons->email = $request->email;

    $persons->save();
    return view("/home");


  }
}
