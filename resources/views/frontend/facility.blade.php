@extends('frontend.layouts.defaults')
@section('abc')
<div class="clearfix"></div>
<section class="inner-page-banner">
  <div class="container">
    <div class="page-tittle clearfix">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h3>FACILITIES</h3>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <ul class="paging">
          <li><a href="/">HOME</a></li>
          <li><a >FACILITIES</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<main class="main_cont inner_page ">
  <div class="container">
    <div  class="row" >
      <div class="col-lg-12 ">
        <ul class="ul_department">
		  @foreach($facility as $b) <li> 
		
						<a href="{{route('admin.facility.views',['id'=>$b->id])}}">
							<figure class="dprt_img">
								<img style="width: 370px;height:370px;" src="../../uploads/facility/{{$b->id}}/{{$b->image_name}}"/>
							</figure>
							<figcaption class="dprt_footer">{{$b->name}}</figcaption>
						</a>
					</li>
					 @endforeach
					</ul>
      </div>
    </div>
  </div>
  <!-- home contact-->
  <div class="container">
    <div class="row"> </div>
  </div>
</main>
   

@stop