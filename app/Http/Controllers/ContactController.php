<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
<<<<<<< HEAD
use App\User;
use Auth;
=======
>>>>>>> 9e26a59b43fbad7b6068c3714dab64e1144b7dd4

class ContactController extends Controller
{
  public function index()
  {
      return view('/contact');
  }

  public function insert(Request $request){
    $persons = new Contact;


    //recuperer les valeurs des trois elements
<<<<<<< HEAD
    $persons->name = $request->name;
    $persons->message = $request->message;
    $persons->email = $request->email;
    $persons->save();


  return view('/home');
=======

    $persons->name = $request->name;
    $persons->message = $request->message;
    $persons->email = $request->email;

    $persons->save();
    return view("/home");

>>>>>>> 9e26a59b43fbad7b6068c3714dab64e1144b7dd4

  }
}
