@extends('layouts.beken')

@section('content')
<!-- Button trigger modal -->
<div class="right">
<button type="button" class="btn btn-success mb-2" style="margin-left: 85%;" class="btn btn-success mb-2" data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>
</div>
@if ($errors->any())
<ul>
   @foreach ($errors->all() as $error)
   <li>{{$error}}</li>
   @endforeach
</ul>

@endif
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="{{route('gallery_create')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         <div class="form-group">
          <label for="exampleInputPassword1">gambar</label>
          <input name="gambar" type="file" class="form-control" id="exampleInputPassword1">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Gambar</th>
    
    </tr>
  </thead>
  <tbody>
  	@foreach ($gallery as $gallery)
    <tr>
      <td>{{$gallery->id}}</td>
      <td><img src="{{ asset('img_gallery/'.$gallery->gambar) }}" width="100px" alt="" srcset=""></td>
     
    
    
       <td>
        <a class="btn btn-primary" href="{{ url('gallery_edit', $gallery->id)}}" >Edit</a>
 
     
     <a class="btn btn-primary" href="{{ url('gallery_delete', $gallery->id)}}"  onclick="return confirm('yakin akan di hapus?')">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection