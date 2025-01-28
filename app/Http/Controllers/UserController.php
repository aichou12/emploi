<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Country;
class UserController extends Controller
{
    // Controller



    // Afficher le formulaire pour remplir les informations utilisateur
    public function showForm()
    {
        // Récupérer tous les emplois disponibles
        $jobs = Job::all();
        $countries = Country::all();
        
        return view('dashboard', compact('jobs','countries'));
    }
    

    // Enregistrer les informations de l'utilisateur dans la base de données
    public function store(Request $request)
    {
       // dd($request);
        // Validation des données
        UserProfile::create($request->all());
        dd("ok");
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'letter' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'experience' => 'required|string',
            'years_of_experience' => 'required|integer|min:0',
            'job_id' => 'required|exists:jobs,id',
            'formation' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'graduation_year' => 'required|integer|min:1900|max:' . date('Y'),
            'speciality' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
        ]);

        // Enregistrer le CV et la lettre de motivation
        $cvPath = $request->file('cv')->store('cv');
        $letterPath = $request->file('letter')->store('letters');

        // Créer ou mettre à jour le profil utilisateur
        $userProfile = UserProfile::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'cv' => $cvPath,
            'letter' => $letterPath,
            'experience' => $request->experience,
            'years_of_experience' => $request->years_of_experience,
            'job_id' => $request->job_id,
            'formation' => $request->formation,
            'degree' => $request->degree,
            'graduation_year' => $request->graduation_year,
            'speciality' => $request->speciality,
            'institution' => $request->institution,
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre profil a été mis à jour avec succès.');
    }
}
