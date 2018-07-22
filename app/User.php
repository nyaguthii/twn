<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','contact','is_staff','is_member','is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function roles(){

        return $this->belongsToMany(Role::class);
    }

    public function vehicles(){

        return $this->hasMany(Vehicle::class);
    }

    public function payments(){

        return $this->hasMany(Payment::class);

    }
}
