@extends('frontend.layouts.defaults')
@section('abc')

<div class="clearfix"></div>
<section class="inner-page-banner">
  <div class="container">
    <div class="page-tittle clearfix">
      <h3>NEWS</h3>
      <ul class="paging">
        <li><a href="/">HOME</a></li>
        <li><a >NEWS</a></li>
      </ul>
    </div>
  </div>
</section>
<main class="main_cont inner_page news_more">
  <div class="container">
    <div class="row">
		<div class="col-lg-9 col-md-8  col-sm-8">
			<div class="row">
				<div class="col-lg-12"><div class="ms_col"><div class="img_col">
								 <ul id="news_slider" class="owl-carousel owl-theme"> <li  class="item ">  <img style="height:400px" src="../../uploads/news/{{$p->id}}/{{$p->image_name}}" title="" alt="" class="img-responsive"></li></ul> 

							</div><div class="post_ft"> <span class="post_date"><i class="fa fa-clock"></i>&nbsp;{{$p->created_at->diffForHumans()}}</span>

							<br><br><h1>{{$p->name}}</h1>
							<h2>{{$p->description}}</h2>

							<div class="clearfix"></div>
						</div>
					</div>
					






				</div></div>
			<div class="clearfix"></div>
		</div>	<div class="col-lg-3 col-md-4 col-sm-4 side_right"><h2 class="txt_b"><span>More News</span></h2>
			<div class="more_news">
				<ul class="ul_morenews">
				   @foreach($products as $b)
				<li>


								<a href="{{route('admin.news.views',['id'=>$b->id])}}">
									<div class="card-head"> 
								 <div class="card-head"> 
									<figure class="thump_img"> <img class="img" src="../../uploads/news/{{$b->id}}/{{$b->image_name}}"/></figure></div>
									</div><div class="thump_cont"> <p>{{$b->name}}</p></div>
								</a>
							</li>
							 @endforeach

							 </ul>
			</div><div class="clearfix"></div></div></div>
  </div>
  <!-- home contact-->
  <div class="container">
    <div class="row"> </div>
  </div>
</main>
@stop