<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function adminvehicule_vehicule()
    {
        $vehicules = Vehicule::all();
        return view('vehicule/adminvehicule', compact('vehicules'));
    }

    public function ajout_vehicule(){
        return view('vehicule.ajout');
    }

    public function ajout_vehicule_traitement(Request $request){
        $request->validate([
            'type'=>'required',
            'dateachat'=>'required',
            'kmdefaut'=>'required',
            'matricule'=>'required',
            'chauffeur'=>'required',
            'statut'=>'required',
            // 'vignette'=>'required',
        ]);

        $vehicule = new Vehicule();
        $vehicule->type = $request->type;
        $vehicule->dateachat = $request->dateachat;
        $vehicule->kmdefaut = $request->kmdefaut;
        $vehicule->matricule = $request->matricule;
        $vehicule->chauffeur = $request->chauffeur;
        $vehicule->statut = $request->statut;
        // $vehicule->vignette = $request->vignette;
        $vehicule->save();

        return redirect('/ajout')->with('status', 'Chauffeur ajouter avec succes');
    }


    public function modifie_vehicule($id){
        $vehicules = Vehicule::find($id);
        return view('vehicule.modifie', compact('vehicules'));
    }

     public function modifie_vehicule_traitement(Request $request){
        $request->validate([
            'type'=>'required',
            'dateachat'=>'required',
            'kmdefaut'=>'required',
            'matricule'=>'required',
            'chauffeur'=>'required',
            'statut'=>'required',
            'image'=>'nullable|mimes:png,jpg,jpeg,webp',
            // 'vignette'=>'required',
        ]); 

        $vehicule = Vehicule::find($request->id);
        $vehicule->type = $request->type;
        $vehicule->dateachat = $request->dateachat;
        $vehicule->kmdefaut = $request->kmdefaut;
        $vehicule->matricule = $request->matricule;
        $vehicule->chauffeur = $request->chauffeur;
        $vehicule->statut = $request->statut;
        if($request->has('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $path = '/img';
            $file->move('$path', $filename);

        }

        // $vehicule->vignette = $request->vignette;
        $vehicule->update();

        return redirect('/img')->with('status', 'Chauffeur modifier avec succes');
   
    }
    /**
     * Display a listing of the resource.
     */
    public function create_vehicule()
    {
        $vehicules = Vehicule::all();
        return view('vehicule.create_vehicule', compact('vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function admin_listes_vehicule()
    {
        $vehicules = Vehicule::all();
        return view('vehicule.admin_listes_vehicule', compact('vehicules'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
