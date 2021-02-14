<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>@yield('title','Yönetici Sayfası')</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('back/')}}/assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{asset('back/')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{asset('back/')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('back/')}}/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('back/')}}/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('back/')}}/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('back/')}}/assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('back/')}}/assets/css/app-style.css" rel="stylesheet"/>

  <!--SummerNote-->
   <link rel="stylesheet" href="{{asset('back/')}}/assets/plugins/summernote/dist/summernote-bs4.css"/>
  @toastr_css

  @yield('css')
</head>

<body class="bg-theme bg-theme1">

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">