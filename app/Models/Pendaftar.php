<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pendaftar';
    protected $table='t_pendaftar';
    protected $fillable = ['id_pendaftar', 'id_user', 'id_pelatihan'];
}
