<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\{Profile,News,Gallery};


class UserController extends Controller
{

    public function berita()
    {
       
        return view('Berita.index',[

        
        'news' => News::latest()->take(6)->get(),
        
        ]);
    }

    public function home()
    {
      
        return view('Home.index',[
          'profile' => Profile::all(),
          'news' => News::latest()->take(6)->get(),
          'gallery' => Gallery::latest()->get()

        ]);
    }

    public function tentang()
    {
      
        return view('Tentang.index',[
          'profile' => Profile::all()
         

        ]);
    }

    public function galeri()
    {
      
        return view('Galeri.index',[
          'gallery' => Gallery::latest()->get(),
          'galeri' => Gallery::latest()->get()
         

        ]);
    }

}
