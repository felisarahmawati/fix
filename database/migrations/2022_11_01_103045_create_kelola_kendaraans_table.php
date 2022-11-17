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
        Schema::create('kelola_kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('link_lokasi');
            $table->string('provinsi', 50)->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota_kab')->nullable();
            $table->string('catatan');
            $table->string('pjg');
            $table->string('lbr');
            $table->string('image_kanan');
            $table->string('image_kiri');
            $table->string('image_depan');
            $table->string('image_belakang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelola_kendaraans');
    }
};
