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

        JenisPaket::create([
            "jasa_layanan_id" => 2,
            "nama_paket" => "Kontrakan",
            "harga" => 20000
        ]);

        JenisPaket::create([
            "jasa_layanan_id" => 2,
            "nama_paket" => "Kost-kotsan",
            "harga" => 20000
        ]);

        JenisPaket::create([
            "jasa_layanan_id" => 2,
            "nama_paket" => "Kantor",
            "harga" => 20000
        ]);

        JenisPaket::create([
            "jasa_layanan_id" => 3,
            "nama_paket" => "Semua barang",
            "harga" => 20000
        ]);

        JenisPaket::create([
            "jasa_layanan_id" => 4,
            "nama_paket" => "Motor",
            "harga" => 20000
        ]);

        JenisPaket::create([
            "jasa_layanan_id" => 4,
            "nama_paket" => "Mobil",
            "harga" => 20000
        ]);

        JenisPaket::create([
            "jasa_layanan_id" => 4,
            "nama_paket" => "Mobil Pick Up",
            "harga" => 20000
        ]);

        JenisPaket::create([
            "jasa_layanan_id" => 4,
            "nama_paket" => "Truk",
            "harga" => 20000
        ]);

    }
}
