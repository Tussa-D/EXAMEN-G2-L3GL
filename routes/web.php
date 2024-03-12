<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\PostController;
use App\Models\Vehicule;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/accueil',[ChauffeurController::class,'index']);

Route::get('/modifier_chauffeur/{id}',[ChauffeurController::class,'modifier_chauffeur']);
Route::get('/supprimer_chauffeur/{id}',[ChauffeurController::class,'supprimer_chauffeur']);
Route::post('/modifier/traitement',[ChauffeurController::class, 'modifier_chauffeur_traitement']);
Route::get('/chauffeur',[ChauffeurController::class,'liste_chauffeur']);
Route::get('/ajouter',[ChauffeurController::class,'ajouter_chauffeur']);
Route::post('/ajouter/traitement',[ChauffeurController::class, 'ajouter_chauffeur_traitement']);


Route::get('/admin', [ChauffeurController::class, 'admin_chauffeur']);
Route::get('/adminvehicule', [VehiculeController::class, 'adminvehicule_vehicule']);
Route::get('/ajout',[VehiculeController::class,'ajout_vehicule']);
Route::post('/ajout/traitement',[VehiculeController::class, 'ajout_vehicule_traitement']);
Route::get('/modifie_vehicule/{id}',[VehiculeController::class,'modifie_vehicule']);
Route::post('/modifie/traitement',[VehiculeController::class, 'modifie_vehicule_traitement']);

Route::get('/create_vehicule', [VehiculeController::class, 'create_vehicule']);




Route::get('/location',[PostController::class,'location']);
Route::get('/locationadmin',[PostController::class,'locationadmin']);
 
Route::get('/created',function(){
return view('created');
});
 
Route::post('/post',[PostController::class,'store']);
Route::delete('/delete/{id}',[PostController::class,'destroy']);
Route::get('/edit/{id}',[PostController::class,'edit']);
Route::get('/reservation/{id}',[PostController::class,'reservation']);
Route::put('/reservationterminer/{id}',[PostController::class,'reservationterminer']);


 
Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);
 
Route::put('/update/{id}',[PostController::class,'update']);





