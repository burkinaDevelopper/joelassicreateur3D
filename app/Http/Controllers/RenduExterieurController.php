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
    RenduExterieur,
    RenduFix
};
class RenduExterieurController extends Controller
{
    public function index(){
       
        $data=[
            'title'=>"Formation Avancée en Rendu Extérieur 3D | Techniques, Outils et Projets Pratiques",
            'description'=>"Plongez dans le monde du rendu extérieur 3D avec notre formation avancée. Acquérez une expertise dans      l'utilisation d'outils de rendu, perfectionnez vos compétences artistiques et participez à des projets pratiques pour     mettre en œuvre vos connaissances.",
            'rendu4'=>RenduFix::find(4),
            'rendu5'=>RenduFix::find(5),
            'rendu6'=>RenduFix::find(6),
            'renduExterieurs'=>RenduExterieur::get(),
        ];
        return view('exterieur.index',$data);
    }
   
    public function renduExterieur(){
        return view('exterieur.add');
    }

    public function store(RenduRequest $request){
        $request->validated();
        $path=(new UploadImage())->addImage('exterieur');
        $rendu=RenduExterieur::create([
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
            'exterieurs'=>RenduExterieur::get(),
            'rendu4'=>RenduFix::find(4),
            'rendu5'=>RenduFix::find(5),
            'rendu6'=>RenduFix::find(6),
        ];
        return view('exterieur.display',$data);
    }
    public function edit(RenduExterieur $exterieur){
        $data=[
            'exterieur'=>$exterieur,
        ];
        return view('exterieur.edit', $data);
    }
    public function update(RenduRequest $request,RenduExterieur $exterieur){
        $request->validated();
        $path=(new UploadImage())->updateImageExterieur('exterieur',$exterieur);
        $rendu=RenduExterieur::updateOrcreate(['id'=>$exterieur->id],[
            'title'=>request('title'),
            'description'=>request('description'),
            'path'=> $path,
            'url'=>Storage::url($path),
        ]);
        $message="rendu ".$rendu->title." bien Modifier";
        return back()->withSuccess($message);
    }
    public function delete(RenduExterieur $exterieur){
        Storage::delete($exterieur->path);
        $exterieur->delete();
        $message= 'Rendu supprimer avec success';
        return back()->withSuccess($message);
    }
    public function updateFix(RenduFix $rendu){
        $data=[
            'rendu'=>$rendu,
        ];
        return view('exterieur.updateFix',$data);
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
