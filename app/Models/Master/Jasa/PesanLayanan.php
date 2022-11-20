<?php

namespace App\Models\Master\Jasa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanLayanan extends Model
{
    use HasFactory;

    protected $table = "pesan_layanan";

    protected $guarded = [''];

    public function getPaket()
    {
        return $this->belongsTo("App\Models\Master\Paket\Paket", "jenis_paket_id", "id");
    }

    public function getKelolaLayanan()
    {
        return $this->belongsTo("App\Models\Master\Vendor\KelolaLayanan", "kelola_layanan_id", "id");
    }

    public function getJenisPaket()
    {
        return $this->belongsTo("App\Models\Master\Paket\JenisPaket", "jenis_paket_id", "id");
    }
}
