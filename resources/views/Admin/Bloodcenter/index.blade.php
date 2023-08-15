@extends('Admin.master') @section('content')
<div class="content-wrapper" >
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blood Center Table <a class="btn btn-lg btn-success" style="float:right;color:white" href="{{route('admin.bloodcontact.create')}}">+ Add Center</a></h4>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>
                                      Center Name
                                    </th>
                                      <th>
                                     Email
                                    </th> 
                                      <th>
                                      Place
                                    </th> 
                                     
                               
                                    <th>
                                        Phone Number
                                    </th>
                                    <th>
                                      Image
                                    </th>   
                                    
                                     <th>A+</th> 
                                     <th>A-</th>
                                    <th>B+</th>
                                     <th>B-</th> 
                                    <th>AB+</th>
                                     <th>AB-</th>
                                     <th>O+</th> 
                                     <th>O-</th>   
                                    <th>
                                     Status
                                    </th>                          
                                
                                    <th>
                                        Update
                                    </th>
                                       <th>
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($port as $prd)
                                <tr>
                                   
                                    <td>
                                       {{$prd->name}}
                                    </td>
                                     <td>
                                       {{$prd->email}}
                                    </td>
                                     <td>
                                       {{$prd->place}}
                                    </td>
                                  
                                    <td>
                                        {{$prd->phoneno}}
                                    </td>
                                    <td>
                                       <img src="../uploads/bloodcenter/{{$prd->id}}/{{$prd->image}}" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    
                                  <td>{{$prd->A1}}</td>
                                  <td>{{$prd->A2}}</td>
                                  <td>{{$prd->B1}}</td>
                                  <td>{{$prd->B2}}</td>
                                  <td>{{$prd->AB1}}</td>
                                  <td>{{$prd->AB2}}</td>
                                  <td>{{$prd->O1}}</td>
                                  <td>{{$prd->O2}}</td>
                                    <td>
                                        {{$prd->status}}
                                    </td>
                                
                                    
                                    <td><a href="{{route('admin.bloodcontact.edit', ['id' => $prd->id])}}" class="btn btn-warning">Edit</a> </td>
                                     <td><a href="{{route('admin.bloodcontact.delete', ['id' => $prd->id])}}"class="btn btn-danger">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

