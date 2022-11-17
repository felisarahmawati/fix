<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
    }
}
