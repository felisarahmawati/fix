<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangHome extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'judul',
        'deskripsi',
    ];
}
