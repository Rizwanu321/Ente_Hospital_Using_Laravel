@extends('Donor.layouts.defaults')
@section('abc')

    <script src="../../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
    <!--Optional: include only if you are using the extra rules in additional-methods.js -->
    <script src="../../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js" type="text/javascript"></script>
    <script>
        $.validator.addMethod('numericOnly', function(value) {
            return /^[0-9]+$/.test(value);
        }, 'Please only enter numeric values (0-9)');
        jQuery.validator.addMethod("lettersonly", function(value) {
            return /^[a-z\s]+$/.test(value);
        }, "Only alphabetical characters");
        jQuery.validator.addMethod("select1", function(value, element) {
            if (element.value == "0") {
                return false;
            } else {
                return true;
            }
        }, "Please select an option.");
        $(function() {
                    $("#login_user").validate({
                                ignore: [],
                                rules: {
                                    password: {
                                        required: true,
                                        minlength: 8,
                                        maxlength: 15
                                    },
                                    emailid: {
                                        required: true,email:true    }   },  messages:{  password:{  required:"Please enter your password",  minlength:"Password should atleast 8 letter",   maxlength:"Password should not exceed 20 letter"    },  emailid:{   required:"Please enter your email/mobile number"    }   }   }); }); $( ".control-group .input-group select" ).addClass( "form-control" );
    </script>
    <script>
        $.validator.addMethod('numericOnly', function(value) {
            return /^[0-9]+$/.test(value);
        }, 'Please only enter numeric values (0-9)');
        jQuery.validator.addMethod("lettersonly", function(value) {
            return /^[a-z\s]+$/.test(value);
        }, "Only alphabetical characters");
        jQuery.validator.addMethod("select1", function(value, element) {
            if (element.value == "0") {
                return false;
            } else {
                return true;
            }
        }, "Please select an option.");
        $(function() {
            $("#login_user_mobile").validate({
                ignore: [],
                rules: {
                    password: {
                        required: true,
                        minlength: 8,
                        maxlength: 15
                    },
                    emailid: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    password: {
                        required: "Please enter your password",
                        minlength: "Password should atleast 8 letter",
                        maxlength: "Password should not exceed 20 letter"
                    },
                    emailid: {
                        required: "Please enter your email"
                    }
                }
            });
        });
        $(".control-group .input-group select").addClass("form-control");
    </script>
    <script src="../../code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="../../code.jquery.com/ui/1.11.4/themes/excite-bike/jquery-ui.css">
    <script>
        $(function() {
            $("#dob").datepicker({
                dateFormat: "dd-mm-yy",
                maxDate: 0,
                changeMonth: true,
                changeYear: true,
                yearRange: "-70:+0"
            });
        });
    </script>
    <script>
        $(function() {
            $("#blooddonateddate").datepicker({
                dateFormat: "dd-mm-yy",
                maxDate: 0,
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
    <script type="text/javascript">
        function viewEligibility() {
            window.open("../information/eligibility.html", 'BloodDonorEligibility', 'width=500,height=600,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');
        }

        function viewTerms() {
            window.open("privacy_policy.html", 'DonorTerms', 'width=500,height=600,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');
        }
    </script>
    <div class="register-main-contant">
        <div class="container bbi-wrap">
            <div class="row">
                <div class="login-mobile"> </div>
                <div class="right-side">
                    <div class="ads">
                        <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                        <!-- BBI-Square --><ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3218462307754388" data-ad-slot="3664157787"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                    <!-- ads -->
                    <div class="tab-widget">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#BLOOD-REQUESTS">BLOOD <span>REQUESTS</span></a></li>
                            <li><a href="#RECENT-DONORS">RECENT <span>DONORS</span></a></li>
                            <li><a href="#QUICK">QUICK <span>TIP</span></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="BLOOD-REQUESTS" class="tab-pane fade in active">
                                <div class="widget-main">
                                    <div class="widget-inner">
                                        <div class='blood-req-widget'>
                                            <div class='b-group2'>
                                                <div class='sub-b-group-1'> <i class='fa fa-user'></i>&nbsp<b>Sananda Chakraborty </b>&nbsp <i class='fa fa-map-marker'></i>&nbspDurgapur </div>
                                                <div class='sub-b-group-2'> <i class='fa fa-question-circle'></i>&nbsp27-11-2019&nbsp&nbsp&nbsp<i class='fa fa-clock-o'></i>&nbsp3 days ago </div>
                                                <div class='sub-b-group-3'> </div>
                                            </div>
                                            <div class='b-group3'>
                                                <div class='b-group'>A- </div>
                                                <br>
                                                <div class='sub-b-group-4'>
                                                    <a data-toggle='tooltip' data-placement='top' title='View Details' href=../tools/req/2059.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='blood-req-widget'>
                                            <div class='b-group2'>
                                                <div class='sub-b-group-1'> <i class='fa fa-user'></i>&nbsp<b>Sananda Chakraborty </b>&nbsp <i class='fa fa-map-marker'></i>&nbspDurgapur </div>
                                                <div class='sub-b-group-2'> <i class='fa fa-question-circle'></i>&nbsp27-11-2019&nbsp&nbsp&nbsp<i class='fa fa-clock-o'></i>&nbsp3 days ago </div>
                                                <div class='sub-b-group-3'> </div>
                                            </div>
                                            <div class='b-group3'>
                                                <div class='b-group'>A- </div>
                                                <br>
                                                <div class='sub-b-group-4'>
                                                    <a data-toggle='tooltip' data-placement='top' title='View Details' href=../tools/req/2058.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='blood-req-widget'>
                                            <div class='b-group2'>
                                                <div class='sub-b-group-1'> <i class='fa fa-user'></i>&nbsp<b>PG Rajendran </b>&nbsp <i class='fa fa-map-marker'></i>&nbspHyderabad, Andhra Pradesh </div>
                                                <div class='sub-b-group-2'> <i class='fa fa-question-circle'></i>&nbsp01-11-2019&nbsp&nbsp&nbsp<i class='fa fa-clock-o'></i>&nbsp8 days ago </div>
                                                <div class='sub-b-group-3'> </div>
                                            </div>
                                            <div class='b-group3'>
                                                <div class='b-group'>AB+ </div>
                                                <br>
                                                <div class='sub-b-group-4'>
                                                    <a data-toggle='tooltip' data-placement='top' title='View Details' href=../tools/req/2057.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='blood-req-widget'>
                                            <div class='b-group2'>
                                                <div class='sub-b-group-1'> <i class='fa fa-user'></i>&nbsp<b>Bipin Bhai Joshi </b>&nbsp <i class='fa fa-map-marker'></i>&nbspAhmedabad </div>
                                                <div class='sub-b-group-2'> <i class='fa fa-question-circle'></i>&nbsp30-10-2019&nbsp&nbsp&nbsp<i class='fa fa-clock-o'></i>&nbsp9 days ago </div>
                                                <div class='sub-b-group-3'> </div>
                                            </div>
                                            <div class='b-group3'>
                                                <div class='b-group'>A+ </div>
                                                <br>
                                                <div class='sub-b-group-4'>
                                                    <a data-toggle='tooltip' data-placement='top' title='View Details' href=../tools/req/2056.html> <i class='fa fa-search' aria-hidden='true'></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.widget-inner -->
                                </div>
                                <!-- /.widget-main -->
                            </div>
                            <div id="RECENT-DONORS" class="tab-pane fade">
                                <div class="widget-main">
                                    <div class="widget-inner">
                                        <div class='blood-req-widget'>
                                            <div class='rec-b-group'>B+ </div>
                                            <div class='rec-b-name'><b style='font-family:HelveticaNeue-Bold;'>Shubham Tyagi </b> (Ghaziabad)
                                                <br/> 3 hours ago </div>
                                        </div>
                                        <div class='blood-req-widget'>
                                            <div class='rec-b-group'>B+ </div>
                                            <div class='rec-b-name'><b style='font-family:HelveticaNeue-Bold;'>Dhruv Ajay Sureka </b> (Mumbai)
                                                <br/> 5 hours ago </div>
                                        </div>
                                        <div class='blood-req-widget'>
                                            <div class='rec-b-group'>A+ </div>
                                            <div class='rec-b-name'><b style='font-family:HelveticaNeue-Bold;'>Shruthi PK </b> (Bangalore)
                                                <br/> 12 hours ago </div>
                                        </div>
                                        <div class='blood-req-widget'>
                                            <div class='rec-b-group'>O- </div>
                                            <div class='rec-b-name'><b style='font-family:HelveticaNeue-Bold;'>Anand Yadav </b> (Mumbai)
                                                <br/> 1 day ago </div>
                                        </div>
                                    </div>
                                    <!-- /.widget-inner -->
                                </div>
                                <!-- /.widget-main -->
                            </div>
                            <div id="QUICK" class="tab-pane fade">
                                <div class="widget-main">
                                    <div class="widget-main-title">
                                        <h4 class="widget-title">What you should eat before donating blood </h4> </div>
                                    <!-- /.widget-main-title -->
                                    <div class="widget-inner">
                                        <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better!
                                            <br/> Check out the following recommended foods to eat prior to your donation.</p>
                                        <table border="0" cellpadding="5" cellspacing="0" class="ULtable">
                                            <tr>
                                                <td><img src="../bbi_theme/images/arrow.jpg" width="8" height="5" /></td>
                                                <td>Low fat foods</td>
                                            </tr>
                                            <tr>
                                                <td><img src="../bbi_theme/images/arrow.jpg" width="8" height="5" /></td>
                                                <td>Iron rich foods</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.widget-main -->
                            </div>
                        </div>
                        <!-- tab-content -->
                    </div>
                    <!-- tab-widget -->
                </div>
                <!-- Right side -->
                <div class="left-side">
                    <div class="row">
                        <div class="widget-item"> <span class="errspns"> </span>
                            <h2 class="welcome-text">Register as a Blood Donor</h2>
                            <form class="form-horizontal" method="post" action="https://www.bloodbankindia.net/donors/register_action" id="register">
                                <div class="mob-con-border">
                                    <div class="con-border">
                                        <div class="col-md-12">
                                            <h3>Login Information</h3>
                                            <div class="row">
                                                <div class="col-md-6 mob-con-border">
                                                    <div class="control-group">
                                                        <label>Full Name *</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" aria-describedby="basic-addon1" rel="tooltip" name="donor_name" id="donor_name" value="" title="Please fill your Fullname Maximum 20 characters. "> </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label>Email ID *</label>
                                                        <div class="input-group">
                                                            <input type="email" class="form-control" rel="tooltip" name="emailid" id="emailid" value="" title="Email can contain only letters, numbers, periods (.), @, hyphens (-) and underscores (_)."> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mob-con-border">
                                                    <div class="control-group">
                                                        <label>Password *</label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" rel="tooltip" id="password" name="password" value="" title=" Please enter your password. Minimum 8 characters,case sensitive."> </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label>Confirm Password *</label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" rel="tooltip" id="cpassword" name="cpassword" value="" title="Please Re-enter your password exactly as entered in previous field."> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="con-border">
                                        <div class="col-md-12">
                                            <h3> Donor Information</h3>
                                            <div class="row">
                                                <div class="col-md-6 mob-con-border">
                                                    <div class="control-group">
                                                        <label>Date of Birth *</label>
                                                        <div class="input-group"> <span class="input-group-addon" id=""><i class="fa fa-calendar"></i></span>
                                                            <input type="text" class="form-control" placeholder="Select" rel="tooltip" name="dob" id="dob" value="" readonly="readonly" title="Please select your Date of Birth"> </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label>Your Blood Group *</label>
                                                        <div class="input-group">
                                                            <select name="blood" id="blood">
                                                                <option value="0">Select </option>
                                                                <option value="A+">A+</option>
                                                                <option value="B+">B+</option>
                                                                <option value="O+">O+</option>
                                                                <option value="A-">A-</option>
                                                                <option value="B-">B-</option>
                                                                <option value="O-">O-</option>
                                                                <option value="AB+">AB+</option>
                                                                <option value="AB-">AB-</option>
                                                            </select>
                                                            <label for="blood" class="error"></label>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="control-group"> <label>How often you donate blood?</label> <div class="input-group"> <select name="how_often" class='form-control lastdonated'> <option value="0">Select</option> <option value="yet-to-donate">Yet to donate</option> <option value="Regular donor">Regular donor</option> <option value="On need basis">On need basis</option> </select> </div> </div> -->
                                                    <div class="control-group">
                                                        <label>How often you donate blood? *</label>
                                                        <div class="input-group">
                                                            <select name="how_often" id="type">
                                                                <option name="" value="0">Select</option>
                                                                <option name="yet" value="Yet to Donate">Yet to Donate</option>
                                                                <option name="regular" value="Regular donor">Regular donor</option>
                                                                <option name="on-need" value="On need basis">On need basis</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- col-md-6 -->
                                                <div class="col-md-6 mob-con-border">
                                                    <div class="control-group">
                                                        <label>Gender *</label>
                                                        <div class="input-group"> <span class="radio-inline"> <input type="radio" name="gender" id="optionsRadios1" value="M"> <label for="optionsRadios1" class="radio-gender">Male</label> </span> <span class="radio-inline"> <input type="radio" name="gender" id="optionsRadios2" value="F"> <label for="optionsRadios2" class="radio-gender">Female</label> </span> </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label>Weight (Kg) *</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" name="weight" id="weight" value="" rel="tooltip" title="Please enter your weight"> </div>
                                                    </div>
                                                    <!-- <div class="control-group blooddonateddate" style="display: none;"> <label>Date of last blood donation</label> <div class="input-group"> <span class="input-group-addon" id=""><i class="fa fa-calendar"></i></span> <input type="text" class="form-control" rel="tooltip" name="blooddonateddate" placeholder="Select" id="blooddonateddate" value="" readonly="readonly" title="Please select Last blood donation Date"> </div> </div> -->
                                                    <div id="row_dim">
                                                        <div class="control-group blooddonateddate">
                                                            <label>Date of last blood donation</label>
                                                            <div class="input-group"> <span class="input-group-addon" id=""><i class="fa fa-calendar"></i></span>
                                                                <input type="text" class="form-control" rel="tooltip" name="blooddonateddate" placeholder="Select" id="blooddonateddate" value="" readonly="readonly" title="Please select Last blood donation Date"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="con-border">
                                        <div class="col-md-12">
                                            <div class="mobile-head">
                                                <h3>Contact Information</h3> </div>
                                            <div class="row">
                                                <div class="col-md-6 mob-con-border">
                                                    <div class="control-group">
                                                        <label>Residence Phone</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" rel="tooltip" name="res_phno" id="res_phno" value="" title="Please enter your Residence Phone Number"> </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label>Address *</label>
                                                        <div class="input-group">
                                                            <textarea type="textarea" class="form-control" rel="tooltip" name="address1" id="address1" value="" title="Type your street address here.   Eg: #23, ABC Street"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label>City *</label>
                                                        <div class="input-group">
                                                            <select name="city_name" id="city_name">
                                                                <option value="0">Select </option>
                                                                <option value="1">Agartala</option>
                                                                <option value="2">Agra</option>
                                                                <option value="3">Ahmedabad</option>
                                                                <option value="4">Ahmednagar</option>
                                                                <option value="5">Aizwal</option>
                                                                <option value="6">Ajmer</option>
                                                                <option value="7">Akola</option>
                                                                <option value="8">Aligarh</option>
                                                                <option value="9">Allahabad</option>
                                                                <option value="10">Alwar</option>
                                                                <option value="11">Ambala</option>
                                                                <option value="12">Amravati</option>
                                                                <option value="13">Amreli</option>
                                                                <option value="14">Amritsar</option>
                                                                <option value="15">Anand</option>
                                                                <option value="16">Anantapur</option>
                                                                <option value="17">Anklesvar</option>
                                                                <option value="18">Anuppur</option>
                                                                <option value="19">Araria</option>
                                                                <option value="20">Arcot</option>
                                                                <option value="21">Arrah</option>
                                                                <option value="22">Aruppukkottai</option>
                                                                <option value="23">Asansol</option>
                                                                <option value="24">Ashok Nagar</option>
                                                                <option value="25">Aurangabad, Bihar</option>
                                                                <option value="26">Aurangabad, Maharashtra</option>
                                                                <option value="27">Azamgarh</option>
                                                                <option value="28">Bahadurgarh</option>
                                                                <option value="29">Baharampur</option>
                                                                <option value="30">Bahraich</option>
                                                                <option value="31">Balaghat</option>
                                                                <option value="32">Balangir Orissa</option>
                                                                <option value="33">Balasore</option>
                                                                <option value="34">Balia</option>
                                                                <option value="35">Ballabhgarh</option>
                                                                <option value="36">Ballarpur</option>
                                                                <option value="37">Balrampur</option>
                                                                <option value="38">Balurghat West Bengal</option>
                                                                <option value="39">Banda</option>
                                                                <option value="40">Bangalore</option>
                                                                <option value="41">Banganapalle</option>
                                                                <option value="42">Banswara</option>
                                                                <option value="43">Banswara</option>
                                                                <option value="44">Banur</option>
                                                                <option value="45">baran</option>
                                                                <option value="46">Bardhaman</option>
                                                                <option value="47">Bareilly</option>
                                                                <option value="48">Barh</option>
                                                                <option value="49">Baripada</option>
                                                                <option value="50">Barmer</option>
                                                                <option value="51">Barrackpur</option>
                                                                <option value="52">Barwani</option>
                                                                <option value="53">Beawar</option>
                                                                <option value="54">Belgaum</option>
                                                                <option value="55">Bellary</option>
                                                                <option value="56">Bengaluru</option>
                                                                <option value="57">Betul</option>
                                                                <option value="58">Bhagalpur</option>
                                                                <option value="59">Bhandara</option>
                                                                <option value="60">Bharatpur</option>
                                                                <option value="61">Bharuch</option>
                                                                <option value="62">Bhavani</option>
                                                                <option value="63">Bhavnagar</option>
                                                                <option value="64">Bhilai Nagar</option>
                                                                <option value="65">Bhimavaram</option>
                                                                <option value="66">Bhiwandi</option>
                                                                <option value="67">Bhopal</option>
                                                                <option value="68">Bhubaneswar</option>
                                                                <option value="69">Bhuj</option>
                                                                <option value="70">Bidar</option>
                                                                <option value="71">Bihar Sharif</option>
                                                                <option value="72">Bijnaur, UP</option>
                                                                <option value="73">Bikaner</option>
                                                                <option value="74">Bilaspur, Chhattisgarh</option>
                                                                <option value="75">Bilaspur, Himachal Pradesh</option>
                                                                <option value="76">Bilgha, Punjab</option>
                                                                <option value="77">Bodh Gaya</option>
                                                                <option value="78">Bokaro Steel City</option>
                                                                <option value="79">Bongaigaon</option>
                                                                <option value="80">Bulandshahr</option>
                                                                <option value="81">Buldana</option>
                                                                <option value="82">Burhanpur</option>
                                                                <option value="83">Buxar</option>
                                                                <option value="84">Cambay</option>
                                                                <option value="85">Caryobys</option>
                                                                <option value="86">Chamoli Gopeshwar</option>
                                                                <option value="87">Champawat</option>
                                                                <option value="88">Chamrajnagar</option>
                                                                <option value="89">Chandannagar</option>
                                                                <option value="90">Chandigarh</option>
                                                                <option value="91">Chandrapur</option>
                                                                <option value="92">Chapra</option>
                                                                <option value="93">Charkhari</option>
                                                                <option value="94">Chengalpattu</option>
                                                                <option value="95">Chennai</option>
                                                                <option value="96">Chhatarpur</option>
                                                                <option value="97">Chhindwara</option>
                                                                <option value="98">Chikmagalur</option>
                                                                <option value="99">Chiplun</option>
                                                                <option value="100">Chitradurga</option>
                                                                <option value="101">Chitrakoot Dham Karwi</option>
                                                                <option value="102">Chittoor</option>
                                                                <option value="103">Coimbatore</option>
                                                                <option value="104">Contai</option>
                                                                <option value="105">Coonoor</option>
                                                                <option value="106">Cuddalore</option>
                                                                <option value="107">Cuddapah</option>
                                                                <option value="108">Cuttack</option>
                                                                <option value="109">Dabra</option>
                                                                <option value="110">Dadra</option>
                                                                <option value="111">Dahod</option>
                                                                <option value="112">Daksh</option>
                                                                <option value="113">Daltonganj</option>
                                                                <option value="114">Daman</option>
                                                                <option value="115">Damoh</option>
                                                                <option value="116">Darbhanga</option>
                                                                <option value="117">Darjeeling</option>
                                                                <option value="118">Datia</option>
                                                                <option value="119">Davanagere</option>
                                                                <option value="120">Dehgam</option>
                                                                <option value="121">Dehradun</option>
                                                                <option value="122">Delhi</option>
                                                                <option value="123">Deoghar</option>
                                                                <option value="124">Dewas</option>
                                                                <option value="125">Dhanbad</option>
                                                                <option value="126">Dhar</option>
                                                                <option value="127">Dharampur</option>
                                                                <option value="128">Dharamsala</option>
                                                                <option value="129">Dharwad</option>
                                                                <option value="130">Dholka</option>
                                                                <option value="131">Dhule</option>
                                                                <option value="132">Dhulian</option>
                                                                <option value="133">Dibrugarh</option>
                                                                <option value="134">Dindigul</option>
                                                                <option value="135">Dispur</option>
                                                                <option value="136">Diu</option>
                                                                <option value="137">Diu</option>
                                                                <option value="138">Dombivli</option>
                                                                <option value="139">Duhbai</option>
                                                                <option value="140">Dumdum</option>
                                                                <option value="141">Durg</option>
                                                                <option value="142">Durgapur</option>
                                                                <option value="143">Dwarka</option>
                                                                <option value="144">Ernakulam</option>
                                                                <option value="145">Erode</option>
                                                                <option value="146">Etah</option>
                                                                <option value="147">Etawah</option>
                                                                <option value="148">Faizabad</option>
                                                                <option value="149">Faridabad</option>
                                                                <option value="150">Faridkot</option>
                                                                <option value="151">Farrukhabad</option>
                                                                <option value="152">Fatehgarh</option>
                                                                <option value="153">Fatehpur Sikri</option>
                                                                <option value="154">Ferozepur Cantt.</option>
                                                                <option value="155">Ferozepur City</option>
                                                                <option value="156">Firozabad</option>
                                                                <option value="157">Gadchiroli</option>
                                                                <option value="158">Gandhinagar</option>
                                                                <option value="159">Gangtok</option>
                                                                <option value="160">Ganjam</option>
                                                                <option value="161">Garcha, Punjab</option>
                                                                <option value="162">Gaya</option>
                                                                <option value="163">Ghaziabad</option>
                                                                <option value="164">Ghazipur</option>
                                                                <option value="165">Goa Velha</option>
                                                                <option value="166">Godhra</option>
                                                                <option value="167">Gondiya</option>
                                                                <option value="168">Gorakhpur</option>
                                                                <option value="169">Greater Noida</option>
                                                                <option value="170">Gudalur</option>
                                                                <option value="171">Gudivada</option>
                                                                <option value="172">Gulbarga</option>
                                                                <option value="173">Gumla</option>
                                                                <option value="174">Guna</option>
                                                                <option value="175">Gundlupet</option>
                                                                <option value="176">Guntur</option>
                                                                <option value="177">Gurgaon</option>
                                                                <option value="178">Guruharsahai</option>
                                                                <option value="179">Guwahati</option>
                                                                <option value="180">Gwalior</option>
                                                                <option value="181">Gwalior</option>
                                                                <option value="182">Haldia</option>
                                                                <option value="183">Haldwani</option>
                                                                <option value="184">Hamir, Uttar Pradesh</option>
                                                                <option value="185">Hamirpur, Himachal Pradesh</option>
                                                                <option value="186">Hansi</option>
                                                                <option value="187">Hanumangarh</option>
                                                                <option value="188">Harda</option>
                                                                <option value="189">Haridwar</option>
                                                                <option value="190">Harsawa</option>
                                                                <option value="191">Hassan</option>
                                                                <option value="192">Hastinapur</option>
                                                                <option value="193">Hathras</option>
                                                                <option value="194">Hatigudda, Karnataka</option>
                                                                <option value="195">Himatnagar</option>
                                                                <option value="196">hindupur</option>
                                                                <option value="197">Hisar</option>
                                                                <option value="198">Hoshiarpur</option>
                                                                <option value="199">Howrah</option>
                                                                <option value="200">Hubli</option>
                                                                <option value="201">Hyderabad, Andhra Pradesh</option>
                                                                <option value="202">Indore</option>
                                                                <option value="203">Irinjalakuda</option>
                                                                <option value="204">Jabalpur</option>
                                                                <option value="205">Jagraon</option>
                                                                <option value="206">Jagtial</option>
                                                                <option value="207">Jaipur</option>
                                                                <option value="208">Jais</option>
                                                                <option value="209">Jaisalmer</option>
                                                                <option value="210">Jalalabad</option>
                                                                <option value="211">Jalandhar</option>
                                                                <option value="212">Jalgaon</option>
                                                                <option value="213">Jammu</option>
                                                                <option value="214">Jamnagar</option>
                                                                <option value="215">Jamshedpur</option>
                                                                <option value="216">Jaunpur</option>
                                                                <option value="217">Jhabua</option>
                                                                <option value="218">Jhalawar</option>
                                                                <option value="219">Jhansi</option>
                                                                <option value="220">Jhunjhunu</option>
                                                                <option value="221">Jodhpur</option>
                                                                <option value="222">Jorhat</option>
                                                                <option value="223">Junagadh</option>
                                                                <option value="224">Kakinada</option>
                                                                <option value="225">Kalimpong</option>
                                                                <option value="226">Kalwa</option>
                                                                <option value="227">Kalyan-Dombivali</option>
                                                                <option value="228">Kalyani</option>
                                                                <option value="229">Kanauj</option>
                                                                <option value="230">Kancheepuram</option>
                                                                <option value="231">Kandla</option>
                                                                <option value="232">Kangazha</option>
                                                                <option value="233">Kannur</option>
                                                                <option value="234">Kanpur</option>
                                                                <option value="235">Kanyakumari</option>
                                                                <option value="236">Karaikal</option>
                                                                <option value="237">Karaikudi</option>
                                                                <option value="238">Karamsad</option>
                                                                <option value="239">Karimnagar</option>
                                                                <option value="240">Karjat</option>
                                                                <option value="241">Karnal</option>
                                                                <option value="242">Karur</option>
                                                                <option value="243">Karwar</option>
                                                                <option value="244">Kavaratti</option>
                                                                <option value="245">Khamanon</option>
                                                                <option value="246">Khammam</option>
                                                                <option value="247">Khandwa</option>
                                                                <option value="248">Khanna</option>
                                                                <option value="249">Kharagpur</option>
                                                                <option value="250">Khargone</option>
                                                                <option value="251">Kheda</option>
                                                                <option value="252">Khilchipur</option>
                                                                <option value="253">Khopoli</option>
                                                                <option value="254">Khuldabad</option>
                                                                <option value="255">Kirandul</option>
                                                                <option value="256">Kochi</option>
                                                                <option value="257">Kohima</option>
                                                                <option value="258">Kokrajhar</option>
                                                                <option value="259">Kolar</option>
                                                                <option value="260">Kolhapur</option>
                                                                <option value="261">Kolkata</option>
                                                                <option value="262">Kollam</option>
                                                                <option value="263">Konark</option>
                                                                <option value="264">Korba</option>
                                                                <option value="265">Kota</option>
                                                                <option value="266">Kotdwara</option>
                                                                <option value="267">Kothagudem</option>
                                                                <option value="268">Kothamangalam</option>
                                                                <option value="269">Kottarakara</option>
                                                                <option value="270">Kottayam</option>
                                                                <option value="271">Kovilpatti</option>
                                                                <option value="272">Koyampattur</option>
                                                                <option value="273">Kozhencherry</option>
                                                                <option value="274">Kozhikode</option>
                                                                <option value="275">Krishnagiri</option>
                                                                <option value="276">Kulpahar</option>
                                                                <option value="277">Kumbakonam</option>
                                                                <option value="278">Kumbhraj</option>
                                                                <option value="279">Kurnool</option>
                                                                <option value="280">kurukshetra]</option>
                                                                <option value="281">Kushinagar</option>
                                                                <option value="282">Lalitpur</option>
                                                                <option value="283">Lamka</option>
                                                                <option value="284">Leh</option>
                                                                <option value="285">Leh</option>
                                                                <option value="286">Lucknow</option>
                                                                <option value="287">Ludhiana</option>
                                                                <option value="288">Machilipatnam</option>
                                                                <option value="289">Madanapalle</option>
                                                                <option value="290">Madgaon</option>
                                                                <option value="291">Madikeri</option>
                                                                <option value="292">Madurai</option>
                                                                <option value="293">Mahabaleswar</option>
                                                                <option value="294">Mahabubnagar</option>
                                                                <option value="295">Mahad</option>
                                                                <option value="296">Mahe</option>
                                                                <option value="297">Mahoba</option>
                                                                <option value="298">Mahwa</option>
                                                                <option value="299">Malout</option>
                                                                <option value="300">Mandsaur</option>
                                                                <option value="301">Mangalagiri</option>
                                                                <option value="302">Mangalore</option>
                                                                <option value="303">Mapusa</option>
                                                                <option value="304">Marmagao</option>
                                                                <option value="305">Mathura</option>
                                                                <option value="306">Meerut</option>
                                                                <option value="307">Melattur</option>
                                                                <option value="308">Mirzapur</option>
                                                                <option value="309">Moga</option>
                                                                <option value="310">Mohali</option>
                                                                <option value="311">Mokama</option>
                                                                <option value="312">Moradabad</option>
                                                                <option value="313">Motihari</option>
                                                                <option value="314">Mount Abu</option>
                                                                <option value="315">Mukatsar</option>
                                                                <option value="316">Mullanpur</option>
                                                                <option value="317">Mumbai</option>
                                                                <option value="318">Murshidabad</option>
                                                                <option value="319">Murwara</option>
                                                                <option value="320">Mussoorie</option>
                                                                <option value="321">Muzaffarnagar</option>
                                                                <option value="322">Muzaffarpur</option>
                                                                <option value="323">Mysore</option>
                                                                <option value="324">Nadiad</option>
                                                                <option value="325">Nagapattinam</option>
                                                                <option value="326">Nagarkurnool</option>
                                                                <option value="327">Nagercoil</option>
                                                                <option value="328">Nagina, UP</option>
                                                                <option value="329">Nagpur</option>
                                                                <option value="330">Nainital</option>
                                                                <option value="331">Nalgonda</option>
                                                                <option value="332">Nanded</option>
                                                                <option value="333">Nandurbar</option>
                                                                <option value="334">Nandyal</option>
                                                                <option value="335">Nanital</option>
                                                                <option value="336">Narasaraopet</option>
                                                                <option value="337">Narnol</option>
                                                                <option value="338">Narsimhapur</option>
                                                                <option value="339">Narsinghgarh</option>
                                                                <option value="340">Nashik</option>
                                                                <option value="341">Navi Mumbai</option>
                                                                <option value="342">Navsari</option>
                                                                <option value="343">Nawalgarh</option>
                                                                <option value="344">Neemuch</option>
                                                                <option value="345">Nellore</option>
                                                                <option value="346">New Delhi* or Delhi</option>
                                                                <option value="347">New Guntur</option>
                                                                <option value="348">Nizamabad</option>
                                                                <option value="349">NOIDA</option>
                                                                <option value="350">Nurmahal, Punjab</option>
                                                                <option value="351">Nurpur, Himachal Pradesh</option>
                                                                <option value="352">Palghat</option>
                                                                <option value="353">Palwal</option>
                                                                <option value="354">Panaji</option>
                                                                <option value="355">Panchkula</option>
                                                                <option value="356">Pandharpur</option>
                                                                <option value="357">Panipat</option>
                                                                <option value="358">Panna</option>
                                                                <option value="359">Panvel</option>
                                                                <option value="360">Pasla, Punjab</option>
                                                                <option value="361">Patan</option>
                                                                <option value="362">Pathankot</option>
                                                                <option value="363">Patiala</option>
                                                                <option value="364">Patna</option>
                                                                <option value="365">Patratu,Jharkhand</option>
                                                                <option value="366">Pimpri Chinchwad</option>
                                                                <option value="367">Ponda</option>
                                                                <option value="368">Porbandar</option>
                                                                <option value="369">Port Blair</option>
                                                                <option value="370">Pratapgarh</option>
                                                                <option value="371">Puducherry</option>
                                                                <option value="372">Punalur</option>
                                                                <option value="373">Pune</option>
                                                                <option value="374">Puri</option>
                                                                <option value="375">Pushkar</option>
                                                                <option value="376">Quilon</option>
                                                                <option value="377">Rae Bareli</option>
                                                                <option value="378">Raichur</option>
                                                                <option value="379">Raigarh</option>
                                                                <option value="380">Raipur</option>
                                                                <option value="381">Raisen</option>
                                                                <option value="382">Rajahmundry</option>
                                                                <option value="383">Rajampet</option>
                                                                <option value="384">Rajgarh</option>
                                                                <option value="385">Rajkot</option>
                                                                <option value="386">Rajnandgaon</option>
                                                                <option value="387">Rajsthan</option>
                                                                <option value="388">Ramanathapuram</option>
                                                                <option value="389">Rameshwaram</option>
                                                                <option value="390">Rampur</option>
                                                                <option value="391">Ranchi</option>
                                                                <option value="392">Rangapara</option>
                                                                <option value="393">Ranikhet</option>
                                                                <option value="394">Rasheed</option>
                                                                <option value="395">Ratangarh</option>
                                                                <option value="396">Ratlam</option>
                                                                <option value="397">Ratnagiri</option>
                                                                <option value="398">Raurkela</option>
                                                                <option value="399">Ravulapalem</option>
                                                                <option value="400">Rewa</option>
                                                                <option value="401">Ringawa</option>
                                                                <option value="402">Rishikesh</option>
                                                                <option value="403">Roorkee</option>
                                                                <option value="404">Sagars</option>
                                                                <option value="405">Saharanpur</option>
                                                                <option value="406">Salem</option>
                                                                <option value="407">Samastipur</option>
                                                                <option value="408">Sanawad</option>
                                                                <option value="409">Sangamner</option>
                                                                <option value="410">Sangli</option>
                                                                <option value="411">Satara</option>
                                                                <option value="412">Sathyamangalam</option>
                                                                <option value="413">Satna</option>
                                                                <option value="414">Sehore</option>
                                                                <option value="415">Seoni</option>
                                                                <option value="416">Shajapur</option>
                                                                <option value="417">Shegaon</option>
                                                                <option value="418">Sheopur</option>
                                                                <option value="419">Shevgaon</option>
                                                                <option value="420">Shillong</option>
                                                                <option value="421">Shimla</option>
                                                                <option value="422">Shimoga</option>
                                                                <option value="423">Shirala</option>
                                                                <option value="424">Shivani</option>
                                                                <option value="425">Shivpuri</option>
                                                                <option value="426">Shoaib</option>
                                                                <option value="427">Sholapur</option>
                                                                <option value="428">shrigonda</option>
                                                                <option value="429">shrirampur</option>
                                                                <option value="430">Siddipet</option>
                                                                <option value="431">Sikar</option>
                                                                <option value="432">Silchar</option>
                                                                <option value="433">Siliguri</option>
                                                                <option value="434">Silvassa</option>
                                                                <option value="435">Sindhanur</option>
                                                                <option value="436">Singrauli</option>
                                                                <option value="437">Sirohi</option>
                                                                <option value="438">Sironj</option>
                                                                <option value="439">Sitamarhi</option>
                                                                <option value="440">Sitapur</option>
                                                                <option value="441">Siwan</option>
                                                                <option value="442">Sonipat</option>
                                                                <option value="443">Sriganganagar</option>
                                                                <option value="444">Srikakulam</option>
                                                                <option value="445">Srinagar</option>
                                                                <option value="446">Surat</option>
                                                                <option value="447">Suratgarh</option>
                                                                <option value="448">Surendranagar</option>
                                                                <option value="449">Tamluk</option>
                                                                <option value="450">Tandur</option>
                                                                <option value="451">Tenali</option>
                                                                <option value="452">Thane</option>
                                                                <option value="453">Thanjavur</option>
                                                                <option value="454">Thathawata</option>
                                                                <option value="455">Thiruvallur</option>
                                                                <option value="456">Thiruvananthapuram</option>
                                                                <option value="457">Thoothukudi,</option>
                                                                <option value="458">Thrikkannamangal</option>
                                                                <option value="459">Thrissur</option>
                                                                <option value="460">Tikamgarh</option>
                                                                <option value="461">Tinsukia</option>
                                                                <option value="462">Tiruchirappalli</option>
                                                                <option value="463">Tirunelveli</option>
                                                                <option value="464">Tirupathi</option>
                                                                <option value="465">Tirupattur</option>
                                                                <option value="466">Tirupur</option>
                                                                <option value="467">Tiruvarur</option>
                                                                <option value="468">Tzudikong</option>
                                                                <option value="469">Udaipur in Rajasthan</option>
                                                                <option value="470">Udaipur in Tripura</option>
                                                                <option value="471">Udhagamandalam</option>
                                                                <option value="472">Udhampur in Jammu & Kashmir</option>
                                                                <option value="473">Udupi</option>
                                                                <option value="474">Ujjain</option>
                                                                <option value="475">Ulhasnagar</option>
                                                                <option value="476">Unnao</option>
                                                                <option value="477">Uttarpara in West Bengal</option>
                                                                <option value="478">Vadodara</option>
                                                                <option value="479">Vallabh Vidhyanagar</option>
                                                                <option value="480">Valsad</option>
                                                                <option value="481">Vandavasi</option>
                                                                <option value="482">Vapi</option>
                                                                <option value="483">Varanasi</option>
                                                                <option value="484">Vasai</option>
                                                                <option value="485">Vasco da Gama, Goa</option>
                                                                <option value="486">Vellore</option>
                                                                <option value="487">Vidisha</option>
                                                                <option value="488">Vijayawada</option>
                                                                <option value="489">Viluppuram</option>
                                                                <option value="490">Virar</option>
                                                                <option value="491">Virudhachalam</option>
                                                                <option value="492">Visakhapatnam</option>
                                                                <option value="493">Vizianagaram</option>
                                                                <option value="494">Vyara</option>
                                                                <option value="495">Wani</option>
                                                                <option value="496">Warangal</option>
                                                                <option value="497">Wardha</option>
                                                                <option value="498">Wayanad</option>
                                                            </select>
                                                            <label for="city_name" class="error"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mob-con-border">
                                                    <div class="control-group">
                                                        <label>Mobile No *</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="mob_no" id="mob_no" rel="tooltip" value="" title="Please enter your Mobile Number"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!-- mobile close-->
                                <div class="clearfix"></div>
                                <div class="control-group mob-con-border">
                                    <div class="controls">
                                        <div class="g-recaptcha" data-sitekey="6LfTwx0TAAAAAFkCeWGu9nesAY8BeBr9bgfRLtGA"></div>
                                    </div>
                                </div>
                                <div class="control-group mob-con-border">
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="checkbox" value="" name="accept_terms"> <span class="some">I have read the <a href="#" data-toggle="modal" data-target="#myModal-eligibility" >Eligibility Criteria</a> and confirm that I am eligible to donate blood. </span></label>
                                        <div class="modal fade" id="myModal-eligibility" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="widget-item-model">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="10">
                                                                <tr>
                                                                    <td align="left">
                                                                        <div class="content">
                                                                            <h2>DOs and DON'Ts of blood donation</h2>
                                                                            <p>In order to ensure safe and health environment to both donors as well as recipients, we greatly recommend to follow the below rules:</p>
                                                                            <h2>DO donate blood, only if you satisfy all of the following conditions</h2>
                                                                            <table border="0" cellspacing="0" cellpadding="5">
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/do.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">You are between age group of 18-60 years.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/do.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Your weight is 45 kgs or more.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/do.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Your hemoglobin is 12.5 gm% minimum.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/do.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Your last blood donation was 3 or more months earlier.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/do.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">You are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.</td>
                                                                                </tr>
                                                                            </table>
                                                                            <h2>DO NOT donate blood, if you have any of the following conditions</h2>
                                                                            <table border="0" cellspacing="0" cellpadding="5">
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Cold / fever in the past 1 week.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Under treatment with antibiotics or any other medication.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer, chronic kidney or liver disease, bleeding tendencies, venereal disease etc.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Major surgery in the last 6 months.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Vaccination in the last 24 hours.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Had fainting attacks during last donation.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Have regularly received treatment with blood products.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Shared a needle to inject drugs/ have history of drug addiction. </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Had sexual relations with different partners or with a high risk individual.</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><img src="../bbi_theme/images/dont.png" alt="-" width="10" height="10" /></td>
                                                                                    <td valign="top">Been tested positive for antibodies to HIV.</td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- modal-body -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <label class="checkbox">
                                            <input type="checkbox" value="condition" name="accept_condition"> I agree to the <span class="some"> <a href="#" data-toggle="modal" data-target="#myModal-terms">Terms and Conditions</span></a> and consent to have my contact and donor information published to the potential blood recipients. </label>
                                        <div class="modal fade" id="myModal-terms" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="widget-item-model">
                                                            <div class="content">
                                                                <table width="100%" border="0" cellspacing="0" cellpadding="10">
                                                                    <tr>
                                                                        <td align="left">
                                                                            <h2>Privacy Policy</h2>
                                                                            <p>The BloodBankIndia.net team is committed to protecting the rights of all visitors to our website. We recognize our obligation to keep personal information secure and have created this privacy statement to share our information gathering and dissemination practices for this website. We also assure you that none of your registered information will be shared with any third parties outside the BloodBankIndia.net or the parent company uSiS Technologies. However, the information that you have agreed to broadcast during the process of registration will be available for the public view. </p>
                                                                            <h2>Collection and Use of On-line Information </h2>
                                                                            <p>Our web server automatically collects your IP address when you visit our site. (Your IP address is your computer's unique address that lets other computers attached to the Internet know where to send data, but does not identify you individually). We use your IP address to help diagnose problems with our server and to compile statistics on site usage. We do not make your IP address available to anyone. From time to time, we may also use cookies on your web browser to store some of the user preference, this cookie will communicate only with this website and if you wish not have them saved, you may have them deleted from your computer using your browser&rsquo;s settings. When you visit certain areas of this site including the registration form, you may be asked to provide personal information (such as name, address, e-mail address, and phone number) that we need to process your request. In the event that you decline to provide such information, we will be unable to process your request. Still, we invite you to continue to visit the site and take advantage of the wealth of information it offers. Every site user who provides us with personal information has the right to inspect, amend, or correct his/her own personal information. You may do so either online by logging in, if you are a registered user, or through simply contacting us using the details posted on the &lsquo;contact us&rsquo; page on our website. </p>
                                                                            <h2>Other Websites, Links and Resources </h2>
                                                                            <p>This privacy policy extends to this website (<a href="../index.html">www.bloodbankindia.net</a>) only. If you link to another individual or entity's website through our website or re-directed from our website, you should read the privacy policy specific to that website to determine their practices. If you have any questions or concerns about the online policy for this site or its implementation you may contact us using the details posted on the &lsquo;contact us&rsquo; page on our website. </p>
                                                                            <h2>Terms of use </h2>
                                                                            <p>This is purely a non-profit website directed towards the welfare of our community. Any individual or entity that enrolls for our service does so with his/her own will and at no obligation to any one else or any other entity. We seriously condemn the use of this website for any commercial purpose, including solicitation for commercial gain based on the contact details posted by the registered users. We take the privacy of our users very seriously and therefore reserve the right to pursue a legal action against the individuals or entities violating our terms of use. </p>
                                                                            <h2>Use of Donations</h2>
                                                                            <p> We do accept funds in form of donation from those who volunteer themselves to do so; such funds collected will be used for running blood camps at select locations and for covering the part of the administrative expenses at running the website. </p>
                                                                            <h2>Complaints Procedure </h2>
                                                                            <p>Anyone who experiences a problem with the service provided by BloodBankIndia.net should raise the matter directly using our online contact us form, giving sufficient information to locate the material (such as an url) and clearly outlining the grounds for complaint. BloodBankIndia.net team will approach the individual responsible for the material in question with a view to resolving the matter to the satisfaction of the complainant. The formal complaints procedure should only be used where the complainant feels that the nature of the complaint is too serious to be dealt with informally, or where a satisfactory conclusion has not been reached after following the informal procedure. A formal complaint should be made in writing to BloodBankIndia.net team, who will acknowledge receipt and ensure that the matter is looked into at the earliest possible. An initial response to any complaint can be expected within seven days of its receipt; a full and considered response to the complaint should be completed within 30 days and any subsequent remedy implemented with the minimum of delay.</p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- model-body -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group mob-con-border">
                                    <div class="controls btn-bbi-group">
                                        <button type="submit" class="btn btn-danger btn-bbi">Register</button>
                                        <br/> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Left side -->
            </div>
        </div>
    </div>
    <!-- register-main-contant -->
</body>
<!-- Mirrored from www.bloodbankindia.net/donors/register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 09:28:55 GMT -->

</html>
<script src="../../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
<script src="../../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#register #city_name,#blood').select2({
            placeholder: ''
        });
        $('button[data-select2-open]').click(function() {
            $('#' + $(this).data('select2-open')).select2('open');
        });
    });
