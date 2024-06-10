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
        'id_user',
        'id_seminar',
        'sertifikat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}