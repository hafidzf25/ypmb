<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartisipanSeminar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_partisipan_seminar';
    protected $table = 't_partisipan_seminar';
    public $timestamps = false;

    public $fillable = [
        'id_partisipan_seminar',
        'id',
        'id_seminar',
        'sertifikat'
    ];
}