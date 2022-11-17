<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambah_alamats', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('nama_lengkap');
            $table->bigInteger('no_telp');
            $table->integer('id_provinsi');
            $table->string('kota_kabupaten');
            $table->string('kecamatan');
            $table->longText('detail_alamat');
            $table->longText('catatan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tambah_alamats');
    }
};
