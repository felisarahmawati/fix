<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "id_role" => 5,
            "name" => "Administrator",
            "email" => "admin@gmail.com",
            "password" => bcrypt("password"),
            "alamat" => "jl.janti raya blok 12 no 08",
            "kelurahan" => "karang jambe",
            "kecamatan" => "Banguntapan",
            "kota_kab" => "Bantul",
            "id_kodepos" => "55198",
            "tgl_lahir" => "2002-01-01",
            "no_telp" => "085324237299",
            "status" => "1",
        ]);


        User::create([
            "id_role" => 2,
            "name" => "Pengguna",
            "email" => "user@gmail.com",
            "password" => bcrypt("password"),
            "alamat" => "jl.janti raya blok 12 no 08",
            "kelurahan" => "karang jambe",
            "kecamatan" => "Banguntapan",
            "kota_kab" => "Bantul",
            "id_kodepos" => "55198",
            "tgl_lahir" => "2002-01-01",
            "no_telp" => "085324237290",
            "status" => "1",
        ]);

        User::create([
            "id_role" => 3,
            "name" => "Finance",
            "email" => "finance@gmail.com",
            "password" => bcrypt("password"),
            "alamat" => "jl.janti raya blok 12 no 08",
            "kelurahan" => "karang jambe",
            "kecamatan" => "Banguntapan",
            "kota_kab" => "Bantul",
            "id_kodepos" => "55198",
            "tgl_lahir" => "2002-01-01",
            "no_telp" => "085324237298",
            "status" => "1",
        ]);

        User::create([
            "id_role" => 4,
            "name" => "Vendor",
            "email" => "vendor@gmail.com",
            "password" => bcrypt("password"),
            "alamat" => "jl.janti raya blok 12 no 08",
            "kelurahan" => "karang jambe",
            "kecamatan" => "Banguntapan",
            "kota_kab" => "Bantul",
            "id_kodepos" => "55198",
            "tgl_lahir" => "2002-01-01",
            "no_telp" => "085324237297",
            "status" => "1",
        ]);

        User::create([
            "id_role" => 1,
            "name" => "Superadmin",
            "email" => "superadmin@gmail.com",
            "password" => bcrypt("password"),
            "alamat" => "jl.janti raya blok 12 no 08",
            "kelurahan" => "karang jambe",
            "kecamatan" => "Banguntapan",
            "kota_kab" => "Bantul",
            "id_kodepos" => "55198",
            "tgl_lahir" => "2002-01-01",
            "no_telp" => "085324237296",
            "status" => "1",
        ]);

    }
}
