@extends('back.layouts.master')
@section('title','Hekimler')
@section('content')
<a href="{{route('admin.doctors.create')}}" class="btn btn-light waves-effect waves-light m-1"> <i class="fa fa-plus"></i> <span>Hekim Ekle</span> </a>
<div class="row">
     @foreach ($doctors as $doctor)
        <div class="col-12 col-lg-4 col-xl-4">
          <div class="card">
             <div class="card-body text-center">
                
               <h5 class="text-uppercase text-white">{{$doctor->name}}</h5>
              <div class="col-md-12 ">
                  <a href="{{$doctor->image}}" data-fancybox="images" data-caption="This image has a caption">
                  <img src="{{$doctor->image}}" alt="lightbox" class="lightbox-thumb img-thumbnail">
                </a>
                </div>
                <p class="my-5 text-white">{!!$doctor->bio!!}</p>
                <a href="{{route('admin.doctors.edit', $doctor->id)}}" class="btn btn-light btn-round waves-effect waves-light m-1">Düzenle</a>
                <a href="{{route('admin.doctors.destroy', $doctor->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1">Sil</a>
             </div>
           </div>
        </div>
         @endforeach
    </div>
     
@endsection