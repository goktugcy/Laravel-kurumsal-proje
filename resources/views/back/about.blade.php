@extends('back.layouts.master')
 @section('title','Hakkımızda Sayfa İçeriği')
@section('content')

    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">Hakkımızda Sayfa İçeriği</div>
          
            <div class="card-body">
                 <form action="{{route('admin.about.edit')}}" method="post" enctype="multipart/form-data">
                   @csrf
                 
                  <input type="text" class="form-control form-control-rounded" name="title" placeholder="{{$hakkimizda->title}}">
               <br>
                  <textarea id="summernoteEditor" name="content" class="form-control" rows="10">{!!$hakkimizda->content!!}</textarea>
                  
 
            </div>
             <button type="submit" class="btn btn-info btn-lg btn-round btn-block waves-effect waves-light m-1">Kaydet</button>
        </form>
           
          </div>

    
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
@endsection
