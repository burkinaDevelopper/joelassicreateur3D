<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function index(){
        $data=[
            'title'=>"Cours de Rendu 3D - Maîtrisez les Techniques de Modélisation et d'Animation 3D",
            'description'=>"Explorez notre cours de rendu 3D pour acquérir les compétences nécessaires à la création de graphismes 3D époustouflants. Apprenez les techniques de modélisation, d'animation et d'éclairage pour donner vie à vos idées en trois dimensions.",
        ];
        return view('cours.index',$data);
    }
}
