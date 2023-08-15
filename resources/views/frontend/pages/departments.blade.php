@extends('frontend.layouts.defaults')
@section('abc')


  <section class="inner-page-banner">
  <div class="container">
    <div class="page-tittle clearfix">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h3>SERVICE DEPARTMENT</h3>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <ul class="paging">
          <li><a href="/">HOME</a></li>
          <li><a >SERVICE DEPARTMENT</a></li>
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
		 @foreach($depts as $d)
		<li> 
						<a href="http://gghbeach.com/department.php?id=s%3A2%3A%2220%22%3B">
							<figure class="dprt_img">
								<img src="{{url('portcat')}}/{{$d->image}}"/>
								<span class="overlay">
									<i class="dpt_icon">
										<img src="{{url('portcat')}}/{{$d->image}}" width="84" height="84" />
									</i>
								</span>
							</figure>
							<figcaption class="dprt_footer">{{$d->title}} </figcaption>
						</a>
					</li>
					 @endforeach</ul>
      </div>
    </div>
  </div>
  <!-- home contact-->
  <div class="container">
    <div class="row"> </div>
  </div>
</main>


@stop