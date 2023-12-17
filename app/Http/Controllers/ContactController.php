<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\AdminContact;
class ContactController extends Controller
{
    public function adminNotification(){
        request()->validate([
            'name'=>['required','string'],
            'email'=>['required','email'],
            'message'=>['required','string'],
        ]);
        $name=request('name');
        $email=request('email');
        $message=request('message');
        $user=User::whereRole('admin')->first();
        $user->notify(new AdminContact($name,$email,$message));
        $message="Votre message a bien ete envoyer";
        return back()->withStatus($message);
    }
    public function index(){
        $data=[
            'title'=>"Contactez-nous | ".config('app.name'),
            'description'=>"Contactez-nous pour toute question, demande d'information ou collaboration. Notre équipe est là pour vous aider. Remplissez le formulaire de contact ou utilisez les coordonnées fournies.",
        ];
        $message="Votre message a bien ete envoyer";
       
        return view('contact.index',$data)->withStatus($message);

    }
}
