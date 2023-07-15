<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Job extends Model
{
    use HasFactory, AsSource;

    protected $dates = ['dateline'];

    protected $fillable = [
        'titre',
        'description',
        'email_contact',
        'dateline',
        'salaire_min',
        'salaire_max',
        'experience',
        'qualification',
        'contrat',
        'genre_id',
        'adresse',
        'tel',
        'site_internet',
        'secteur_id',
        'sous_secteur_id',
        'type_job_id',
        'user_id',
        'etat',
    ];

    public function apply_jobs()
    {
        return $this->hasMany(ApplyJob::class);
    }

    public function secteurs()
    {
        return $this->belongsTo(Secteur::class, 'secteur_id', 'id');
    }

    public function sous_secteurs()
    {
        return $this->belongsTo(SousSecteur::class, 'sous_secteur_id', 'id');
    }

    public function type_jobs()
    {
        return $this->belongsTo(TypeJob::class, 'type_job_id', 'id');
    }

    public function genres()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function job_favoris()
    {
        return $this->hasMany(JobFavori::class);
    }
}
