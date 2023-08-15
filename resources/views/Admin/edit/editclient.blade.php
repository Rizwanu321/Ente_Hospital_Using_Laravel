@extends('backend.master')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Edit Clients</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add New Clients</li>
      </ol>
    </section>

    <section class="content">
       <div class="row">
       @if(Session::has('message'))
        <div class="col-sm-12">
                <div class="alert alert-success alert-dismissable">
                  {{Session::get('message')}}
                  <a class="close" data-dismiss="alert">&times;</a>
                </div>
        </div>
        @endif

        
        <div class="col-sm-6">
      <form action="{{url('updateClient')}}/{{$maindata->clid}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="tbl" value="{{encrypt('clients')}}">
      <input type="hidden" name="clid" value="{{$maindata->clid}}">
      <div class="form-group">
         
           <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
           <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
           @if($maindata->image)
           <p><img id="output" src="{{url('public/clients')}}/{{$maindata->image}}" width="200" /></p>
           @else
            <p><img id="output" width="200" /></p>
          @endif
      </div>
      <div class="form-group">
           <label for="">Link</label>
           <input type="text" name="link" value="{{$maindata->link}}"class="form-control">
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
        <button class="btn btn-success">Update Clients</button>
        <a class="btn btn-success"href="{{url('clients')}}">Go back</a>
      </div>
      </form>
      
      </div>
       <div class="col-sm-6">
           <p><strong>View All Clients</strong></p>
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th>SN</th>
                       <th>Image</th>
                        <th>Link</th>
                       <th>Status</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                   @if(count($data) >0)
                   @foreach($data as $key=>$client)
                   <tr>
                       <td>{{++$key}}</td>
                       <td><img src="{{url('public/clients')}}/{{$client->image}}" style="width: 50px;" alt=""></td>
                       <td>{{++$client->link}}</td>
                       <td>{{++$client->status}}</td>
                     
                       <td><a href="{{url('editClient')}}/{{$client->clid}}" class="btn btn-sm btn-success">
                           <i class="fa fa-edit"></i></a></td>
                   </tr>
                   @endforeach
                   @else
                   <tr>
                       <td colspan="4">No Clients Found</td>
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