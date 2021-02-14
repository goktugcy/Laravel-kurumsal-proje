 @extends('front.layouts.master')
 @section('content')
  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h2 class="site-heading text-black"> <strong>Hekimlerimiz</strong></h2>
          </div>
        </div>
        
        <div class="row">
          @foreach ($doctors as $doctor)
          <div class="col-lg-4">
            <div class="site-block-testimony p-4 text-center">
              <div class="mb-3">
                <img src="{{$doctor->image}}" alt="Image" class="img-fluid">
              </div>
              <div>
                 <p>{!!$doctor->bio!!}</p>
                 <p><strong class="font-weight-bold">{{$doctor->name}}</strong></p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        
      </div>
    </div>
    
        
         
 @endsection