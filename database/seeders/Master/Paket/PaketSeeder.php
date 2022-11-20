<?php

namespace Database\Seeders\Master\Paket;

use App\Models\Master\Paket\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paket::create([
            "paket" => "Kendaraaan Roda 2"
        ]);

        Paket::create([
            "paket" => "Kendaraan Roda 4"
        ]);
    }
}
