<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //se connecter a la base de Donnee
    public $timestamps = false;

    public $table= "messages" ;
}
