@extends('Admin.layouts.defaults')
@section('abc')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Portfolio Categories</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{URL::to('Admin/portcats')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Portfolio Categories</li>
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
      <form style="color:aliceblue" action="{{URL::to('Admin/addPc')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="tbl" value="{{encrypt('portcats')}}">
      
      <div class="form-group">
           <label for="">Title</label>
           <input style="background-color:white;color:black" type="text" name="title"class="form-control">
      </div>
      <div class="form-group">
           <label for="">status</label>
           <select style="background-color:white;color:black" name="status" class="form-control">
            <option value="ON">ON </option>
            <option value="OFF">OFF</option>
           </select>
      </div>
   
  
      <div class="form-group">
        <button class="btn btn-success">Add Category</button>
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
                     
                       <td><a href="{{URL::to('Admin/editPc')}}/{{$client->pcid}}" class="btn btn-sm btn-success">
                           <i class="fa fa-edit"></i></a><a href="{{URL::to('Admin/deletePc')}}/{{$client->pcid}}"
                           class="btn btn-sm btn-danger">
                           <i class="fa fa-trash"></i></a></td>
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