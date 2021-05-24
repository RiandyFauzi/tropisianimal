@extends('layouts.beken')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama_company</th>
      <th scope="col">deskripsi_company</th>
      <th scope="col">deskripsi_company</th>









    </tr>
  </thead>
  <tbody>
    @foreach ($profile as $profile)
    <tr>
      <td>{{$profile->id}}</td>
      <td>{{$profile->nama_company}}</td>
      <td>{!! Str::limit($profile->deskripsi_company, 50) !!}</td>





      <td>
        <a class="btn btn-primary" href="{{ url('profile_edit', $profile->id)}}">Edit</a>


        <a class="btn btn-primary" href="{{ url('profile_edit', $profile->id)}}" onclick="return confirm('yakin akan di hapus?')">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection