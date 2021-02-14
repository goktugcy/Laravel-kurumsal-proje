   <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-2">
          <div class="row align-items-center">
            <div class="col-6">
              <a href="{{$settings->twitter}}" class="p-2 pl-0"><span class="icon-twitter"></span></a>
              <a href="{{$settings->facebook}}" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="{{$settings->linkedin}}" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
              <a href="{{$settings->instagram}}" class="p-2 pl-0"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="#" class="d-flex align-items-center ml-auto mr-4">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">{{$settings->phone}}</span>
                </a>
                <a href="#" class="d-flex align-items-center">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">{{$settings->email}}</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-2">
              <h2 class="mb-0 site-logo"><a href="{{route('homepage')}}"><img src="{{$settings->logo}}" height="100px" width="100px"/></a></h2>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li><a href="{{route('homepage')}}">Anasayfa</a></li>
                    
                    <li><a href="{{route('about')}}">Hakkımızda</a></li>
                    <li><a href="{{route('contact')}}">İletişim</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>