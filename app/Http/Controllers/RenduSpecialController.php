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
    RenduSpecial,
    RenduFix
};
class RenduSpecialController extends Controller
{
    public function index(){
       
        $data=[
            'title'=>"Formation Avancée en Rendu Extérieur 3D | Techniques, Outils et Projets Pratiques",
            'description'=>"Plongez dans le monde du rendu extérieur 3D avec notre formation avancée. Acquérez une expertise dans      l'utilisation d'outils de rendu, perfectionnez vos compétences artistiques et participez à des projets pratiques pour     mettre en œuvre vos connaissances.",
            'rendu7'=>RenduFix::find(7),
            'rendu8'=>RenduFix::find(8),
            'rendu9'=>RenduFix::find(9),
            'renduSpecials'=>RenduSpecial::get(),
        ];
        return view('special.index',$data);
    }
   
    public function renduSpecial(){
        return view('special.add');
    }
    
    public function store(RenduRequest $request){
        $request->validated();
        $path=(new UploadImage())->addImage('special');
        $rendu=RenduSpecial::create([
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
            'specials'=>RenduSpecial::get(),
            'rendu7'=>RenduFix::find(7),
            'rendu8'=>RenduFix::find(8),
            'rendu9'=>RenduFix::find(9),
        ];
        return view('special.display',$data);
    }
    public function edit(RenduSpecial $special){
        $data=[
            'special'=>$special,
        ];
        return view('special.edit', $data);
    }
    public function update(RenduRequest $request,RenduSpecial $special){
        $request->validated();
        $path=(new UploadImage())->updateImageSpecial('special',$special);
        $rendu=RenduSpecial::updateOrcreate(['id'=>$special->id],[
            'title'=>request('title'),
            'description'=>request('description'),
            'path'=> $path,
            'url'=>Storage::url($path),
        ]);
        $message="rendu ".$rendu->title." bien Modifier";
        return back()->withSuccess($message);
    }
    public function delete(RenduSpecial $special){
        Storage::delete($special->path);
        $special->delete();
        $message= 'Rendu supprimer avec success';
        return back()->withSuccess($message);
    }
    public function updateFix(RenduFix $rendu){
        $data=[
            'rendu'=>$rendu,
        ];
        return view('special.updateFix',$data);
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
