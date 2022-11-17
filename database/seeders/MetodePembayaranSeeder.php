<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MetodePembayaran;

class MetodePembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MetodePembayaran::create([
            "metode_pembayaran" => "Transfer Bank",
            "jenis_pembayaran_lain" => "Qris",
        ]);
    }
}
