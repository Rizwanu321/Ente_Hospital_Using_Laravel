@extends('Admin.master')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Edit Categories</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Categories</li>
      </ol>
    </section>

    <section class="content">
       <div class="row">
       @if(Session::has('message'))
        <div class="col-sm-12" style="margin-left: -150px;">
                <div class="alert alert-success alert-dismissable">
                  {{Session::get('message')}}
                  <a class="close" data-dismiss="alert">&times;</a>
                </div>
        </div>
        @endif

        
        <div class="col-sm-6" style="margin-left: -150px;">
       
      <form action=" {{ URL::to('Admin/updatePortfolio/'.$maindata->pcid) }}"method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="tbl" value="{{encrypt('portcats')}}">
      <input type="hidden" name="pcid" value="{{$maindata->pcid}}">
      <div class="form-group">
           <label for="">Title</label>
           <input type="text" name="title"value="{{$maindata->title}}" class="form-control">
      </div>
      
    <div class="form-group">
           <label for="">status</label>
           <select name="status" class="form-control">
           <option>{{$maindata->status}}</option>
           @if($maindata->status == 'OFF')
            <option>ON </option>
            @else
            <option>OFF</option>
            @endif
           </select>
      </div>
         <div class="form-group">
           <label for="">Descrirtion</label>
           <textarea  type="text" name="description"value="{{$maindata->description}}" class="form-control"></textarea>
      </div>
  
      <div class="form-group">
        <button class="btn btn-success">Update Category</button>
        <a class="btn btn-success"href="{{URL::to('Admin/portcats')}}">Go back</a>
      </div>
      </form>
      </div>
       <div class="col-sm-6">
           <p><strong>View All Clients</strong></p>
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th>SN</th>
                       
                        <th>Title</th>
                       <th>Status</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                   @if(count($data) >0)
                   @foreach($data as $key=>$client)
                   <tr>
                       <td>{{++$key}}</td>
                       
                       <td>{{$client->title}}</td>
                       <td>{{$client->status}}</td>
                     
                       <td><a href="{{ URL::to('Admin/editpc/'.$client->pcid) }}" class="btn btn-sm btn-success">
                           <i class="fa fa-edit"></i></a>
                   </tr>
                   @endforeach
                   @else
                   <tr>
                       <td colspan="4">No categories Found</td>
                   </tr>
                   @endif
               </tbody>
           </table>
       </div>
      </div>
    </section>
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

@stop