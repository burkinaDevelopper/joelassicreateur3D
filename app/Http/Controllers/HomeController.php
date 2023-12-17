<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Auth::logout(User::find(1));
        $data=[
            "title"=>"Maîtrisez le Rendu 3D avec JOELASSI-CREATEUR3D | Formation Expertise Artistique",
            "description"=>"Perfectionnez vos compétences en rendu 3D avec JOELASSI-CREATEUR3D, un formateur expérimenté. Découvrez des méthodes innovantes pour créer des rendus visuellement époustouflants et donnez vie à votre vision artistique.",
        
        ];
        return view('home.index',$data);
    }
}

// <meta name="description" content="">



