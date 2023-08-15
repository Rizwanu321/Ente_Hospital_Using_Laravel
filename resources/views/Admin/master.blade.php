<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('backend/css/AdminLTE.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{url('backend/css/skins/_all-skins.min.css')}}">
  <script src="{{url('frontend/js/jquery-1.11.0.min.js')}}"></script>

<script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{url('backend/js/app.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous"></script>






  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header" style="background-color: #152036;">
    <!-- Logo -->
    <a href="{{url('admin')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"style="color:white;"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
         
        
     
          <li>
           
            <a href="{{URL::to('logout1')}}"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color: #152036;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" style="color:white">
   
      
    
  
 
       
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span style="font-size: 20px;">Doctors</span>
            
          </a>
          <ul class="treeview-menu">
            <li><a  href="{{URL::to('Admin/all-portfolio')}}"><i class="fa fa-circle-o"></i> All Doctors</a></li>
            <li><a href="{{URL::to('Admin/new-portfolio')}}"><i class="fa fa-circle-o"></i> Add/Edit/Delete</a></li>
            <li><a href="{{URL::to('Admin/portcats')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
            
          </ul>
        </li>
  
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span style="font-size: 20px;">Blood Bank</span>
            
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('Admin/home1')}}"><i class="fa fa-circle-o"></i> Home</a></li>
            <li><a href="{{URL::to('Admin/city')}}"><i class="fa fa-circle-o"></i> City</a></li>
              <li><a href="{{URL::to('Admin/bloodcontact')}}"><i class="fa fa-circle-o"></i> Blood Centers</a></li>
            <li><a href="{{URL::to('Admin/message')}}"><i class="fa fa-circle-o"></i>Inbox</a></li>
            <li><a href="{{URL::to('Admin/alldonorlist')}}"><i class="fa fa-circle-o"></i>All Doners</a></li>
            
          </ul>
        </li>
   <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span style="font-size: 20px;">Medicines</span>
            
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.products')}}"><i class="fa fa-circle-o"></i>All Medicines</a></li>
            <li><a href="{{route('admin.categories')}}"><i class="fa fa-circle-o"></i>Category</a></li>
       
            
          </ul>
        </li>
     <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span style="font-size: 20px;">News</span>
            
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.Breakingnews')}}"><i class="fa fa-circle-o"></i>Breaking News</a></li>
            <li><a href="{{route('admin.newss')}}"><i class="fa fa-circle-o"></i>All News</a></li>
       
            
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span style="font-size: 20px;">Facility</span>
            
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.facility')}}"><i class="fa fa-circle-o"></i>All Facility</a></li>
            <li><a href="{{route('admin.newss')}}"><i class="fa fa-circle-o"></i>All News</a></li>
       
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span style="font-size: 20px;">Contacts</span>
            
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.contact.ph')}}"><i class="fa fa-circle-o"></i>Add Phone Number</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Email Id</a></li>
       
            
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    @yield('content')
    
          
   
  </div>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->



</body>
</html>
