<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class TypeJob extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'titre',
    ];


    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
