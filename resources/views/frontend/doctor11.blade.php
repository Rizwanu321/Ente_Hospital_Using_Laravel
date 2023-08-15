<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Unique</title>

<link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css"> 
<link href="{{url('frontend/css/font-awesome.css')}}"rel="stylesheet" type="text/css"> 
<link href="{{url('frontend/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
 
</head>
<body>

<section class="inner-page-banner">
	  <div class="container">
		<div class="page-tittle clearfix">
		  <div class="col-lg-6 col-md-6 col-sm-6">
			<h3 style="color:white;">TODAYS DOCTORS</h3>
		  </div>
		  <div class="col-lg-6 col-md-6 col-sm-6">
			<ul class="paging">
			  <li><a href="/">HOME</a></li>
			  <li><a href="">TODAYS DOCTORS</a></li>
         
            <li>        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    </li>
		 <li><a href="{{ URL::to('doctorloginform') }}">DOCTOR LOGIN</a></li>
			</ul>
   
		  </div>

		</div>
	  </div>
	</section>


<section id="Portfolio" class="content"> 
 
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2>Doctors</h2>
    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters -->
  <div class="portfolio"> 
    
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a></li>
          @foreach($portcats as $cats)
        <li><a class="" href="#" data-filter=".{{$cats->title}}">
          <h5>{{$cats->title}}</h5>
          </a></li>
          @endforeach
        
      </ul>
    </div>
    <!--/Portfolio Filters --> 
    
    <!-- Portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper"> 
      
      <!-- Portfolio Item -->
     @foreach($portfolio as $port)
      <div class="card {{$port->class}} isotope-item">
        <div class="card-head"> <img class="img"src="{{url('portfolios')}}/{{$port->image}}"  alt="Portfolio 1"> </div>        
        <div class="card-body text-center">    
          <h1 class="bt">{{$port->title}}</h1>
        </div>
        </div>
        @endforeach
      <!--/Portfolio Item --> 
      
      <!-- Portfolio Item-->
      
      
    </div>
    <!--/Portfolio Wrapper --> 
    
  </div>
  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
</section>





<script type="text/javascript" src="{{url('frontend/js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery.nav.js')}}"></script> 
<script type="text/javascript" src="{{url('frontend/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/wow.js')}}"></script> 
<script type="text/javascript" src="{{url('frontend/js/custom.js')}}"></script>

</body>
</html>