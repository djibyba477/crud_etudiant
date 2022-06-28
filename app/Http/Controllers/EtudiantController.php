<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function view()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $Etu=new Etudiant();
        $Etu->matricule=$request->matricule;
        $Etu->nomComplet=$request->nomComplet;
        $Etu->telephone=$request->telephone;
        $Etu->adresse=$request->adresse;
        if($Etu->save()){
            return redirect()->back()->with("message","étudiant ajouté avec success");
        }else{
            return redirect()->back()->with("message","erreur lors de l'ajout de l'édutiant");
        }
    }

    public function show(Request $request)
    {
        $Etu=Etudiant::find($request->id);
        return view("welcome",compact("Etu"));
    }

     public function statut(Request $request)
    {
        $Etu=Etudiant::find($request->statut);
        return view("welcome",compact("Etu"));
    }
}
