<?php

use App\Http\Controllers\{
    ProfileController,
    HomeController,
    ContactController,
    NewspaperController,
    RenduExterieurController,
    AdminController,
    RenduInterieurController,
    RenduSpecialController,
    CoursController,
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('admin-contact',[ContactController::class,'adminNotification'])->name('admin.notification');
Route::post('newspaper',[NewspaperController::class,'store'])->name('newspaper');
Route::get('unsubscribe/{token}',[NewspaperController::class,'delete'])->name('unsubscribe.delete');
Route::get('popop',[NewspaperController::class,'popop'])->name('popop');





Route::get('rendu-interieur',[RenduInterieurController::class,'index'])->name('rendu.interieur');
Route::get('rendu-exterieur',[RenduExterieurController::class,'index'])->name('rendu.exterieur');
Route::get('rendu-special',[RenduSpecialController::class,'index'])->name('rendu.special');
Route::get('cours',[CoursController::class,'index'])->name('cours');
Route::get('contact',[ContactController::class,'index'])->name('contact');

Route::middleware(['auth', 'admin','verified'])->group(function () {
     Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
     Route::get('notificationMarketing',[AdminController::class,'notificationMarketing'])->name('notificationMarketing');
     Route::post('marketingStore',[AdminController::class,'marketingStore'])->name('marketingStore');
     
     Route::get('add-interieur',[RenduInterieurController::class,'renduInterieur'])->name('add.interieur');
     Route::post('post-interieur',[RenduInterieurController::class,'store'])->name('post.interieur');
     Route::get('display-interieur',[RenduInterieurController::class,'display'])->name('display-interieur');
     Route::get('edit-interieur/{interieur}',[RenduInterieurController::class,'edit'])->name('edit.interieur');
     Route::post('update-interieur/{interieur}',[RenduInterieurController::class,'update'])->name('update.interieur');
     Route::get('delete-interieur/{interieur}',[RenduInterieurController::class,'delete'])->name('delete.interieur');
     Route::get('rendu-interieur/{rendu}',[RenduInterieurController::class,'updateFix'])->name('update.rendu');
     Route::post('rendu-interieur/{rendu}',[RenduInterieurController::class,'storeFix'])->name('store.rendu');
     //-------------------Rendu Exterieur------------------------------

     Route::get('add-exterieur',[RenduExterieurController::class,'renduExterieur'])->name('add.exterieur');
     Route::post('post-exterieur',[RenduExterieurController::class,'store'])->name('post.exterieur');
     Route::get('display-exterieur',[RenduExterieurController::class,'display'])->name('display-exterieur');
     Route::get('edit-exterieur/{exterieur}',[RenduExterieurController::class,'edit'])->name('edit.exterieur');
     Route::post('update-exterieur/{exterieur}',[RenduExterieurController::class,'update'])->name('update.exterieur');
     Route::get('delete-exterieur/{exterieur}',[RenduExterieurController::class,'delete'])->name('delete.exterieur');
     Route::get('rendu-exterieur/{rendu}',[RenduExterieurController::class,'updateFix'])->name('update.rendu');
     Route::post('rendu-exterieur/{rendu}',[RenduExterieurController::class,'storeFix'])->name('store.rendu');

     //-------------------Rendu Special------------------------------

     Route::get('add-special',[RenduSpecialController::class,'renduSpecial'])->name('add.special');
     Route::post('post-special',[RenduSpecialController::class,'store'])->name('post.special');
     Route::get('display-special',[RenduSpecialController::class,'display'])->name('display-special');
     Route::get('edit-special/{special}',[RenduSpecialController::class,'edit'])->name('edit.special');
     Route::post('update-special/{special}',[RenduSpecialController::class,'update'])->name('update.special');
     Route::get('delete-special/{special}',[RenduSpecialController::class,'delete'])->name('delete.special');
     Route::get('rendu-special/{rendu}',[RenduSpecialController::class,'updateFix'])->name('update.rendu');
     Route::post('rendu-special/{rendu}',[RenduSpecialController::class,'storeFix'])->name('store.rendu');
     //----------------newspaper
     Route::get('newspaper-all',[NewspaperController::class,'index'])->name('newspaper.all');
});

