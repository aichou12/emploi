<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Info;

use App\Models\Country;
class InfoController extends Controller
{
   
    public function create()
    {
      
        return view('info.create');
    }
    public function index()
    {
        // Assuming you're fetching data from a model, e.g., Info model
        $infos = Info::all(); // Retrieve all records or customize your query
    
        // Pass the $infos variable to the view
        return view('info.index', compact('infos')); // compact() is shorthand for passing variables to the view
    }
                public function edit($id)
            {    
                $info = Info::find($id); // Retrieve the data you want to edit
                return view('info.edit', compact('info')); // Pass the $info variable to the view
            }


// Met à jour les informations dans la base de données
public function update(Request $request, $id)
{
    $info = Info::findOrFail($id); // Trouver l'info à mettre à jour

    // Validation des données
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'genre' => 'required|string',
        'datenaiss' => 'required|date',
        'lieu' => 'required|string|max:255',
        'situation' => 'required|string|max:255',
        'nombrenfant' => 'required|integer',
        'exp_professionnelle' => 'required|string|max:255',
        'nombrexp' => 'required|integer',
        'dernierposte' => 'required|string|max:255',
        'dernieremp' => 'required|string|max:255',
        'cv' => 'required|string|max:255',
        'lettremoti' => 'required|string|max:255',
        'lieu_residence'=> 'required|string|max:255', 
        'adresse'=> 'required|string|max:255', 
        'handicap'=> 'required|boolean'
    ]);

    // Mise à jour de l'info
    $info->update($validated);

    // Rediriger après la mise à jour
    return redirect()->route('info.index')->with('success', 'Information mise à jour avec succès!');
}

    /**
     * Enregistre un nouvel emploi.
     */
    public function store(Request $request)
    {
        
         // dd($request);
        // Validation des champs
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'genre' => 'required|string',
            'datenaiss' => 'required|date',
            'lieu' => 'required|string',
            'situation' => 'required|string',
            'nombrenfant' => 'required|integer',
            'exp_professionnelle' => 'required|string|max:255',
            'nombrexp' => 'required|integer',
            'dernierposte' => 'required|string|max:255',
            'dernieremp' => 'required|string|max:255',
            'cv' => 'string|max:255',  // Modifié pour être une chaîne
            'lettremoti' => 'string|max:255',  // Modifié pour être une chaîne
            'lieu_residence'=> 'required|string|max:255', 
            'adresse'=> 'required|string|max:255', 
            'handicap'=> 'required|boolean'
        ]);
    
        // Créer un nouvel enregistrement dans la base de données
       Info::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'genre' => $request->genre,
            'datenaiss' => $request->datenaiss,
            'lieu' => $request->lieu,
            'situation' => $request->situation,
            'nombrenfant' => $request->nombrenfant,
            'exp_professionnelle' => $request->exp_professionnelle,
            'nombrexp' => $request->nombrexp,
            'dernierposte' => $request->dernierposte,
            'dernieremp' => $request->dernieremp,
            'cv' => $request->cv,  // Lien sous forme de chaîne de caractères
            'lettremoti' => $request->lettremoti,  // Lien sous forme de chaîne de caractères
            'lieu_residence'=> $request->lieu_residence, 
            'adresse'=> $request->adresse, 
            'handicap'=> $request->handicap
        ]);
    
        // Redirection ou autre action après l'enregistrement
        return redirect()->route('info.index')->with('success', 'Les informations ont été ajoutées avec succès!');
    
    }
    
}