@extends('back.layouts.master')
@section('content')

<div class="row">
        <div class="col-lg-12">
          <div class="card">
             
          
            <div class="card-body">
                 <form action="{{route('admin.doctors.create.post')}}" method="post" enctype="multipart/form-data">
                   @csrf
                     <img style="width:18rem;" src="https://via.placeholder.com/110x110"  class="img-thumbnail">
                     <br><br>
                   <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label " for="inputGroupFile01">Resim Seç</label>
                  </div>
                </div>
               <br>
                  <input type="text" class="form-control form-control-rounded" name="name" value="">
               <br>
                  <textarea id="summernoteEditor" name="bio" class="form-control" rows="10"></textarea>
                  
 
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