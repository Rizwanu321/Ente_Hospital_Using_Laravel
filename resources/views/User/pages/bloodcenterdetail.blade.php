@extends('User.layouts.defaults')
@section('abc')

  <div class="clearfix"></div><section class="inner-page-banner">
	  			<div class="container">
							<div class="page-tittle clearfix">
										<div class="col-lg-6 col-md-6 col-sm-6">
										<h3></h3>
										</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
											
									</div>
								</div>
	  			</div>
	</section>
<main class="main_cont inner_page ">
  	<div class="container">
    	<div  class="row" >
      	<div class="col-lg-8 col-md-6 col-sm-6">
         		<h2 class="txt_b"><span> </span> </h2>
         		<div class="clearfix"></div>
						<ul id="deprt" class="owl-carousel owl-theme slid_inner">
									<li class="item"> <img style="width:450px;height:450px;" src="../../uploads/bloodcenter/{{$p->id}}/{{$p->image}}" ></li>
									
						</ul>
        	




<p>&nbsp;</p>

<p>&nbsp;</p>

 
     		</div>
      	<div class="col-lg-4 col-md-6 col-sm-6" style="padding-left:-150px">
      		<h1 class="txt_b"><b><span>{{$p->name}} </span> </h1>
			  <h3>Place:&nbsp;{{$p->place}}</h3>

			  <h3>Phone Number:&nbsp;{{$p->phoneno}}</h3><br>
				
					
    <div class="form-group" style="text-align: center;">
	<u><h4 style="padding-right: 60PX;COLOR:RED;"><B>AVAILABLE BLOOD BOTTLE:</h3></u></B>
                    </br>
	<h3>
                                        <table border=2 style="width:500px;height:100px;align-items: center;">
                                               <center>   <th>A+</th> 
                                                    <th>A-</th>
                                                     <th>B+</th>
                                                     <th>B-</th> 
                                                    <th>AB+</th>
                                                     <th>AB-</th>
                                                     <th>O+</th> 
                                                     <th>O-</th> 
                                                   
                                                     <tr>
                                                         <td>{{$p->A1}}</td>
                                                          <td>{{$p->A2}}</td>
                                                           <td>{{$p->B1}}</td>
                                                           <td>{{$p->B2}}</td>
                                                           <td>{{ $p->AB1}}</td>
                                                           <td>{{$p->AB2}}</td>
                                                           <td>{{$p->O1}}</td>
                                                           <td>{{$p->O2}}</td>


                                                     </tr></center>
                                               </table>
     
				<!-- 	<ul class="dpt_btn_part">
						<li><a href="#" class="btn_doctor"> <i class="fa fa-download"></i>&nbsp;&nbsp;Download</a></li>-->
						<!--<li> <a href="#" class="btn_doctor"> <i class="fa fa-user-md"></i>&nbsp;&nbsp;View Doctor</a></li>
					</ul>-->
	</div>  	
        
        
      </div>
    </div>
  </div>

  <div style="padding-left:100px">
  <b><h3>{{$p->description}}</h3></b>
  <!-- home contact-->
</div>
</main>

@stop