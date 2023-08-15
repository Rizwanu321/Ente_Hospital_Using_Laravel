<span class="errspns"></span>
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="mobilemenu">
                    <a href="#" class="menu-toggle-btn">
                        <span id="toggle" class="">
                             </span>
                    </a>
                </div>
                <div class="header-left">
                    <div class="logo">
                        <a href="{{ URL::to('/') }}"><img src="data:image/png;base64,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" alt="Universe" /></a>
                    </div>
                </div>
                
                <!-- /.header-right -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <div class="nav-bar-main" role="navigation">
            <div class="container">
                <div class="row">
                    <nav style="width: 950px;" class="main-navigation clearfix visible-md visible-lg" id="bs-example-navbar-collapse-1" role="navigation">
                        <ul class="main-menu sf-menu">
                            <li class=""><a href="{{ URL::to('Requestor/home') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Search Blood</a></li>
                             <li class=""><a href="{{ URL::to('Requestor/request') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Request Blood</a> </li>
                             <li class=""><a href="{{ URL::to('Requestor/yourrequest') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Your Request</a> </li>
                            
                            
                            
                           
                           
                            <li class=""><a href="{{ URL::to('Requestor/contact') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Contact</a></li>
                             <li class=""><a href="{{ URL::to('Requestor/bloodcenter') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px">Blood Centers</a></li>
                            <li class=""><a href="{{ URL::to('logout2') }}" class="hvr-bounce-to-bottom-2 m1-2" style="font-size: 13px;">Logout</a></li>



                        </ul>
                        <!-- /.main-menu -->
                    </nav>
                    <!-- /.main-navigation -->
                </div>
                <!-- container -->
            </div>
            <!-- row -->
        </div>
        <!-- /.nav-bar-main -->
    </header>
    <!-- /.site-header -->
    <!-- mobile views changing button code -->
    <div class="mobile-login">
        <a href="#" data-toggle="modal" data-target="#myModal" class="mob-btn"> <i class="fa fa-user fa-1x" aria-hidden="true"></i> Login</a>
        <a href="donors/register.html" class="mob-btn-2"> <i class="fa fa-lock fa-1x" aria-hidden="true"></i> REGISTER NOW</a>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Login</h4> </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="https://www.bloodbankindia.net/donors/login_action" id="login_user_mobile">
                            <!-- </ul> -->
                            <ul class="nav nav-pills">
                                <li>
                                    <label>Email </label>
                                    <input type="text" id="emailid" name="emailid" rel="tooltip" value="" title="Email can contain only letters, numbers, periods (.), @, hyphens (-) and underscores (_)." /> </li>
                                <li>
                                    <label>Password</label>
                                    <input type="password" id="password" name="password" rel="tooltip" value="" title=" Please enter your password. Minimum 8 characters,case sensitive." /> </li>
                                <li>
                                    <button type="submit" class="btn btn-danger login-form-head">Login</button> <a href="donors/forgotpassword.html" class="forgot">Forgot password?</a>
                                    <!-- <div class="mobile-fb-btn"> <a href="#" class="reg-btn-2"><i class="fa fa-facebook" aria-hidden="true"></i>Login using Facebook</a> </div> -->
                                </li>
                            </ul>
                        </form>
                    </div>
                    <!-- <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div> --></div>
            </div>
        </div>
        <div class="header-login-right"> <a href="#" class="reg-btn hvr-bounce-to-bottom m1">REGISTER NOW</a>
            <!-- <p>Facebook Account</p> -->
        </div>
        <div class="clearfix"></div>
    </div>
    
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="container">
            <ul class="mobile-menu">
                <li class=""><a href="home.html">Search Donors</a></li>
                <li class=""><a href="aboutus.html">About Us</a> </li>
                <!-- <li class=""><a href="https://www.bloodbankindia.net/donors/register">Donor Registration</a> </li> -->
                <!-- <li class=""><a href="https://www.bloodbankindia.net/donors/search">Search Donors</a> </li> -->
                <li class=""><a href="donors/register.html">Register As Donor</a>
                    <li class=""><a href="tools/requestblood.html">Request Blood</a> </li>
                    <li class=""><a href="information/blooddonationtips.html">Blood Tips</a></li>
                    <li class=""><a href="contactus.html">Contact Us</a></li>





            </ul>
            <!-- /.main-menu -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.nav-bar-main -->
    <script src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
    <!--Optional: include only if you are using the extra rules in additional-methods.js -->
    <script src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js" type="text/javascript"></script>
    