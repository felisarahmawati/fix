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
        Schema::create('sub_layanans', function (Blueprint $table) {
            $table->id();
            $table->string("nama_vendor", 100);
            $table->foreignId("kategori_id");
            $table->double("harga");
            $table->string("image");
            $table->string('status')->enum("tersedia", "tidak tersedia");
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
        Schema::dropIfExists('sub_layanans');
    }
};
