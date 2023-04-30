<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    public function entreprises(){
        return $this->belongsTo(Entreprise::class, 'entreprise_id', 'id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
