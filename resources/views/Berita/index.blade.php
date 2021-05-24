@extends('layouts.berita')

@section('content')


<div class="site-section">
            <div class="container" style="margin-left: 60px;">
                <div class="row">
                    <div class="col-lg-6">
                        <p><img src="template/images/10hewan.png" style=" margin-left: 52px;" alt="Image" class="img-fluid"></p>
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <h2 class="heading"><strong class="text-black">10 Hewan Herbivora Yang Berbahaya</strong></h2>
                        <b class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, neque, dolorem. Iusto dolore omnis ex vero consequatur et deserunt officia incidunt at illum corrupti adipisci consectetur, veniam veritatis? Neque, cupiditate.</b>
                        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, neque, dolorem. Iusto dolore omnis ex vero consequatur et deserunt officia incidunt at illum corrupti adipisci consectetur, veniam veritatis? Neque, cupiditate.</p>
                        <p><a href="template/#" class="btn btn-secondary">baca selengkapnya</a></p>
                    </div>

                </div>
            </div>
        </div>
  
        <div class="site-section">
            <div class="container" style=" margin-left: 20px; margin-top: -130px;">
                <div class="col-lg-5 ml-auto">

                    <h2 class="heading"><strong class="text-black" style="margin-left: -565px;">Berita Lainnya</strong></h2>
                </div>
                </div>
            </div>

    </div>
</div>

<div class="container">
    <div class="form-group">
    <div class="row row-cols-1 row-cols-md-2">
    @foreach ($news as $news)

  <div class="col mb-4">
    <div class="card">
      <img src="{{ asset('img2_gallery/'.$news->gambar_berita) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $news->nama_berita}}</h5>
        <p class="card-text">{{ $news->deskripsi_berita}}</p>
      </div>
    </div>
  </div>

@endforeach
</div>
</div>
</div>



@endsection