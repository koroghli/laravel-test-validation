<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Form;
use Mail;
use User;

class ContactController extends Controller
{

    public function index()
    {
        return view('/contact');
    }
    /*creation de la fontion envoyer*/
    public function send(Request $request){
     $title = $request->name;
     $subject = $request->objet;
     $content = $request->content;
     Mail::send('/sent', ['title' => $title,'subject' => $subject, 'content' => $content], function ($message) use($title,$subject,$content)
     {
         $message->from('laravel@gmailcom', $title);
         $message->to('koroghli.amira@gmail.com');
         $message->subject($subject);
     });
      return view('/contact',["validation" =>"Mail envoyé avec succès, je vous répondrai avec plaisir et cela au plus vite."]);
   }
}
