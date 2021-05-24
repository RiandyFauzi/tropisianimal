<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
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
        $gallery =  Gallery::all();
        return view('Gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $file = $request->gambar;
        $namafile = $file->getClientOriginalName();
        $file->move(public_path() . "/img_gallery", $namafile);
        Gallery::create([
            'gambar' => $namafile,
        ]);
        return redirect('/gallery');
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
        $gallery =  Gallery::find($id);
        return view('Gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = gallery::where('id', $id)->first();
        if (request()->file('gambar') == "") {
            $gallery->gambar = $gallery->gambar;
        } else {
            if (request()->hasFile('gambar')) {
                $file = 'img_gallery' . $gallery->gambar;
                if (is_file($file)) {
                    unlink($file);
                }
                $file = request()->file('gambar');
                $filename = time() . rand(100, 999) . "." . $file->getClientOriginalName();
                request()->file('gambar')->move('img_gallery', $filename);
                $gallery->gambar = $filename;
            }
        }
        $gallery->save();
        session()->flash('success', 'Data Berhasil Diupdate');

        return redirect('/gallery');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = \App\Gallery::find($id);
        $gallery->delete($gallery);
        return redirect('gallery')->with('sukses', 'Gallery Dihapus!');
    }
}
