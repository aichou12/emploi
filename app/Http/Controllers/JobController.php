<?php



namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Affiche la liste des emplois pour un secteur spécifique.
     */
    public function getJobsBySector($sector)
    {
        // Récupérer les emplois filtrés par secteur
        $jobs = Job::where('sector', $sector)->get();

        // Retourner les emplois sous forme de réponse JSON
        return response()->json($jobs);
    }

    /**
     * Affiche la liste de tous les emplois.
     */
    public function index()
    {
        // Récupérer tous les emplois
        $jobs = Job::all();

        return view('jobs.index', compact('jobs'));
    }

    /**
     * Affiche le formulaire de création d'un nouvel emploi.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Enregistre un nouvel emploi.
     */
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'title' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Création d'un nouvel emploi
        $job = Job::create([
            'title' => $request->title,
            'sector' => $request->sector,
            'description' => $request->description,
        ]);

        return redirect()->route('jobs.index')->with('success', 'Emploi créé avec succès!');
    }

    /**
     * Affiche un emploi spécifique.
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.show', compact('job'));
    }

    /**
     * Affiche le formulaire d'édition d'un emploi.
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.edit', compact('job'));
    }

    /**
     * Met à jour un emploi existant.
     */
    public function update(Request $request, $id)
    {
        // Validation des données
        $request->validate([
            'title' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Trouver l'emploi existant
        $job = Job::findOrFail($id);
        
        // Mettre à jour l'emploi
        $job->update([
            'title' => $request->title,
            'sector' => $request->sector,
            'description' => $request->description,
        ]);

        return redirect()->route('jobs.index')->with('success', 'Emploi mis à jour avec succès!');
    }

    /**
     * Supprime un emploi.
     */
    public function destroy($id)
    {
        // Trouver et supprimer l'emploi
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('jobs.index')->with('success', 'Emploi supprimé avec succès!');
    }
}
