<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style type="text/css">


.user-profile .user-profile-card {
  position: relative;
  padding-top: 0;
  overflow: hidden;
}

.user-profile-card .user-profile-header {
  background: url("http://lorempixel.com/850/280/nature/4/");
  background-size: cover;
  height: 135px;
}

.user-profile-card .user-profile-avatar {
  position: relative;
  top: -100px;
  margin-bottom: -100px;
  padding: 0 15px;
}

.user-profile-card .user-profile-avatar img {
  width: 200px;
  height: 200px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  border: 2px solid rgba(255,255,255,0.5);
}

.user-profile small {
  display: block;
  line-height: 1.428571429;
  color: #999;
}

</style>

  </head>
  <body>



  <header class="main-header" style="background-color: #152036;">
    <!-- Logo -->
    <a href="{{url('admin')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"style="color:white;"><b></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
         
        
     
          <li>
           
            <a href="{{URL::to('/')}}"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>


    <div class="container-fluid user-profile">
  <div class="row">
            @foreach($data as $key=>$client)
    <div class="col-xs-12">
      <div class="well well-sm">
        <div class="user-profile-card">
          <div class="user-profile-header">
          </div>
   
          <div class=" text-center">
      

            <img style="width: 300px;height: 250px;" src="../../uploads/bloodcenter/{{$client->id}}/{{$client->image}}" style="width: 50px;" alt="">
          </div>
          <div class="row">
            <div style="padding-top: 50px;padding-right:30px;" class="text-center">
             
             
              <br />
            </div>
            <div style="padding-left:500px" class="panel-footer">
            <div class="container ">
             <p>
                <small>Name</small>
              {{$client->name}}
              </p>
              <p>
                <small>Place</small>
               {{$client->place}}
              </p>
               <p>
                <small>Email</small>
               {{$client->email}}
              </p>
                 <p>
                <small>Description</small>
               {{$client->description}}
              </p>
              <p>
                <small>Phone Number</small>
               {{$client->phoneno}}
              </p>
              <p>
              <div class="form-group">
                 <table border=1 style="width: 500px;height:100px" >

                  <thead border=1>
                                    <th>A+</th> 
                                     <th>A-</th>
                                    <th>B+</th>
                                     <th>B-</th> 
                                    <th>AB+</th>
                                     <th>AB-</th>
                                     <th>O+</th> 
                                     <th>O-</th>   
                  </thead>
                  <tbody border=1>
                    <tr>
                        <td>{{$client->A1}}</td>
                        <td>{{$client->A2}}</td>
                        <td>{{$client->B1}}</td>
                        <td>{{$client->B2}}</td>
                        <td>{{$client->AB1}}</td>
                        <td>{{$client->AB2}}</td>
                        <td>{{$client->O1}}</td>
                        <td>{{$client->O2}}</td>

                    </tr>
                  </tbody>
                    
                     </table>
              </div>
                      </p>

                      
              <p>
                <small>Status</small>
                 <?php if($client->status == 'ON'){ ?> 

  <a href="{{url('/status-updatescenter',$client->id)}}" class="btn btn-success">Present</a>

<?php }else{ ?> 

  <a href="{{url('/status-updatescenter',$client->id)}}" class="btn btn-danger">Absent</a>

<?php } ?>
              </p> <div  style="padding-right:30px;" class="panel-footer"><a href="{{ URL::to('blood/editcenters/'.$client->id) }}" data-original-title="Edit My Profile" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i  class="glyphicon glyphicon-edit"></i> Edit My Profile</a></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
     @endforeach
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
