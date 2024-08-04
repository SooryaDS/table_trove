<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'contact_number', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

