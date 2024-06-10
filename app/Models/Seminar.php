<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_seminar';
    protected $table = 't_seminar';
    public $timestamps = false;

    public $fillable = [
        'id_seminar',
        'nama_seminar',
        'tanggal_seminar',
        'foto_sampul',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'link',
        'status'
    ];
}