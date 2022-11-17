<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\Kategori;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void     
     */
    public function run()
    {
        Kategori::create([
            "kategori" => "Kendaraan",
            "slug" => "kendaraan",
        ]);
    }
}
