@extends('Donor.layouts.defaults')
@section('abc')




    <div class="main-search-blood-donors">
        <div class="search-blood-donors">
            <div class="container">
                <div class="row">
                    <div class="search-blood-left">
                        <h1>Search Blood Donors</h1>
                        <div class="search-box"> <span class="errspns"> </span>
                            <form class="form-horizontal" method="post" action="{{URL::to('Donor/search_blood')}}" id="search">
                                <ul class="nav nav-pills">
                                     {{csrf_field()}}
                                    <li class="search-bloodgroup">
                                        <label>Blood Group *</label>
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
                                    </li>
                                    <li class="search-city">
                                        <label>City *</label>
                                        <select name="city_name" id="city_name">
                                            <option value="">Select </option>
                                               @foreach($city as $c)
                            <option value="{{$c->name}}">{{$c->name}}</option>
                           @endforeach
                        
                                           
                                        </select>
                                        <label for="city_name" class="error"></label>
                                    </li>
                                    <li class="search-submit-block">
                                        <button type="submit" class="search-btn hvr-bounce-to-bottom-2 m1-2"> <span class="desktop-show">Search</span> <span class="mobile-show"><i class="fa fa-search"></i></span> </button>
                                    </li>
                                </ul>
                       
                                <!-- <div class="line"> <img src="bbi_theme/images/banner-border.png" alt="Blood Bank India Banner arrow" /> </div> -->
                                <hr>
                                
                            </form>
                            <div class="search-blood-banner">
                                <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                                <!-- BBI-Mobile --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3218462307754388" data-ad-slot="7278602188" data-ad-format="link"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                        </div>
                        <!-- search-box -->
                    </div>
                    <!-- search-blood-left -->
                    <div class="search-blood-right">
                        <!-- BBI-Square --><ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3218462307754388" data-ad-slot="3664157787"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
             <div class="counters-bg">
            <div id="counters">
                <div class="container">
                    <div class="row">
                        <div class="blood-donors">
                            <div class="blood-donors-heart"> <img src="{{ asset('website/bbi_theme/images/ico-1.png') }}" alt="Blood Donors in Blood Bank India" /> </div>
                            <div class="blood-donors-content"> <span class="odometer meter1">0</span><span>+</span>
                                <p>Blood Donors</p><h2>
                                            
                                             
                                </h2>
                            </div>
                        </div>
                        <div class="blood-request">
                            <div class="blood-donors-heart"> <img src="{{ asset('website/bbi_theme/images/ico-2.png') }}" alt="Blood Requests to Blood Bank India" /> </div>
                            <div class="blood-donors-content"> <span class="odometer meter2">0</span><span>+</span>
                                <p>Blood Requests</p>
                            </div>
                        </div>
                        <div class="active-donors">
                            <div class="blood-donors-heart"> <img src="{{ asset('website/bbi_theme/images/ico-3.png') }}" alt="Active Donors in Blood Bank India" /> </div>
                            <div class="blood-donors-content"> <span class="odometer meter3">0</span><span>+</span>
                                <p>Active Donors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- counters-bg -->
        <div id="widget-main-info">
            <div class="container">
                <div class="row">
                    <div class="row2">
                        <div class="widget-content widget-sms">
                            <h2>Blood Donate Tips</h2>
                            <div class="smartmarquee-content">
                                <div class="smartmarquee example">
                                    <ul class="container">
                                        <li>
                                            <div class="widget-sms-content item-1">
                                                <div class="sms-content-main-title">
                                                    <h4>രക്തം ദാനം ചെയ്യുന്നതിന് മുമ്പ് നിങ്ങൾ എന്താണ് കഴിക്കേണ്ടത്</h4> </div>
                                                <div class="sub-content-1">
                                                    <p>ആരോഗ്യകരമായ ഭക്ഷണക്രമം വിജയകരമായ രക്തദാനം ഉറപ്പാക്കാൻ സഹായിക്കുന്നു, മാത്രമല്ല നിങ്ങൾക്ക് മികച്ച അനുഭവം നൽകുകയും ചെയ്യുന്നു!
