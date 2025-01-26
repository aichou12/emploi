<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public $timestamps = true;
    // Définir les attributs remplissables (fillables) pour protéger contre l'assignation de masse
    protected $fillable = [
        'title',          // Le titre de l'emploi
        'description',    // La description de l'emploi
        'company',        // Le nom de l'entreprise
        'location',       // L'emplacement de l'emploi
        'salary',         // Le salaire de l'emploi
    ];

    // Définir les relations, par exemple avec les utilisateurs qui postulent
    public function userProfiles()
    {
        return $this->hasMany(UserProfile::class);
    }
}
