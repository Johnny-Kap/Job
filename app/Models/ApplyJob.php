<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class ApplyJob extends Model
{
    use HasFactory, AsSource, Attachable, Filterable;

    protected $fillable = [
        'id',
        'job_id',
        'user_id',
    ];

    public function jobs(){
        return $this->belongsTo(Job::class, 'job_id', 'id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
