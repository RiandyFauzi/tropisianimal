<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{ 
    protected $fillable = [
       'gambar_berita','nama_berita','deskripsi_berita'
    ];
}
