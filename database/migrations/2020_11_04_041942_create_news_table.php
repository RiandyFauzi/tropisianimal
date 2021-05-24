<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('nama_about',30);
            $table->string('deskripsi_about',30);
            $table->string('deskripsi_title',256);
            $table->string('judul_berita',256);
            $table->string('gambar_berita',256);
            $table->string('nama_berita',256);
            $table->string('deskripsi_berita',256);
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
        Schema::dropIfExists('news');
    }
}
