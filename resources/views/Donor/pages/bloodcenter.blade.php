@extends('Donor.layouts.defaults')
@section('abc')



<main class="main_cont inner_page ">
  <div class="container">
    <div  class="row" >
      <div class="col-md-12 ">
        <ul class="ul_department">
		 @foreach($depts as $d)
		<li> 
							<a href="{{route('admin.donerblooddept.views',['id'=>$d->id])}}">
							<figure class="dprt_img">
								<img style="width: 310px;height: 350px;" src="../../uploads/bloodcenter/{{$d->id}}/{{$d->image}}"/>
						
							</figure>
							<figcaption class="dprt_footer">{{$d->name}} </figcaption>
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