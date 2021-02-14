<!DOCTYPE html>
<html lang="tr">
  <head>
    <title>@yield('title','Anasayfa')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{$settings->description}}">
    <meta name="author" content="{{$settings->author}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{$settings->favicon}}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="{{asset('front/')}}/assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/bootstrap-datepicker.css">
    
    
    <link rel="stylesheet" href="{{asset('front/')}}/assets/fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/aos.css">

    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/style.css">
    @toastr_css
  </head>
  <body>
        <!-- Preloader -->
        <div class="preloader"></div>
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
  