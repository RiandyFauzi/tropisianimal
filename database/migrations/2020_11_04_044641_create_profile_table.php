<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_company',30);
            $table->string('deskripsi_company',256);
            $table->string('nama_about',30);
            $table->string('deskripsi_about',256);
            $table->string('nama_title',30);
            $table->string('isi_title',30);
            $table->string('deskripsi_title',256);
            $table->string('deskripsi_judul',256);
            $table->string('deskripsi_visi',256);
            $table->string('deskripsi_misi',256);
        
               
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
        Schema::dropIfExists('profile');
    }
}
