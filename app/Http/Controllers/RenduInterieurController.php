<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\{
    RenduRequest,
    renduFix as RenduValidation,
};
use Str,Storage;
use App\Services\UploadImage;
use App\Models\{
    RenduInterieur,
    RenduFix
};
class RenduInterieurController extends Controller
{
    public function index(){
       
        $data=[
            'title'=>"Formation Professionnelle en Rendu Intérieur 3D | Design d'Intérieur Virtuel",
            'description'=>"Découvrez notre programme de formation professionnelle axé sur le rendu intérieur 3D. Acquérez les compétences nécessaires pour concevoir et présenter des espaces intérieurs avec réalisme. Maîtrisez les logiciels de rendu, les techniques d'éclairage et les meilleures pratiques du secteur.",
            'rendu1'=>RenduFix::find(1),
            'rendu2'=>RenduFix::find(2),
            'rendu3'=>RenduFix::find(3),
            'renduInterieurs'=>RenduInterieur::get(),
        ];
        return view('interieur.index',$data);
    }
    public function renduInterieur(){
        return view('interieur.add');
    }

    public function store(RenduRequest $request){
        $request->validated();
        $path=(new UploadImage())->addImage('interieur');
        $rendu=RenduInterieur::create([
            'title'=>request('title'),
            'description'=>request('description'),
            'path'=> $path,
            'url'=>Storage::url($path),
        ]);
        $message="rendu ".$rendu->title." bien ajouter";
        return back()->withSuccess($message);
    }
    public function display(){
        $data=[
            'interieurs'=>RenduInterieur::get(),
            'rendu1'=>RenduFix::find(1),
            'rendu2'=>RenduFix::find(2),
            'rendu3'=>RenduFix::find(3),
        ];
        return view('interieur.display',$data);
    }
    public function edit(RenduInterieur $interieur){
        $data=[
            'interieur'=>$interieur,
        ];
        return view('interieur.edit', $data);
    }
    public function update(RenduRequest $request,RenduInterieur $interieur){
        $request->validated();
        $path=(new UploadImage())->updateImage('interieur',$interieur);
        $rendu=RenduInterieur::updateOrcreate(['id'=>$interieur->id],[
            'title'=>request('title'),
            'description'=>request('description'),
            'path'=> $path,
            'url'=>Storage::url($path),
        ]);
        $message="rendu ".$rendu->title." bien Modifier";
        return back()->withSuccess($message);
    }
    public function delete(RenduInterieur $interieur){
        Storage::delete($interieur->path);
        $interieur->delete();
        $message= 'Rendu supprimer avec success';
        return back()->withSuccess($message);
    }
    public function updateFix(RenduFix $rendu){
        $data=[
            'rendu'=>$rendu,
        ];
        return view('interieur.updateFix',$data);
    }
    public function storeFix(RenduFix $rendu,RenduValidation $request){
        $request->validated();
        $path=(new UploadImage())->ImageFix('renduFix',$rendu);
        $rendu=RenduFix::updateOrcreate(['id'=>$rendu->id],[
            'title'=>request('title'),
            'path'=> $path,
            'url'=>Storage::url($path),
        ]);
        $message="rendu ".$rendu->title." bien Modifier";
        return back()->withSuccess($message);
    }
}
