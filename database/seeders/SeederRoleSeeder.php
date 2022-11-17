<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SeederRole;

class SeederRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SeederRole::create([
            "role" => "SuperAdmin",
        ]);

        SeederRole::create([
            "role" => "Admin"
        ]);

        SeederRole::create([
            "role" => "Finance"
        ]);

        SeederRole::create([
            "role" => "Vendor"
        ]);

        SeederRole::create([
            "role" => "Pengguna"
        ]);
    }
}
