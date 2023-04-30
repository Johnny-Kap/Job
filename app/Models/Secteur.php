<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Secteur extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'intitule',
    ];

    public function entreprises(){
        return $this->hasMany(Entreprise::class);
    }

    public function jobs(){
        return $this->hasMany(Job::class);
    }

    public function sous_secteurs(){
        return $this->hasMany(SousSecteur::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
