<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_modul';
    protected $table='t_modul';
    protected $fillable = ['id_modul', 'nama_section_modul'];
}
