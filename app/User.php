<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
    public $timestamps = false;
    
    protected $fillable = [
        'usuario', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function getPasswordAttribute($value) {
    //     if( Hash::needsRehash($value) ) {
    //             $value = Hash::make($value);
    //     }
    //     return  $value;
    // }
}
