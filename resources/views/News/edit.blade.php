@extends('layouts.beken')

@section('content')

<div class="row">
  <div class="col-md-8 offset-sm-2">
    <h2 class="display-6">Edit</h2>
  </div>
</div>



<div class="row">
  <div class="col-md-8 offset-sm-2">
    <form action="{{route('news_update', $news->id)}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}

      <div class="card-body">
        <div class="form-group">
          <img src="{{ asset('img2_gallery/'.$news->gambar_berita) }}" width="100px" alt="" srcset="">
        </div>

        <div class="form-group">
          <label for="thumb">Update Image</label>
          <input type="file" name="gambar_berita" id="thumb" class="form-control">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">nama_berita</label>
          <input name="nama_berita" type="text" class="form-control" id="exampleInputPassword1" value="{{$news->nama_berita}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">deskripsi_berita</label>
          <input name="deskripsi_berita" type="text" class="form-control" id="exampleInputPassword1" value="{{$news->deskripsi_berita}}">
        </div>




      </div>
  </div>


  <button type="submit" class="btn btn-success">Update</button>

  </form>

</div>
</div>


@endsection