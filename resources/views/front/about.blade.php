@extends('front.layouts.master')
@section('title','Hakkımızda')
@section('content')
   

    <div class="site-section section-about">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h2 class="site-heading text-black mb-5"> <strong>{{$hakkimizda->title}}</strong></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 pr-md-5 text-left mb-5">
            <div>
              
             
              <p class="lead">
                {!!$hakkimizda->content!!}

              <p class="mt-5">
                <a href="{{$settings->facebook}}" class="py-4 pl-0 pr-2"><span class="icon-facebook"></span></a>
                <a href="{{$settings->twitter}}" class="py-4 pl-2 pr-2"><span class="icon-twitter"></span></a>
                <a href="{{$settings->instagram}}" class="py-4 pl-2 pr-2"><span class="icon-instagram"></span></a>
                <a href="{{$settings->linkedin}}" class="py-4 pl-2 pr-2"><span class="icon-linkedin"></span></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
@endsection