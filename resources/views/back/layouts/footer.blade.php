    <!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
	
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2020 Göktuğ Ceyhan
        </div>
      </div>
    </footer>
	<!--End footer-->
	

   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('back/')}}/assets/js/jquery.min.js"></script>
  <script src="{{asset('back/')}}/assets/js/popper.min.js"></script>
  <script src="{{asset('back/')}}/assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="{{asset('back/')}}/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('back/')}}/assets/js/sidebar-menu.js"></script>

  <!-- Custom scripts -->
  <script src="{{asset('back/')}}/assets/js/app-script.js"></script>
 




  
    
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>

<script src="{{asset('back/')}}/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
  <script>
   $('#summernoteEditor').summernote({
            height: 400,
            tabsize: 2
        });
  </script>
  
</body>

@toastr_js
@toastr_render

@yield('js')
</html>