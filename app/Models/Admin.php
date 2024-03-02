<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_admin';
    protected $table='t_admin';
    protected $fillable = [
        'id_admin',
        'username_admin',
        'role',
        'password_admin',
    ];

    protected $hidden = [
        'password_admin',
        'remember_token',
    ];
}
