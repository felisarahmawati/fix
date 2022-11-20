<?php

namespace App\Models\Master\Jasa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanLayanan extends Model
{
    use HasFactory;

    protected $table = "pesan_layanan";

    protected $guarded = [''];
}
