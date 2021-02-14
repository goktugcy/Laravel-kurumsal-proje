 <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigasyon</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="{{route('homepage')}}">Ana Sayfa</a></li>
                  <li><a href="{{route('about')}}">Hakkımızda</a></li>
                  <li><a href="{{route('contact')}}">İletişim</a></li>
                </ul>
              </div>
              
            </div>

            
          </div>
          <div class="col-lg-4">
           

        
          </div>
          

          <div class="col-lg-4 mb-5 mb-lg-0">

          

            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Bizi sosyal medyada takip edin</h3>

                <div>
                  <a href="{{$settings->facebook}}" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="{{$settings->twitter}}" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="{{$settings->instagram}}" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="{{$settings->linkedin}}" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>


          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
  <script src="{{asset('front/')}}/assets/js/jquery-3.3.1.min.js"></script>
  <script src="{{asset('front/')}}/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('front/')}}/assets/js/jquery-ui.js"></script>
  <script src="{{asset('front/')}}/assets/js/popper.min.js"></script>
  <script src="{{asset('front/')}}/assets/js/bootstrap.min.js"></script>
  <script src="{{asset('front/')}}/assets/js/owl.carousel.min.js"></script>
  <script src="{{asset('front/')}}/assets/js/jquery.stellar.min.js"></script>
  <script src="{{asset('front/')}}/assets/js/jquery.countdown.min.js"></script>
  <script src="{{asset('front/')}}/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('front/')}}/assets/js/bootstrap-datepicker.min.js"></script>
  <script src="{{asset('front/')}}/assets/js/aos.js"></script>

  <script src="{{asset('front/')}}/assets/js/main.js"></script>
    
  </body>
  @toastr_js
@toastr_render
</html>