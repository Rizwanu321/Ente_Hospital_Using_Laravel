@extends('frontend.layouts.defaults')
@section('abc')


  <div class="clearfix"></div><section class="inner-page-banner">
	  			<div class="container">
							<div class="page-tittle clearfix">
										<div class="col-lg-6 col-md-6 col-sm-6">
										<h3>SERVICE DEPARTMENT</h3>
										</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
											<ul class="paging">
												<li><a href="/">HOME</a></li>
												<li><a href="http://gghbeach.com/all-departments.php">SERVICE DEPARTMENT</a></li>
												<li><a >{{$p->title}}</a></li>
											</ul>
									</div>
								</div>
	  			</div>
	</section>
<main class="main_cont inner_page ">
  	<div class="container">
    	<div  class="row" >
      	<div class="col-lg-8 col-md-6 col-sm-6">
         		<h2 class="txt_b"><span> {{$p->title}} </span> </h2>
         		<div class="clearfix"></div>
						<ul id="deprt" class="owl-carousel owl-theme slid_inner">
									<li class="item"> <img style="width: 350px;height:300px;" src="../../portcats/{{$p->image}}"/> </li>
									
						</ul>
        		<p>{{$p->description}}</p>




<p>&nbsp;</p>

<p>&nbsp;</p>

 
     		</div>
      	<div class="col-lg-4 col-md-6 col-sm-6">
      		<h2 class="txt_b"><span>DEPARTMENT</span> </h2>
						
					
        
     
				<!-- 	<ul class="dpt_btn_part">
						<li><a href="#" class="btn_doctor"> <i class="fa fa-download"></i>&nbsp;&nbsp;Download</a></li>-->
						<!--<li> <a href="#" class="btn_doctor"> <i class="fa fa-user-md"></i>&nbsp;&nbsp;View Doctor</a></li>
					</ul>-->
       	 <div class="clearfix"></div>
				 <div class="widget">
         
          <ul class="widget_sidemenu">
								   @foreach($produts as $b)         
            <li><a href="{{route('admin.dept.views',['pcid'=>$b->pcid])}}" title=ADMINISTRATION >{{$b->title}} </a></li>
                     		 @endforeach
           
                      </ul>
        </div>
        
        
      </div>
    </div>
  </div>
  <!-- home contact-->
  <div class="container  in_department">
  <br><br>
    <h2 class="txt_b"><span>DOCTORS </span> </h2>
    <ul class="doctor_wrap">
				 @foreach($data as $d) 				
      			<li>
									<div class="doctor_post">
											<div class="icon_doctor"> <img style="width: 200px;height:200px;" src="../portfolios/{{$d->image}}" width="62" height="61"></div>
								
										<div class="doctor_footer">
															<span class="doct_name"> {{$d->title}} </span> {{$d->qualification}} <br>
																														{{$d->position}}
															<div class="other_dtls">
																<!--<i class="fa fa-envelope"></i>
														&nbsp;&nbsp;infodoctor@gmail.com <br> <i class="fa fa-phone"></i>&nbsp;&nbsp; +91 9666666666-->
															</div>
										</div>
							</div>
					</li>

			
	 @endforeach
			
      		

			   
    </ul>
    
    
    
  </div>
</main>

@stop