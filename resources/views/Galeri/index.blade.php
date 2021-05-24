@extends('layouts.galeri')

@section('content')

<div class="site-section">
    <div class="container" style=" margin-left: 65px;">
        <div class="row">

            <div style="width: 100%;" id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
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

            <div class="row">
                @foreach($galeri as $as)
                <div class="col-md-3" style="margin-top: 60px;">
                    <div class="card">
                        <img src="img_gallery/{{ $as->gambar }}" height="200" class="card-img-top" alt="...">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection