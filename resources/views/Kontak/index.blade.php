@extends('layouts.kontak')

@section('content')


<div class="form-row">
                   </div>


                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.299871804658!2d106.8108515142438!3d-6.6096119952202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5e0d8cfb4c7%3A0x9207fc3f0a71eea6!2sWarung%20Nako%20dan%20Kopi%20Nako%20Bogor!5e0!3m2!1sen!2sid!4v1604743384613!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


        <div class="container mt-5">
        
        <div class="card border-0 mt-4">   
                    <div class="card-header border-0 rounded-0 bg-transparent mt-5 ">    
                        <h1 class="font-weight-bold">Kontak kami</h1>
                    </div>
                </div> 

            <div class="form-row">
                 
                <div class="form-group col-md-8">
                    <textarea name="" class="form-control rounded-0 bg-light" placeholder="Deskripsi" id="" cols="10" rows="9"></textarea>
                </div>

                <div class="form-group col-md-4">
                    <input type="text" style="font-size:15px;" name="" id="" placeholder="Subject" class="bg-light text-muted form-control form-control-lg rounded-0 mb-2 pt-4 pb-4">
                    <input type="text" style="font-size:15px;" name="" id="" placeholder="Nama" class="bg-light text-muted form-control form-control-lg rounded-0 mb-2 pt-4 pb-4">
                    <input type="text" style="font-size:15px;" name="" id="" placeholder="Email" class="bg-light text-muted form-control form-control-lg rounded-0 mb-2 pt-4 pb-4">
                    <a href="" class="btn btn-success btn-block rounded-0 text-center pt-3 pb-3">Kirim
                        <img src="{!! asset('css/svg/send.svg') !!}" alt="">
                    </a>
                </div>            
            </div>
        </div>                
    </form>    
        <div class="container">            
            <div class="card-deck text-center text-body">
            <div class="card rounded-0 border-0">
                    <div class="card-body">
                    <img style="padding:10px; width: 50px;" src="template/asset/mail.svg" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">Email</h5>
                    <p class="text-muted  mt-4">tropisianimal.com</p>                                        
                    </div>                    
                </div>
                
                <div class="card rounded-0 border-0" >
                    <div class="card-body">
                    <img style="padding:10px; width: 50px;" src="template/asset/phone.svg" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">Phone</h5>
                    <p class="text-muted  mt-4">+6281282833166</p>                                        
                    </div>                    
                </div>
                <div class="card rounded-0 border-0">
                    <div class="card-body">
                    <img style="padding:10px; width: 50px;"" src="template/asset/send.svg" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">Location</h5>
                    <p class="text-muted mt-4">Kota Bandung,Jawa Barat,Indonesia</p>                                        
                    </div>                    
                </div>
                
            </div>
        </div>






@endsection