<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_video';
    protected $table='t_video';
    protected $fillable = ['id_video', 'judul_video', 'link_video'];
}
