<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_jenjang';
    protected $table='t_jenjang';
    protected $fillable = ['id_jenjang', 'nama_jenjang'];
}
