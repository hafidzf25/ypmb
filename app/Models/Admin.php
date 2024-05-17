<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 't_admin';
    protected $fillable = [
        'username_admin',
        'password_admin',
    ];

    protected $hidden = [
        'password_admin',
        'remember_token',
    ];
}