<?php

namespace Database\Seeders\Master\Paket;

use App\Models\Master\Paket\JenisPaket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisPaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisPaket::create([
            "jasa_layanan_id" => 1,
            "paket_id" => 1,
            "nama_paket" => "Motor",
            "harga" => 20000
        ]);

        JenisPaket::create([
            "jasa_layanan_id" => 1,
            "paket_id" => 1,
            "nama_paket" => "Skuter",
            "harga" => 20000
        ]);

        JenisPaket::create([
            "jasa_layanan_id" => 1,
            "paket_id" => 2,
            "nama_paket" => "Mobil",
            "harga" => 20000
        ]);

        JenisPaket::create([
            "jasa_layanan_id" => 2,
            "nama_paket" => "Rumah",
            "harga" => 20000
        ]);
    }
}
