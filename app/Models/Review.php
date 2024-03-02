<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_review';
    protected $table='t_review';
    protected $fillable = ['id_review', 'id_user', 'id_pelatihan', 'ulasan', 'rating', 'screenshot'];
}
