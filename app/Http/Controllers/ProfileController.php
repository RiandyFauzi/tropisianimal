<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;


class ProfileController extends Controller
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
                   $profile =  Profile::all();
                   return view('Profile.index',compact('profile'));
               }
           
               /**
                * Show the form for creating a new resource.
                *
                * @return \Illuminate\Http\Response
                */
               public function create(Request $request)
               {
                   $request->validate([
                     
                      'nama_company' => 'required',
                      'deskripsi_company' => 'required' ,
                      'nama_about' => 'required',
                      'deskripsi_about' => 'required',
                      'nama_title' => 'required',
                      'isi_title' => 'required',
                      'deskripsi_title' => 'required',
                      'deskripsi_judul' => 'required',
                      'deskripsi_visi' => 'required',
                      'deskripsi_misi' => 'required',
                     
                 
                  ]);
           
           
           
                   Profile::create([
                     
                      'nama_company' => $request->nama_company,
                      'deskripsi_company' => $request->deskripsi_company,
                      'nama_about' => $request->nama_about,
                      'deskripsi_about' => $request->deskripsi_about,
                      'nama_title' => $request->nama_title,
                      'isi_title' => $request->isi_title,
                      'deskripsi_title' => $request->deskripsi_title,
                      'deskripsi_judul' => $request->deskripsi_judul,
                      'deskripsi_visi' => $request->deskripsi_visi,
                      'deskripsi_misi' => $request->deskripsi_misi,
                  ]);
                   return redirect('profile');
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
                 $profile =  Profile::find($id);
                 return view('Profile.edit',compact('profile'));
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
                   $profile = Profile::find($id);
                  $profile->update([
           
                  
                      'nama_company' => $request->nama_company,
                      'deskripsi_company' => $request->deskripsi_company,
                      'nama_about' => $request->nama_about,
                      'deskripsi_about' => $request->deskripsi_about,
                      'nama_title' => $request->nama_title,
                      'isi_title' => $request->isi_title,
                      'deskripsi_title' => $request->deskripsi_title,
                      'deskripsi_judul' => $request->deskripsi_judul,
                      'deskripsi_visi' => $request->deskripsi_visi,
                      'deskripsi_misi' => $request->deskripsi_misi

                  ]);
                  return redirect('/profile');
           
            }
               /**
                * Remove the specified resource from storage.
                *
                * @param  int  $id
                * @return \Illuminate\Http\Response
                */
               public function destroy($id)
               {
                 $profile = \App\Profile::find($id);
                 $profile->delete($profile);
                 return redirect('profile')->with('sukses','Profile Dihapus!'); 
             }
           }
           