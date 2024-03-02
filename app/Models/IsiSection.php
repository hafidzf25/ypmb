<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsiSection extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_isi_section';
    protected $table='t_isi_section';
    protected $fillable = ['id_isi_section', 'judul_section', 'id_video', 'id_modul'];
}
