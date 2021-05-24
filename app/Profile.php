<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile'; 
    protected $fillable = ['nama_company','deskripsi_company','nama_about','deskripsi_about','nama_title','isi_title','deskripsi_title','deskripsi_judul','deskripsi_visi','deskripsi_misi'];
}
