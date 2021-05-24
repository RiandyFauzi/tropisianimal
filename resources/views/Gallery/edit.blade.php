@extends('layouts.beken')

@section('content')

<div class="row">
	<div class="col-md-8 offset-sm-2">
		<h2 class="display-6">Edit</h2>
	</div>
</div>



<div class="row">
	<div class="col-md-8 offset-sm-2">
	<form action="{{route('gallery_update', $gallery->id)}}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
       
            
        <div class="card-body">
                      
                        <div class="form-group">
                             <img src="{{ asset('img_gallery/'.$gallery->gambar) }}" width="100px" alt="" srcset="">
                        </div>

                        <div class="form-group">
                            <label for="thumb">Update Image</label>
                            <input type="file" name="gambar" id="thumb" class="form-control">
                        </div>

       </div>

                    <div class="card-footer">
                          <button type="submit" class="btn btn-success">Update</button>
                    </div>
                    

          </form>

</div>
</div>

@endsection