</script>
<script>
    $.validator.addMethod('numericOnly', function(value) {
        return /^([0-9\.])+$/.test(value);
    }, 'Please only enter numeric values (0-9.)');
    jQuery.validator.addMethod("lettersonly", function(value) {
        return /^[a-zA-Z\s]+$/.test(value);
    }, "Only alphabetical characters");
    jQuery.validator.addMethod("select1", function(value, element) {
        if (element.value == "0") {
            return false;
        } else {
            return true;
        }
    }, "Please select an option.");
    $(function() {
        $("#register").validate({
            ignore: [],
            rules: {
                donor_name: {
                    required: true,
                    minlength: 3,
                    maxlength: 20,
                    lettersonly: true
                },
                password: {
                    required: true,
                    minlength: 8,
                    maxlength: 15
                },
                cpassword: {
                    required: true,
                },
                dob: {
                    required: true
                },
                blood: {
                    select1: true,
                    required: true,
                },
                how_often: {
                    select1: true,
                },
                city_name: {
                    select1: true,
                    required: true,
                },
                mob_no: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
                weight: {
                    required: true,
                    numericOnly: true,
                    maxlength: 5
                },
                emailid: {
                    required: true,
                    email: true
                },
                address1: {
                    required: true
                } /*gender:{ required:true }*/
            },
            messages: {
                donor_name: {
                    required: "Please enter your name",
                    minlength: "Name should atleast 3 letter",
                    maxlength: "Name should not exceed 30 letter",
                    lettersonly: "Name should have only alphabets letter and space "
                },
                password: {
                    required: "Please enter your password",
                    minlength: "Password should atleast 8 letter",
                    maxlength: "Password should not exceed 20 letter"
                },
                cpassword: {
                    required: "Please enter confirm password",
                },
                dob: {
                    required: "Please enter your date of birth"
                },
                mob_no: {
                    required: "Please enter your mobile number",
                    minlength: "Please enter valid mobile number"
                },
                address1: {
                    required: "Please enter your address"
                },
                blood: {
                    required: "Please select your blood group"
                },
                weight: {
                    required: "Please enter your weight",
                    numericOnly: "You should enter only number ",
                    maxlength: "Weight should be in 5 digits"
                },
                city_name: {
                    required: "Please select your city",
                    select1: "Please select your city"
                },
                emailid: {
                    required: "Please enter your email"
                },
                /*gender:{ required:"Please select your gender" }*/
            }
        });
    });
    $(".control-group .input-group select").addClass("form-control");
</script>
<script>
    // $( '.lastdonated' ).click( function () // { //   var lastdonated = $('.lastdonated').val(); //   if(lastdonated == 'yet-to-donate') //   { //    $('.blooddonateddate').css('display','none'); //    } //    else if(lastdonated == '0') //  { //    $('.blooddonateddate').css('display','none'); //    } //    else // { //    $('.blooddonateddate').css('display','block'); //   } // });
</script>
<script>
    $(function() {
        $('#row_dim').hide();
        $('#type').change(function() {
            if ($('#type').val() == 'Regular donor') {
                $('#row_dim').show();
            } else if ($('#type').val() == 'On need basis') {
                $('#row_dim').show();
            } else {
                $('#row_dim').hide();
            }
        });
    });
</script>
    
    @stop