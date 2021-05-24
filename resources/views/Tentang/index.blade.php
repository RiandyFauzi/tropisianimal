@extends('layouts.tentang')

@section('content')

@foreach ($profile as $profile)
<div class="site-section">
            <div class="container" style=" margin-left: 20px;">
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                    
                        <h2 class="heading" style="margin-top: 30px;"><strong class="text-black">Tropisianimal</strong></h2>
                        <b class="text-black" style="margin-top: 10px;">{{ $profile->deskripsi_judul}}</b>
                        <p class="text-black" style="margin-top: 10px;">{{ $profile->deskripsi_judul}}</p>

                    </div>
                    <div class="col-lg-6">
                        <p><img src="template/images/about_2.PNG" style=" margin-left: 40px;" alt="Image" class="img-fluid"></p>
                    </div>
                    <div>
                        <div class="" style="margin-left: 108px;">
                            <h2 class="heading"><strong class="text-black">Visi</strong></h2>
                            <p class="text-black" style="margin-top: 10px;">{{ $profile->deskripsi_visi}}</p>

                            <h2 class="heading"><strong class="text-black">Misi</strong></h2>
                            <p class="text-black" style="margin-top: 10px;">{{ $profile->deskripsi_misi}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endforeach
@endsection