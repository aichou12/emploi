<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    public $timestamps = true;
    // Définir les attributs remplissables (fillables) pour protéger contre l'assignation de masse
    
        protected $fillable = [
            'nom', 'prenom', 'genre', 'datenaiss', 'lieu',
            'situation', 'nombrenfant', 'exp_professionnelle', 
            'nombrexp', 'dernierposte', 'dernieremp', 'cv', 
            'lettremoti', 'lieu_residence', 'adresse', 'handicap'
        ];
    }
    
   
    



   

 
 
 
   
  
  
   
   
    
