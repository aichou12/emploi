<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    use HasFactory;

    // Nom de la table
    protected $table = 'countries';

    // Champs à remplir
    protected $fillable = ['nom', 'code'];
}
