<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulPelatihan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_modul_pelatihan';
    protected $table='t_modul_pelatihan';
    protected $fillable = ['id_modul_pelatihan', 'id_modul', 'id_pelatihan'];
}
