<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function apply_jobs(){
        return $this->hasMany(ApplyJob::class);
    }

    public function secteurs(){
        return $this->belongsTo(Secteur::class, 'secteur_id', 'id');
    }

    public function sous_secteurs(){
        return $this->belongsTo(SousSecteur::class, 'sous_secteur_id', 'id');
    }

    public function type_jobs(){
        return $this->belongsTo(TypeJob::class, 'type_job_id', 'id');
    }

    public function genres(){
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function job_favoris(){
        return $this->hasMany(JobFavori::class);
    }
}