നിങ്ങളുടെ സംഭാവനയ്ക്ക് മുമ്പ് കഴിക്കാൻ ശുപാർശ ചെയ്യുന്ന ഇനിപ്പറയുന്ന ഭക്ഷണങ്ങൾ പരിശോധിക്കുക.</p>
                                                </div>
                                                <table border="0" cellpadding="5" cellspacing="0" class="ULtable">
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('website/bbi_theme/images/arrow.jpg')}}" width="8" height="5" alt="Next arrow blood bank india" /></td>
                                                            <td>കൊഴുപ്പ് കുറഞ്ഞ ഭക്ഷണങ്ങൾ</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="{{ asset('website/bbi_theme/images/arrow.jpg')}}" /></td>
                                                            <td>	ഇരുമ്പ് സമ്പുഷ്ടമായ ഭക്ഷണങ്ങൾ(Iron rich foods)</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                        <li>
                                      
                                        </li>
                                        <li>
                                            <div class="widget-sms-content item-2">
                                                <div class="sms-content-main-title">
                                                    <h4>Blood Groups</h4> </div>
                                                <div class="sub-content-1">
                                                    <p>ഏതൊരു മനുഷ്യന്റെയും രക്തഗ്രൂപ്പ് പ്രധാനമായും ഇനിപ്പറയുന്ന ഏതെങ്കിലും ഗ്രൂപ്പുകളിൽ പെടും. </p>
                                                </div>
                                                <ul>
                                                    <li>A positive or A negative </li>
                                                    <li>B positive or B negative </li>
                                                    <li>O positive or O negative </li>
                                                    <li>AB positive or AB negative.</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-sms-content item-3">
                                                <div class="sms-content-main-title">
                                                    <h4>Universal Donors and Recipients</h4> </div>
                                                <div class="sub-content">
                                                    <p>
ഏറ്റവും സാധാരണമായ രക്ത തരം <b>O</b> ആണ്, അതിനുശേഷം ടൈപ്പ് <B>A</B>.</p>
                                                    <p>ടൈപ്പ് <B>O</B> വ്യക്തികളെ "സാർവത്രിക ദാതാക്കൾ(Universal Donors)" എന്ന് വിളിക്കാറുണ്ട്, കാരണം അവരുടെ രക്തം ഏതെങ്കിലും രക്ത തരത്തിലുള്ളവർക്ക് കൈമാറ്റം ചെയ്യാനാകും. <B>AB</B> രക്തം ഉള്ളവരെ "സാർവത്രിക സ്വീകർത്താക്കൾ(Universal recipients)" എന്ന് വിളിക്കുന്നു, കാരണം അവർക്ക് ഏത് തരത്തിലുള്ള രക്തവും ലഭിക്കും.</p>
                                                   
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-sms-content">
                                                <div class="sms-content-main-title">
                                                    <h4>രക്തം ദാനം ചെയ്യുക,</h4> </div>
                                                <div class="sub-content-1">
                                                    <p>
