<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provinsi::create([
            "nama_provinsi" => "Daerah Istimewa Yogyakarta"
        ]);

        Provinsi::create([
            "nama_provinsi" => "Jawa Barat"
        ]);

        Provinsi::create([
            "nama_provinsi" => "Jawa Tengah"
        ]);

        Provinsi::create([
            "nama_provinsi" => "Jawa Timur"
        ]);
    }
}
