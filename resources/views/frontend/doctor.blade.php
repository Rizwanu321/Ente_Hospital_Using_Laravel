@extends('frontend.layouts.defaults')
@section('abc')


<section class="inner-page-banner">
  <div class="container">
    <div class="page-tittle clearfix">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h3>DOCTORS</h3>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <ul class="paging">
          <li><a href="/">HOME</a></li>
          <li><a >DOCTORS</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

  
<main class="main_cont inner_page "><div class="container">
			<form action="/searchs" name="frmSearchFilter" id="frmSearchFilter" method="get" >
            
				<div class="row">
					<div class="filter_doctor">
					
						<div class="col-sm-6">
						    <label></label>
							<div class="form-group"><input type="search" name="search"  value="" id="search"  class="form-control"  placeholder="Enter Keyword Here">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group"> 
								
								      <button type="submit" class="more_btn">Search</button>
							</div>
			
						</div>
					</div>
				</div><div id="ajaxOuterDiv">
						<ul class="doctor_wrap">
                             @foreach($port as $p)
                        <li>
									<div class="doctor_post"> 
									<div class="icon_doctor"> 
									<img style="width: 200px;height:200px;" src="../portfolios/{{$p->image}}" >
							
										<div class="doctor_footer">
											<span class="doct_name">{{$p->title}}</span>{{$p->qualification}}<br/>{{$p->category}} <br/>{{$p->position}}											<div class="other_dtls"></div>
										</div>
										
									</div>
									
								</li>        @endforeach</ul>
					</div>
                    
                    <input type="hidden" name="hdnCurIndex" id="hdnCurIndex" value="1"> 
			</form>
		</div>

  <!-- home contact-->
  <div class="container">
    <div class="row"> </div>
  </div>
</main>


<script type="text/javascript">
	function scrollToTop(element){
		var id = "#"+ element;
		$("html, body").animate({ scrollTop: $(id).offset().top  -100}, 600);
	}
</script>
@stop