ഇനിപ്പറയുന്ന എല്ലാ നിബന്ധനകളും നിങ്ങൾ പാലിച്ചാൽ മാത്രം</p>
                                                </div>
                                                <ul>
                                                    <li>നിങ്ങൾ 18-60 വയസ്സിനിടയിലുള്ളവരാണ്</li>
                                                    <li>നിങ്ങളുടെ ഭാരം 45 കിലോ അതിൽ കൂടുതലോ ആണ്.</li>
                                                    <li>നിങ്ങളുടെ അവസാന രക്തദാനം മൂന്നോ അതിലധികമോ മാസം മുമ്പായിരുന്നു.</li>
                                                </ul>
                                                <div class="sub-content-1">
                                                    <p><a href="information/blooddonationtips.html">(And More)</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-sms-content">
                                                <div class="sms-content-main-title">
                                                    <h4>രക്തം ദാനം ചെയ്യരുത്,</h4> </div>
                                                <div class="sub-content-1">
                                                    <p>നിങ്ങൾക്ക് ഇനിപ്പറയുന്ന ഏതെങ്കിലും നിബന്ധനകൾ ഉണ്ടെങ്കിൽ</p>
                                                </div>
                                                <ul>
                                                    <li>കഴിഞ്ഞ 1 ആഴ്ചയിൽ ജലദോഷം / പനി.</li>
                                                    <li>ആൻറിബയോട്ടിക്കുകൾ അല്ലെങ്കിൽ മറ്റേതെങ്കിലും മരുന്നുകൾ ഉപയോഗിച്ച് ചികിത്സയിലാണ്</li>
                                                    <li>കഴിഞ്ഞ 6 മാസത്തിൽ പ്രധാന ശസ്ത്രക്രിയ നടന്നിട്ടുണ്ടെങ്കിൽ.</li>
                                                    <li>കഴിഞ്ഞ 24 മണിക്കൂറിനുള്ളിൽ കുത്തിവയ്പ്പ്.</li>
                                                </ul>
                                                <div class="sub-content-1">
                                                    <p><a href="information/blooddonationtips.html">(And More)</a></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-bloodrequest">
                            <h2>Blood Requests</h2>
                            <div class="widget-bloodrequest-content scrollpar" id="style-2">
                                @foreach($request as $r)
                                <div class='blood-req-widget'>

                                 
                                    <div class='b-group2'>
                                        <div class='sub-b-group-1'> <i class='fa fa-user'></i>&nbsp<b>{{$r->contactname}}</b>&nbsp &nbsp&nbsp&nbsp<i class='fa fa-map-marker'></i>&nbsp{{$r->city}}</div>
                                        <div class='sub-b-group-2'> <i class='fa fa-phone'></i>&nbsp{{$r->contactnumber }}&nbsp&nbsp&nbsp&nbsp <i class='fa fa-clock-o'></i>&nbsp{{$r->required}}</div>
                                        <div class='sub-b-group-3'> </div>
                                    </div>
                                     <div class='b-group3'>
                                        <div class='b-group'>{{$r->blood}} </div>
                                        <br>
                                        <div class='sub-b-group-4'>
                                            <a data-toggle='tooltip' data-placement='top' title='View Details' href="{{ URL::to('Requestor/edit1request/'.$r->id)}}"> <i class='fa fa-search' aria-hidden='true'></i> </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>



                        <div class="widget-content widget-recentdonors">
                            <h2>Recent Donors</h2>
                            <div class="widget-recentdonors-content">
                                <!-- <h2>{{$count}}</h2> -->
                                @foreach($donor as $d)
                                <div class='blood-req-widget'>
                                    <div class='rec-b-group'>{{$d->blood}} </div>
                                    <div class='rec-b-name'><b style='font-family:HelveticaNeue-Bold;'>{{$d->fullname}} </b> ({{$d->city}})&nbsp&nbsp&nbsp&nbsp&nbsp{{$r->contactnumber }}
                                        <br/>{{$d->updated_at}}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- main-search-blood-donors -->
    <script type="text/javascript">
        function viewTerms() {
            window.open("information/privacy_policy.html", 'DonorTerms', 'width=500,height=600,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');
        }
    </script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
    <!--Optional: include only if you are using the extra rules in additional-methods.js -->
    <script src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js" type="text/javascript"></script>
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
            $("#search").validate({
                ignore: [],
                rules: {
                    blood: {
                        select1: true,
                        required: true
                    },
                    city_name: {
                        select1: true,
                        required: true
                    },
                    
                },
                messages: {
                    blood: {
                        required: "Please select your blood group"
                    },
                    city_name: {
                        required: "Please select your city",
                        select1: "Please select your city"
                    },
                
                }
            });
        });
        $(".control-group .input-group select").addClass("form-control");
    </script>
    <script>
        var donor = "{{$count}}";
        var request = "{{$count1}}";
        var active = "{{$count2}}";
        console.log(donor);
        setTimeout(function() {
            $('.meter1').html(donor);
            $('.meter2').html(request);
            $('.meter3').html(active);
        }, 1500);
    </script>
    <script language="javascript">
        $(document).ready(function() {
            $(".smartmarquee").smartmarquee();
        });
    </script>
    <!-- begin The Footer -->
    

   









@stop