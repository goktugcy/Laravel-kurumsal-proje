@extends('front.layouts.master')
@section('title','İletişim')
@section('content')
     <div class="site-section bg-light">
      <div class="container">
        <div class="row">
    
          <div class="col-md-12 col-lg-12">
          
            <h2 class="site-heading text-black mb-5"> <strong>İletişim</strong></h2>
          
            <form action="{{route('contact.post')}}" method="POST" class="p-5 bg-white">
              @csrf
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Ad Soyad</label>
                  <input type="text" id="fullname" name="name" class="form-control" placeholder="İsim Soyisim" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Email adresi" required>
                </div>
              </div>

              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Mesaj</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Mesajınız " required></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Gönder" class="btn btn-primary">
                </div>
              </div>

  
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection