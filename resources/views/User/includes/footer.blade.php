<footer class="site-footer">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-10"> -->
                <div class="footer-widget">
                    <!-- <h4 class="footer-widget-title">Quick Links</h4> -->
                    
                <!-- footer-widget -->
                <!-- </div> -->
                <!-- col-md-10 -->
                <!-- <div class="footer-widget col-md-2"> -->
                <div class="footer-media-icons">
                    <ul>
                        <!-- <li><a href="http://www.twitter.com"><img src="https://www.bloodbankindia.net/bbi_theme/images/tw-footer.png" alt="footer-tw" /></a></li> -->
                        <li>
                            <a href="{{ asset('website/bbi_theme/images/fb-footer.png') }}" alt="facebook page link for blood bank india" /></a>
                            <p><i class="fab fa-facebook-f"></i></p>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </footer>
    <!-- /.site-footer -->
    <footer class="site-footer-mobile">
        <div class="container">
            <div class="row">
                <div class="footer-media-icons">
                    <ul>
                        <!-- <li><a href="http://www.twitter.com"><img src="https://www.bloodbankindia.net/bbi_theme/images/tw-footer.png" alt="footer-tw" /></a></li> -->
                        <li>
                            <a href="https://www.facebook.com/BloodBankIndia/"><img src="bbi_theme/images/fb-footer.png" alt="footer-fb" /></a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-md-10"> -->
                <div class="footer-widget">
                    <!-- <h4 class="footer-widget-title">Quick Links</h4> -->
                    <ul class="list-links">
                        <li><a href="home.html">Search Donors</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="donors/register.html">Donor Registration</a></li>
                        </li>
                        <!-- <li><a href="https://www.bloodbankindia.net/donors/search">Search Donors</a></li> -->
                        <li><a href="tools/requestblood.html">Request Blood</a></li>
                        <li><a href="information/blooddonationtips.html">Blood Tips</a></li>
                        <li><a href="information/privacypolicy.html">Privacy Policy</a></li>
                        <p class="small-text"> <a href="index.html"><strong>BloodBankIndia.net</a></strong>
                        </p>
                        <p class="small-text">A People Project from <a href="http://www.usistech.com/" target="_blank"><strong>uSiS Technologies.</a></strong>
                        </p>
                        <p class="small-text">All rights reserved &copy; 2017</strong>
                        </p>
                    </ul>
                </div>
                <!-- footer-widget -->
                <!-- </div> -->
                <!-- col-md-10 --> </div>
            <!-- row -->
        </div>
        <!-- container -->
    </footer>
    <!-- /.site-footer -->
    <script src="{{ asset('website/bbi_theme/js/plugins.js') }}">
    </script>
    <script src="{{ asset('website/bbi_theme/js/custom.js') }}">
    </script>
    <script src="{{ asset('website/bbi_theme/toatr.js') }}">
    </script>

    <script type="text/javascript">
        toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
         @if(session('signup'))
        toastr.success('','Successfully Registered!!');
        @endif

         @if(session('notlogin'))
        toastr.warning('notlogin','You are not loggedin Yet!!');
        @endif
       
       
        @if(session('contact'))
        toastr.info('contact','Thanks for Contacting US!!');
        @endif
        @if(session('invalidlogin'))
        toastr.warning('invalidlogin','Wrong Email or Password!!!');
        @endif

         @if(session('loggedin'))
        toastr.success('loggedin','Loggedin Successfully');
        @endif
        
    </script>
    <div id="fb-root">
    </div>
    