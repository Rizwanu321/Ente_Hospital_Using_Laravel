@extends('frontend.layouts.defaults')
@section('abc')


     <div class="clearfix"></div>
    <section id="site_banner">
        <div class="main_banner">
            <div id="btech_banner" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{asset('assets/images/banner-10.jpg')}}"  title="GOVERNMENT DISTRICT HOSPITAL NILAMBUR" alt="GOVERNMENT GENERAL HOSPITAL KOZHIKODE (BEACH HOSPITAL)" class="img-responsive" /></div>


                <div class="item"><img  src="{{asset('assets/images/banner-11.jpg')}}" title="GOVERNMENT GENERAL HOSPITAL KOZHIKODE (BEACH HOSPITAL)" alt="GOVERNMENT GENERAL HOSPITAL KOZHIKODE (BEACH HOSPITAL)" class="img-responsive" /></div>

                <div class="item"><img src="{{asset('assets/images/banner-12.jpg')}}" title="GOVERNMENT GENERAL HOSPITAL KOZHIKODE (BEACH HOSPITAL)" alt="GOVERNMENT GENERAL HOSPITAL KOZHIKODE (BEACH HOSPITAL)" class="img-responsive" /></div>

            </div>
            <div class="owl-nav">
                <div class="banner_prev slide_prev">prev</div>
                <div class="banner_nxt slide_nxt">next</div>
            </div>
        </div>
    </section>








    
    <div class="clearfix"></div>
    <section class="fl_news">
        <div class="container">
            <div class="news_wrap">
                <div class="fl_news_lft"><i class="fa fa-bullhorn"></i>&nbsp;&nbsp;NEWS</div>
         
                <div class="fl_news_rgt">
                    <marquee id="news-scroller" scrolldelay="2" scrollamount="5" onMouseOut="start();" onMouseOver="stop();" direction="left">
                        <p>         @foreach($breakingnews as $b)
                            <a href="news-details.php?id=7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$b->description}} <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                         @endforeach</p>
    
        </marquee>
      </div>
     
    </div>
  </div>
</section>
<div class="clearfix"></div><!--Header--> 

<section class="welcome_cont">
  <div class="container">
    <h1 class="hd_a">GOVERNMENT DISTRICT HOSPITAL  <br/>
     NILAMBUR</h1><p class="text-center">The Government District Hospital Nilambur was established in the year 1942 and having a bed strength of 142. The THQH was upgraded to District Hospital in 2014. Hospital is having a total area of 2.8 acres plot of land. The average OP per day 1500 and IP is 300. There are 11 specialties functioning in the hospital. Hospital is functioning in different buildings such as Administrative block, Casualty, OP department, Paediatric ward, medical ward, Surgical ward, labour ward, IP ward, post-Op ward, X-ray, pharmacy, MRL, PP unit, W&C building is under construction etc. Some other facilities like Milma Booth and mortuary are also in the hospital premises.<br><br>
    In Nilambur, out of the total population, 8.1% peoples lives in urban area, 91.9% in the rural area, scheduled caste population (SC) 9.6% and scheduled Tribe Population (ST) 2.4% of the total population. 30% of the under 6 years old. District Hospital Nilambur is located in the heart of Nilambur municipality. It is the oldest and largest tertiary level healthcare in the district of Malappuram. This hospital has an average of 45000 outpatients and 9000 inpatients per month. The number of normal deliveries per month is 285 and that of C-section is 65. There are about 100 major surgeries conducted here monthly excluding C-sections. The overall staff strength of the hospital at present is 242.</p><div class="clearfix"></div>
	

  </div>
</section>







  <div id="services" class="pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12">
          <h4>SERVICES</h4>
          
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item1"> <span class="icon feature_box_col_one"><i class="fa fa-user-md"></i></span>
            <h6>DOCTORS</h6>
            <a class="a" href="{{ URL::to('doctor')}}">Click Here</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item1"> <span class="icon feature_box_col_two"><img src="https://img.icons8.com/ios/50/fa314a/drop-of-blood--v2.png"/></i></span>
            <h6>BLOOD</h6>
            <a class="a" href="{{ URL::to('User/index')}}">Click Here</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item1"> <span class="icon feature_box_col_three"><i class="fa fa-medkit"></i></span>
            <h6>MEDICINE</h6>
          <a class="a" href="{{ URL::to('/medicine')}}">Click Here</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item1"> <span class="icon feature_box_col_four"><i class="fa fa-ambulance"></i></span>
            <h6>AMBULANCE</h6>
            <a class="a" href="{{ URL::to('User/index')}}">Click Here</a>
          </div>
        </div>
      
      </div>
    </div>
</div>














@stop