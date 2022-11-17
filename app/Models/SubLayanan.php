<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubLayanan extends Model
{
    use HasFactory;

    protected $guarded = [' '];

    public function kategori()
    {
        return $this->belongsTo("App\Models\Master\Kategori","kategori_id");
    }
}
