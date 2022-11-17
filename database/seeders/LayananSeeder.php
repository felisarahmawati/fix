<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::create([
            "image" => "https://unsplash.com/t/history",
            "judul" => "Kendaraan",
            "slug" => "kendaraan",
            "deskripsi" => "yaudalah apa aja"
        ]);
    }
}
