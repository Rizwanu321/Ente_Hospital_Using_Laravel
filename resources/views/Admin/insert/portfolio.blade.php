@extends('Admin.master')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Add/Edit/Delete Doctors</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add/Edit/Delete Doctors</li>
      </ol>
    </section>

    <section class="content" style="margin-left: -150px;">
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
        
      <form action="{{ URL::to('Admin/addPortfolio') }}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="tbl" value="{{encrypt('portfolios')}}">
      <div class="form-group">
           <label for="">Title</label>
           <input type="text" name="title" class="form-control">
      </div>
      <div class="form-group">
         
           <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
           <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
           <p><img id="output" width="200" /></p>
      </div>
     
      <div class="form-group">
           <label for="">Cateogory</label>
           <select name="category" class="form-control">
           @foreach($cats as $cat)
            <option value="{{$cat->title}}">{{$cat->title}} </option>
            @endforeach
            <option>Home</option>
           </select>
              <div class="form-group">
           <label for="">Email</label>
           <input type="text" name="email" class="form-control">
      </div>
       <div class="form-group">
           <label for="">Phone number</label>
           <input type="text" name="phonenumber" class="form-control">
      </div>
              <div class="form-group">
           <label for="">Qualification</label>
           <input type="text" name="qualification" class="form-control">
      </div>
       <div class="form-group">
           <label for="">Position</label>
           <input type="text" name="position" class="form-control">
      </div>
      </div>
          <div class="form-group">
           <label for="">status</label>
           <select name="status" class="form-control">
            <option value="ON">ON </option>
            <option value="OFF">OFF</option>
           </select>
      </div>
    
   
  
      <div class="form-group">
        <button class="btn btn-success">Add Post</button>
      </div>
      </form>
      </div>
       <div class="col-sm-12">
           <p><strong>View All Doctors</strong></p>
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th>SN</th>
                       <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                      <th>Email</th>
                         <th>Phone Number</th>
                        <th>Qualification</th>
                         <th>Position</th>
                             <th>Status</th>
                       <th>Action</th>
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
                        <td>{{$client->email}}</td>
                       <td>{{$client->phonenumber}}</td>
                      <td>{{$client->qualification}}</td>
                       <td>{{$client->position}}</td>
                           <td>{{$client->status}}</td>
                       <td><a href=" {{ URL::to('Admin/editportfolio/'.$client->pid) }}" class="btn btn-sm btn-success">
                           <i class="fa fa-edit"></i></a><a href=" {{ URL::to('Admin/deleteportfolio/'.$client->pid) }}"
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