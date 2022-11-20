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
        Schema::create('kelola_layanan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("jasa_layanan_id");
            $table->bigInteger("user_id");
            $table->text("alamat");
            $table->string("provinsi", 100);
            $table->string("kota_kab", 100);
            $table->string("kecamatan", 100);
            $table->text("catatan");
            $table->integer("panjang")->nullable();
            $table->integer("lebar")->nullable();
            $table->string("url_link", 100);
            $table->string("status", 20)->nullable();
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
        Schema::dropIfExists('kelola_layanan');
    }
};
