@extends('frontend.layouts.defaults')
@section('abc')

<div class="clearfix"></div><section class="inner-page-banner">
	  <div class="container">
		<div class="page-tittle clearfix">
		  <div class="col-lg-6 col-md-6 col-sm-6">
			<h3>FACILITY</h3>
		  </div>
		  <div class="col-lg-6 col-md-6 col-sm-6">
			<ul class="paging">
			  <li><a href="/">HOME</a></li>
			  <li><a href="http://gghbeach.com/facility.php">FACILITY</a></li>
			  <li><a >24 &times; 7 EMERGENCY</a></li>
			</ul>
		  </div>
		</div>
	  </div>
	</section>
	<main class="main_cont inner_page ">
	  <div class="container">
		<div  class="row" >
		
			<div class="col-lg-5 col-md-6 col-sm-6"><ul id="deprt" class="owl-carousel owl-theme slid_inner"><li class="item">
									<img style="width: 350px;height:400px;" src="../../uploads/facility/{{$p->id}}/{{$p->image_name}}"/>
							</li></ul></div>
			
			<div class="col-lg-7 col-md-6 col-sm-6">
				<h2 class="txt_b"><span>{{$p->name}}</span></h2>
					<ul class="dpt_btn_part">                   </ul><div class="clearfix"></div>




<p>{{$p->description}}</p>

</div>

		</div>
	  </div>
	  <!-- home contact-->
	  <div class="container">
		<div class="row"> </div>
	  </div>
	</main>

    
@stop