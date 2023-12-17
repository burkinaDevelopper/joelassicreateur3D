<?php 
namespace App\Services;
use Str,Storage;
use App\Models\{
    RenduInterieur,
    RenduExterieur,
    RenduSpecial,
    RenduFix
};
class UploadImage{
   
    protected RenduInterieur $interieur;
    protected RenduExterieur $exterieur;
    protected RenduSpecial $special;
    protected RenduFix $rendu;


    public function addImage($folder){
        if (request()->file('image')->isValid()) {
            $ext=request()->file('image')->extension();
            $fileName=Str::uuid().'.'.$ext;
            $path=request()->file('image')->storeAs($folder,$fileName);
           return  $path;
        }
    }
    public function updateImage($folder,RenduInterieur $interieur){
        if (request()->file('image')->isValid()) {
            Storage::delete($interieur->path);
            $ext=request()->file('image')->extension();
            $fileName=Str::uuid().'.'.$ext;
            $path=request()->file('image')->storeAs($folder,$fileName);
           return  $path;
        }
    }
    public function updateImageExterieur($folder,RenduExterieur $exterieur){
        if (request()->file('image')->isValid()) {
            Storage::delete($exterieur->path);
            $ext=request()->file('image')->extension();
            $fileName=Str::uuid().'.'.$ext;
            $path=request()->file('image')->storeAs($folder,$fileName);
           return  $path;
        }
    }
    public function updateImageSpecial($folder,RenduSpecial $Special){
        if (request()->file('image')->isValid()) {
            Storage::delete($Special->path);
            $ext=request()->file('image')->extension();
            $fileName=Str::uuid().'.'.$ext;
            $path=request()->file('image')->storeAs($folder,$fileName);
           return  $path;
        }
    }
    public function ImageFix($folder,RenduFix $rendu){
        if (request()->file('image')->isValid()) {
            Storage::delete($rendu->path);
            $ext=request()->file('image')->extension();
            $fileName=Str::uuid().'.'.$ext;
            $path=request()->file('image')->storeAs($folder,$fileName);
           return  $path;
        }
    }
}