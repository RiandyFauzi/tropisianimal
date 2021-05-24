<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{

    /**
         * Create a new controller instance.
         *
         * @return void
         */
    
            public function __construct()
            {
               $this->middleware('auth');
           }
           
           
               /**
                * Display a listing of the resource.
                *
                * @return \Illuminate\Http\Response
                */
               public function index()
               {
                   $news =  News::all();
                   return view('News.index',compact('news'));
               }
           
               /**
                * Show the form for creating a new resource.
                *
                * @return \Illuminate\Http\Response
                */
               public function create(Request $request)
               {
                   $request->validate([
                     
   
                      'gambar_berita' => 'required',
                      'nama_berita' => 'required',
                      'deskripsi_berita' => 'required',
                     
                     
                 
                  ]);
           
           
                  $file = $request->gambar_berita;
                  $namafile = $file->getClientOriginalName();
                  $file->move(public_path()."/img2_gallery", $namafile);
                   News::create([
                    
                     
                    
                      'gambar_berita' =>  $namafile,
                      'nama_berita' => $request->nama_berita,
                      'deskripsi_berita' => $request->deskripsi_berita,
                      
                  ]);
                   return redirect('news');
               }
           
               /**
                * Store a newly created resource in storage.
                *
                * @param  \Illuminate\Http\Request  $request
                * @return \Illuminate\Http\Response
                */
               public function store(Request $request)
               {
           
               }
           
               /**
                * Display the specified resource.
                *
                * @param  int  $id
                * @return \Illuminate\Http\Response
                */
               public function show($id)
               {
                   //
               }
           
               /**
                * Show the form for editing the specified resource.
                *
                * @param  int  $id
                * @return \Illuminate\Http\Response
                */
               public function edit($id)
               {
                 $news =  News::find($id);
                 return view('News.edit',compact('news'));
             }
           
               /**
                * Update the specified resource in storage.
                *
                * @param  \Illuminate\Http\Request  $request
                * @param  int  $id
                * @return \Illuminate\Http\Response
                */
               public function update($id)
               {
                   
                $news = News::where('id',$id)->first();
                $news->nama_berita = request('nama_berita');
                $news->deskripsi_berita = request('deskripsi_berita');
                if(request()->file('gambar_berita') == "")
                {
                    $news->gambar_berita = $news->gambar_berita;
                } else {
                    if(request()->hasFile('gambar_berita'))
                    {
                        $file = 'img2_gallery'.$news->gambar_berita;
                        if(is_file($file))
                        {
                            unlink($file);
                        }
                        $file = request()->file('gambar_berita');
                        $filename = time().rand(100,999).".".$file->getClientOriginalName();
                        request()->file('gambar_berita')->move('img2_gallery', $filename);
                        $news->gambar_berita = $filename;
                    }
                }

                $news->save();
                session()->flash('success', 'Data Berhasil Diupdate');
                
                        
                      
           
                  return redirect('/news');
           
            }
               /**
                * Remove the specified resource from storage.
                *
                * @param  int  $id
                * @return \Illuminate\Http\Response
                */
               public function destroy($id)
               {
                 $news = \App\News::find($id);
                 $news->delete($news);
                 return redirect('news')->with('sukses','News Dihapus!'); 
             }
           }
           

