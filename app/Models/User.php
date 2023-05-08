<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Orchid\Platform\Models\User as Authenticatable;
use ProtoneMedia\LaravelVerifyNewEmail\MustVerifyNewEmail;

class User extends Authenticatable implements MustVerifyEmail
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'is_enterprise',
        'name',
        'prenom',
        'email',
        'password',
        'permissions',
        'tel',
        'date_naiss',
        'genre_id',
        'secteur_id',
    ];

    // protected $guarded = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'permissions',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'permissions'          => 'array',
        'email_verified_at'    => 'datetime',
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name',
        'email',
        'permissions',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name',
        'email',
        'updated_at',
        'created_at',
    ];

    public function genres(){
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    public function secteurs(){
        return $this->belongsTo(Secteur::class, 'secteur_id', 'id');
    }

    public function user_details(){
        return $this->hasMany(UserDetail::class);
    }

    public function experiences(){
        return $this->hasMany(Experience::class);
    }

    public function informations(){
        return $this->hasMany(Information::class);
    }

    public function educations(){
        return $this->hasMany(Education::class);
    }

    public function competences(){
        return $this->hasMany(Competence::class);
    }

    public function langues(){
        return $this->hasMany(Langue::class);
    }

    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
