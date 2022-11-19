<?php

namespace Database\Seeders\Master\Layanan;

use App\Models\Master\Jasa\JasaLayanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JasaLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JasaLayanan::create([
            "jasa" => "Kendaraan",
        ]);

        JasaLayanan::create([
            "jasa" => "Bangunan"
        ]);

        JasaLayanan::create([
            "jasa" => "Barang"
        ]);

        JasaLayanan::create([
            "jasa" => "Pickup"
        ]);
    }
}
