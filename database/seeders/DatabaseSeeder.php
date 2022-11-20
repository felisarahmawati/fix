<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Master\Layanan\JasaLayananSeeder;
use Database\Seeders\Master\Paket\JenisPaketSeeder;
use Database\Seeders\Master\Paket\PaketSeeder;
use Database\Seeders\Master\Vendor\VendorJasaSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(SubMetodePembayaranSeeder::class);
        $this->call(MetodePembayaranSeeder::class);
        $this->call(SeederRoleSeeder::class);
        // $this->call(KategoriSeeder::class);
        $this->call(LayananSeeder::class);
        $this->call(ProvinsiSeeder::class);
        $this->call(JasaLayananSeeder::class);
        $this->call(VendorJasaSeeder::class);
        $this->call(PaketSeeder::class);
        $this->call(JenisPaketSeeder::class);
    }
}
