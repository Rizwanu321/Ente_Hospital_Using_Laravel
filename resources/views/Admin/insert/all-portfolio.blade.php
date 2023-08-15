@extends('Admin.master')
@section('content')
<link rel="stylesheet" href="{{ asset('Admin/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('Admin/css/responsive.css')}}">
            

  <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>Dashboard Doctors</h2>
                                                
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>All Doctors</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Doctors</li>
      </ol>
    </section>

    <section class="content" style="margin-left: -150px;">
       <div class="row">

      
      <div class="col-md-4">
        <form action="/search" method="get">
               <div class="form-group">
                  <input style="background-color: white;color:black" type="search" name="search" class="form-control">
                  <span class="form-group-btn">
                  <button type="submit" class="btn btn-primary">Search</button>
                  
                  </span>
               </div>
        </form>
      </div>
         
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th>SN</th>
                       <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                         <th>Quaification</th>
                          <th>Position</th>
                       <th>Status</th>
                      
                   </tr>
               </thead>
               <tbody>
                   @if(count($data) >0)
                   @foreach($data as $key=>$client)
                   <tr>
                       <td>{{++$key}}</td>
                      <td><img src="{{url('portfolios')}}/{{$client->image}}" style="width: 50px;" alt=""></td>
                       <td>{{$client->title}}</td>
                      <td>{{$client->category}}</td>
                        <td>{{$client->qualification}}</td>
                          <td>{{$client->position}}</td>
                       <td>
                  
                           <?php if($client->status == 'ON'){ ?> 

  <a href="{{url('/status-update',$client->pid)}}" class="btn btn-success">Present</a>

<?php }else{ ?> 

  <a href="{{url('/status-update',$client->pid)}}" class="btn btn-danger">Absent</a>

<?php } ?>
                       </td>
                       
                     
                       
                   </tr>
                   @endforeach
                   @else
                   <tr>
                       <td colspan="4">No details Found</td>
                   </tr>
                   @endif
               </tbody>
           
           </table>
    
    </section>
  </div>
    <script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script src="{{url('resources/views/backend/ckeditor/ckeditor.js')}}"></script>
<style>
  .table{
    background: #333;
    color: #fff;
  }

</style>
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('pid'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>

@stop