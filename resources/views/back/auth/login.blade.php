<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Yönetim Paneli</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('back/')}}/assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{asset('back/')}}/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('back/')}}/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('back/')}}/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{asset('back/')}}/assets/css/app-style.css" rel="stylesheet"/>
  @toastr_css
</head>

<body class="bg-theme bg-theme2">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{$settings->logo}}" alt="logo icon" height="110px" width="110px">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Giriş Yap</div>
		     <form method="POST" action="{{route('admin.login.post')}}" class="user">
                 @csrf
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Eposta</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="exampleInputUsername" name="email" class="form-control input-shadow" placeholder="jengal@example.com">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Şifre</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="exampleInputPassword" name="password" class="form-control input-shadow" placeholder="j3ng4L">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   
			 </div>
			 
			 <button type="submit" class="btn btn-light btn-block">Giriş Yap</button>
		
			 
			 </form>
		   </div>
		  </div>
		
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	

	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('back/')}}/assets/js/jquery.min.js"></script>
  <script src="{{asset('back/')}}/assets/js/popper.min.js"></script>
  <script src="{{asset('back/')}}/assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="{{asset('back/')}}/assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="{{asset('back/')}}/assets/js/app-script.js"></script>
  
</body>
@toastr_js
@toastr_render
</html>
