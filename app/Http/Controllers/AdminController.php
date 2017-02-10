<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{


    public function index()
   {

   }
   public function get() {
          $persons = Admin::All();
          $persons = $persons->reverse();
          return view("/admin", ['persons' => $persons]);
        }
}
