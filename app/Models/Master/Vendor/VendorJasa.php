<?php

namespace App\Models\Master\Vendor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorJasa extends Model
{
    use HasFactory;

    protected $table = "vendor_jasa";

    protected $guarded = [''];

    public function jasaLayanan()
    {
        return $this->belongsTo("App\Models\Master\Jasa\JasaLayanan", "jasa_layanan_id", "id");
    }
}
