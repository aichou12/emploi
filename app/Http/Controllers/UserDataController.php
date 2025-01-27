<?php

// app/Http/Controllers/UserDataController.php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserDataController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'dob' => 'required|date',
            'birthplace' => 'required|string|max:255',
            'residence' => 'required|string|max:255',
            'marital_status' => 'required|string',
            'children_count' => 'required|integer',
            'disability' => 'required|string',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'cover_letter' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'experience' => 'required|string',
            'years_of_experience' => 'required|integer',
            'sector' => 'required|string',
            'job_id' => 'required|string',
            'education' => 'required|string',
        ]);

        // Gérer les fichiers téléchargés
        $cvPath = $request->file('cv')->store('cvs');
        $coverLetterPath = $request->file('cover_letter')->store('cover_letters');

        // Enregistrer les données dans la base
        $userData = UserData::create([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'birthplace' => $request->birthplace,
            'residence' => $request->residence,
            'marital_status' => $request->marital_status,
            'children_count' => $request->children_count,
            'disability' => $request->disability,
            'cv' => $cvPath,
            'cover_letter' => $coverLetterPath,
            'experience' => $request->experience,
            'years_of_experience' => $request->years_of_experience,
            'sector' => $request->sector,
            'job_id' => $request->job_id,
            'education' => $request->education,
        ]);

        return redirect()->back()->with('success', 'Données enregistrées avec succès!');
    }
}
