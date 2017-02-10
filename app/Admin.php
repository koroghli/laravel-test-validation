<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //se connecter a la base de Donnee
    public $timestamps = false;

    public $table= "messages"; 
}
