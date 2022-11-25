<?php

namespace Database\Seeders\Master\Vendor;

use App\Models\Master\Vendor\VendorJasa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorJasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VendorJasa::create([
            "user_id" => 4,
            "jasa_layanan_id" => 1,
            "status" => 1
        ]);

        VendorJasa::create([
            "user_id" => 4,
            "jasa_layanan_id" => 2,
            "status" => 1
        ]);

        VendorJasa::create([
            "user_id" => 4,
            "jasa_layanan_id" => 3,
            "status" => 1
        ]);

        VendorJasa::create([
            "user_id" => 4,
            "jasa_layanan_id" => 4,
            "status" => 1
        ]);

        VendorJasa::create([
            "user_id" => 6,
            "jasa_layanan_id" => 1,
            "status" => 1
        ]);
    }
}
