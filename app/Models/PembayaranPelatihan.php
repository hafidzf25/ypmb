<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranPelatihan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_partisipan_pembayaran_pelatihan';
    protected $table = 't_partisipan_pembayaran_pelatihan';
    public $timestamps = false;

    public $fillable = [
        'id_partisipan_pembayaran_pelatihan',
        'id',
        'id_pelatihan',
        'konfirmasi',
        'bukti_pembayaran'
    ];
}