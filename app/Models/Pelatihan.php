<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pelatihan';
    protected $table = 't_pelatihan';
    public $timestamps = false;

    public $fillable = [
        'id_pelatihan',
        'nama_pelatihan',
        'tanggal_awal',
        'tanggal_akhir',
        'foto_sampul',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'status'
    ];
}