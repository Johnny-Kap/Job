<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class SousSecteur extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'intitule',
        'secteur_id',
    ];

    public function secteurs(){
        return $this->belongsTo(Secteur::class, 'secteur_id', 'id');
    }

    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
