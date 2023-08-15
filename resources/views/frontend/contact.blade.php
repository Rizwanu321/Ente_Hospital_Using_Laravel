@extends('frontend.layouts.defaults')
@section('abc')


<section class="inner-page-banner">
  <div class="container">
    <div class="page-tittle clearfix">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h3>CONTACT US</h3>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <ul class="paging">
          <li><a href="/">HOME</a></li>
          <li><a >CONTACT US</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<main class="main_cont inner_page">
  <div class="container">
    <div class="row"><div class="col-lg-6 col-md-6 col-sm-6 side_right">
			<h2 class="txt_b"><span>Address</span></h2>
			<div class="clearfix"></div>
				<div class="address-block">
				  <h2>Government District Hospital, Nilambur</h2>
				  <div class="address"><p>Nilambur PO,
Malappuram - 679329,
Kerala, India.</p></div>
					<div class="address">
					<p>
						<strong>Land Line:</strong>&nbsp;&nbsp;&nbsp;0495 2365917<br><strong>Email:</strong>&nbsp;&nbsp;&nbsp;mothqhnilambur@gmail.com<br></p>
				  </div>
				</div>

              
<div class="col-md-6">
 <br><br> <h2 class="txt_b"><span>Contact Numbers</span></h2>                 
<table width="500px" border="0" align="center" cellpadding="0" cellspacing="0">
 
  <tr>
    <td width="54%" height="20"><strong>DEPARTMENTS</strong></td>
     <td width="54%" height="20"><strong>PHONE NUMBERS</strong></td>
  </tr>
  <tr>
    <td height="20" colspan="2"><hr></td>
  </tr>
    @foreach($p as $p)
  <tr>
    <td height="40" bgcolor="#DAF4FE">{{$p->name}}</td>
    <td bgcolor="#DAF4FE">{{$p->phoneno}}</td>
  </tr>
 
 @endforeach
</table> </div>
                
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6"><div class="loaction"> <h2 class="txt_b"><span>Our Location</span></h2>
					  <div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d978.1994757873125!2d76.22182165658073!3d11.276261354398734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba63b9daa52e39b%3A0x88a535fb99eba29e!2sGovernment%20District%20Hospital!5e0!3m2!1sen!2sin!4v1607931885288!5m2!1sen!2sin" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>					  </div>
					</div></div></div>
                    
    <div class="clearfix"></div>
    <hr>
     
   
   
  </div>
  
  <!-- home contact-->
  <div class="container">
    <div class="row"> </div>
  </div>
</main>

@stop