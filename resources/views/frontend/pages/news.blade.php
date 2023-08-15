@extends('frontend.layouts.defaults')
@section('abc')

<div class="clearfix"></div>
<section class="inner-page-banner">
  <div class="container">
    <div class="page-tittle clearfix">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h3>News</h3>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <ul class="paging">
          <li><a href="/">HOME</a></li>
          <li><a >News</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<main class="main_cont inner_page ">
  <div class="container">
    
    <div class="row">
 
		<div class="col-lg-12">
			<div class="row">
       @foreach($news as $b)
      <div class="col-lg-3 col-md-4 col-sm-6 ">
       
							<div class="ms_col">
            
								<div class="img_col"> 
									<img src="../../uploads/news/{{$b->id}}/{{$b->image_name}}" title="" alt="" class="img-responsive">
								</div>
								<div class="post_ft"><span class="post_date"><i class="fa fa-clock"></i>&nbsp;  {{$b->created_at->diffForHumans()}}</span>
									<h2>{{$b->name}}</h2>
									<a href="{{route('admin.news.views',['id'=>$b->id])}}" class="more_btn">Read More</a>
									<div class="clearfix"></div>
								</div>
							</div>
           
						</div>
               @endforeach
						
			<div class="clearfix"></div>
		</div></div>

                  
  </div>

  <!-- home contact-->
  <div class="container">
    <div class="row"> </div>
  </div>
</main>



@stop