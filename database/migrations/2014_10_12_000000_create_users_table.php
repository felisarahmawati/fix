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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('id_role')->nullable();
            $table->integer('id_kodepos')->nullable();
            $table->string('name', 100);
            $table->string('email');
            $table->string('password');
            $table->text('alamat')->nullable();
            $table->string("no_telp", 30);
            $table->date("tgl_lahir")->nullable();
            $table->string("nama_lengkap")->nullable();
            $table->string("nama_vendor")->nullable();
            $table->string("tmpt_lahir")->nullable();
            $table->bigInteger("no_ktp")->nullable();
            $table->string("image_ktp")->nullable();
            $table->string("image_kk")->nullable();
            $table->string("image_skck")->nullable();
            $table->string("lokasi")->nullable();
            $table->string('provinsi', 50)->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota_kab')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('users');
    }
};
