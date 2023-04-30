<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    public function avis(){
        return $this->hasMany(Avis::class);
    }

    public function secteurs(){
        return $this->belongsTo(Secteur::class, 'secteur_id', 'id');
    }
}
