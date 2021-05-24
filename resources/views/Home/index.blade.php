@extends('layouts.home')


@section('content')

@foreach($profile as $profile)

<div class="slide-item overlay" style="background-image: url('template/images/hero_1.png')">
            <div class="container">
                <div class="row">
                
                <div class="col-lg-6 align-self-center">
                        <h1 class="heading mb-5">Hewan <br> Tropis di Dunia</h1>
                        <p class="text-white" style="font-size: 14px;"> Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Architecto, neque, dolorem. Iusto dolore <br> omnis ex vero consequatur et deserunt officia incidunt <br> at illum corrupti adipisci consectetur, veniam veritatis?
                            Neque, cupiditate.
                        </p>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container" style="margin-left: 20px;">
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <span class="subheading" style="color: green; margin-left: 10x;">Tentang kami</span>
                        <h2 class="heading"><strong class="text-black">{{ $profile->nama_about}}</strong></h2>
                        <p class="text-black">{{ $profile->deskripsi_about}}</p>
                        <p><a href="/tentang" class="btn btn-secondary">baca selengkapnya</a></p>
                    </div>
                    <div class="col-lg-6">
                        <p><img src="template/images/about.png" style=" margin-left: 40px;" alt="Image" class="img-fluid"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-item overlay" style="background-image: url('template/images/hero_2.png'); height: 500px;">

            <div class="container">
            <h1 class="heading mb-3 r-normal"> Kami Membawa Anda <br> Untuk Mengetahui Lebih Dalam</h1>

                <div class="row text-center">



                    <div class="col-lg-3 mr-auto">
                    <div class="card rounded-0" style="height:280px">                    
                    <div class="card-body">
                    <img style="padding:15px;" src="template/asset/pawprint.svg" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">{{ $profile->isi_title}}</h5>
                    <p class="text-muted  mt-4">{{ $profile->deskripsi_title}}</p>                                        
                    </div>                    
                   </div>
                    </div>

                     <div class="col-lg-3 mr-auto">
                    <div class="card rounded-0" style="height:280px">                    
                    <div class="card-body">
                    <img style="padding:15px;" src="template/asset/pawprint.svg" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">{{ $profile->isi_title}}</h5>
                    <p class="text-muted  mt-4">{{ $profile->deskripsi_title}}</p>                               
                    </div>                    
                   </div>
                    </div>

                      <div class="col-lg-3 mr-auto">
                    <div class="card rounded-0" style="height:280px">                    
                    <div class="card-body">
                    <img style="padding:15px;" src="template/asset/pawprint.svg" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">{{ $profile->isi_title}}</h5>
                    <p class="text-muted  mt-4">{{ $profile->deskripsi_title}}</p>                                   
                    </div>                    
                   </div>
                    </div>

                       <div class="col-lg-3 mr-auto">
                    <div class="card rounded-0" style="height:280px">                    
                    <div class="card-body">
                    <img style="padding:15px;" src="template/asset/pawprint.svg" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">{{ $profile->isi_title}}</h5>
                    <p class="text-muted  mt-4">{{ $profile->deskripsi_title}}</p>                               
                    </div>                    
                   </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


   
        <div class="site-section">
            <div class="container" style=" margin-left: 20px; margin-top: -10px;">
            <div class="col-lg-5 ml-auto">
                    <span class="subheading" style="color: green; margin-left: -610px;">Berita</span>
                    <h2 class="heading"><strong class="text-black" style="margin-left: -610px;">Baca Berita Terbaru Kami</strong></h2>
                    <h2 class="heading"><strong class="text-black" style="margin-left: -610px;"> Dalam Tropisianimal</strong></h2>
                </div>

                <div class="row">
                
                @foreach ($news as $news)

<div class="col-sm-4 mr-auto">
  <div class="card" style="width: 22rem; margin-top: 50px; margin-left: 50px;">
    <img src="{{ asset('img2_gallery/'.$news->gambar_berita) }}"  class="card-img-top" alt="..." style="height:190px"> 
    <div class="card-body">
      <h5 class="card-title text-center"style="font-size: 23px;" >{{ $news->nama_berita}}</h5>
      <p class="card-text" style=" margin-top: 5px;">{{ $news->deskripsi_berita}}</p>
    </div>
  </div>
</div>

@endforeach
             
                   
                </div>
               
                </div>
            </div>

            <div class="site-section bg-light title-wrap-section">
                <div class="container" style="margin-top: -130px;">
                    <div class="col-lg-5 ml-auto">
                        <span class="subheading" style="color: green; margin-left: -600px;">Galeri</span>
                        <h2 class="heading"><strong class="text-black" style="margin-left: -605px;">Lihat Lebih Banyak Hewan Tropis</strong></h2>
                        <h2 class="heading"><strong class="text-black" style="margin-left: -605px;">Pada Galeri Kami</strong></h2>
                    </div>
                </div>
            </div>

  
<div class="site-section">
    <div class="container" style=" margin-left: 65px;">
        <div class="row">

            <div style="width: 100%;" id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style=" margin-top: -170px;">
                    <div class="carousel-item active">
                        <img src="img_gallery/Group 77.png" class="d-block w-100" alt="..." >
                    </div>

                    @foreach ($gallery as $gallery)

                    <div class="carousel-item ">
                        <img src="img_gallery/{{ $gallery->gambar }}" class="d-block w-100" alt="..." style="height: 400px">
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

           
        </div>
    </div>
</div>

@endsection

