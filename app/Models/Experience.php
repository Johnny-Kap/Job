<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $dates = ['date_fin', 'date_debut'];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
