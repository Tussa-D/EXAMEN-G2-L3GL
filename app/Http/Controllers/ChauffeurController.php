<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{


    public function admin_chauffeur()
    {
        $chauffeurs = Chauffeur::all();
        return view('chauffeur/admin', compact('chauffeurs'));
    }

    public function index()
    {
        return view('accueil');
    }

    public function liste_chauffeur(){
        $chauffeurs = Chauffeur::all();
        return view('chauffeur.liste', compact('chauffeurs'));
    }

    public function ajouter_chauffeur(){
        return view('chauffeur.ajouter');
    }

    public function ajouter_chauffeur_traitement(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'experience'=>'required',
            'npermi'=>'required',
            'dateemission'=>'required',
            'dateexpiration'=>'required',
            'contrat'=>'required',
        ]);

        $chauffeur = new Chauffeur();
        $chauffeur->nom = $request->nom;
        $chauffeur->prenom = $request->prenom;
        $chauffeur->experience = $request->experience;
        $chauffeur->npermi = $request->npermi;
        $chauffeur->dateemission = $request->dateemission;
        $chauffeur->dateexpiration = $request->dateexpiration;
        $chauffeur->contrat = $request->contrat;
        $chauffeur->save();

        return redirect('/ajouter')->with('status', 'Chauffeur ajouter avec succes');
    }

    public function modifier_chauffeur($id){
       $chauffeurs = Chauffeur::find($id);
       return view('chauffeur.modifier', compact('chauffeurs'));
    }

    public function modifier_chauffeur_traitement(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'experience'=>'required',
            'npermi'=>'required',
            'dateemission'=>'required',
            'dateexpiration'=>'required',
            'contrat'=>'required',
        ]); 

        $chauffeur = Chauffeur::find($request->id);
        $chauffeur->nom = $request->nom;
        $chauffeur->prenom = $request->prenom;
        $chauffeur->experience = $request->experience;
        $chauffeur->npermi = $request->npermi;
        $chauffeur->dateemission = $request->dateemission;
        $chauffeur->dateexpiration = $request->dateexpiration;
        $chauffeur->contrat = $request->contrat;
        $chauffeur->update();

        return redirect('/chauffeur')->with('status', 'Chauffeur modifier avec succes');
   
    }

    public function supprimer_chauffeur($id){
        $chauffeur = Chauffeur::find($id);
        $chauffeur->delete();
        return redirect('/chauffeur')->with('status', 'Chauffeur supprimer avec succes');

    }




}
