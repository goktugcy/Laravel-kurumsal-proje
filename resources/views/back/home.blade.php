  @extends('back.layouts.master')
  @section('content')

  
      <div class="row">
        <div class="col-lg-12">
		  <div style="height:600px"> <!--Please remove the height before using this page-->
		      <h1>Ana sayfa</h1>


     <div class="row">
        <div class="col-12 col-lg-4 col-xl-4">
           <div class="card bubble">
              <div class="card-body card-block">
                <div class="media align-items-center">
                  <div class="media-body">
                    <p class="mb-0 text-white">Kayıtlı hekim sayısı</p>
                    <h4 class="mb-0 text-white">{{$doctors->count()}}</h4>
                    <p class="extra-small-font mt-3 mb-0 text-white">Hekimler profili ve ekleme çıkarma işlemlerini <br> yan menüden yapabilirsiniz.</p>
                  </div>
                  <div class="position-relative"><i class="fa fa-stethoscope fa-5x text-white"></i></div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xl-4">
           <div class="card bubble">
              <div class="card-body card-block">
                <div class="media align-items-center">
                  <div class="media-body">
                    <p class="mb-0 text-white">İletişim Mesajları</p>
                    <h4 class="mb-0 text-white">{{$contacts->count()}}</h4>
                    <p class="extra-small-font mt-3 mb-0 text-white">Gelen kutusuna gitmek mesajları okumak silmek ve yanıtlamak için<br> mesajlar sekmesini kullanın.</p>
                  </div>
                  <div class="position-relative"><i class="zmdi zmdi-email fa-5x text-white"></i></div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xl-4">
           <div class="card bubble">
              <div class="card-body card-block">
                <div class="media align-items-center">
                  <div class="media-body">
                    <p class="mb-0 text-white">Site Durumu</p>
                    <h4 class="mb-0 text-white"> @if ($settings->active==1) Aktif @else Kapalı  @endif </h4>
                    <p class="extra-small-font mt-3 mb-0 text-white">Site aktiflik durumunu <br> ayarlar sekmesinden değiştirebilirsiniz.</p>
                  </div>
                  <div class="position-relative"><i class="ti-server fa-5x text-white"></i></div>
                </div>
              </div>
            </div>
        </div>
    </div>
 <center>
<a href="{{route('homepage')}}" target="_blank" class="btn btn-primary btn-lg btn-round btn-block waves-effect waves-light m-1">Siteye Git</a>
</center>
		  </div>
     
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->

   </div><!--End content-wrapper-->
 
            @endsection