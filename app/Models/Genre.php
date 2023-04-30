<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Genre extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'titre',
        'etat',
    ];

    public function jobs(){
        return $this->hasMany(Job::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
