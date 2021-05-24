@extends('layouts.beken')

@section('content')

<div class="row">
	<div class="col-md-8 offset-sm-2">
		<h2 class="display-6">Edit</h2>
	</div>
</div>



<div class="row">
	<div class="col-md-8 offset-sm-2">
	<form action="{{route('profile_update', $profile->id)}}" method="POST">
		{{csrf_field()}}
       

        <div class="form-group">
          <label for="exampleInputPassword1">logo_company</label>
          <input name="logo_company" type="text" class="form-control" id="" value="{{$profile->logo_company}}">
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">nama_company</label>
          <input name="nama_company" type="text" class="form-control" id="exampleInputPassword1" value="{{$profile->nama_company}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">deskripsi_company</label>
          <input name="deskripsi_company" type="text" class="form-control" id="exampleInputPassword1" value="{{$profile->deskripsi_company}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">nama_about</label>
          <input name="nama_about" type="text" class="form-control" id="exampleInputPassword1" value="{{$profile->nama_about}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">deskripsi_about</label>
          <input name="deskripsi_about" type="text" class="form-control" id="exampleInputPassword1" value="{{$profile->deskripsi_about}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">nama_title</label>
          <input name="nama_title" type="text" class="form-control" id="exampleInputPassword1" value="{{$profile->nama_title}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">isi_title</label>
          <input name="isi_title" type="text" class="form-control" id="exampleInputPassword1" value="{{$profile->isi_title}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">deskripsi_title</label>
          <input name="deskripsi_title" type="text" class="form-control" id="exampleInputPassword1" value="{{$profile->deskripsi_title}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">deskripsi_judul</label>
          <input name="deskripsi_judul" type="text" class="form-control" id="exampleInputPassword1" value="{{$profile->deskripsi_judul}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">deskripsi_visi</label>
          <input name="deskripsi_visi" type="text" class="form-control" id="exampleInputPassword1" value="{{$profile->deskripsi_visi}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">deskripsi_misi</label>
          <input name="deskripsi_misi" type="text" class="form-control" id="exampleInputPassword1" value="{{$profile->deskripsi_misi}}">
        </div>

</div>
	</div>


	<button type="submit" style="margin-left: 70%;" class="btn btn-primary mb-3">save</button>
</form>

</div>
</div>

@endsection