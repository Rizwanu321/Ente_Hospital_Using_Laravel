@extends('Admin.master') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">contact Table <a class="btn btn-lg btn-success" style="float:right;color:white" href="{{route('admin.contact.create')}}">+ Add Facility</a></h4>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>
                                      Department Name
                                    </th>
                                 
                               
                                    <th>
                                        Phone Number
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
                                        {{$prd->phoneno}}
                                    </td>
                                
                                    
                                    <td><a href="{{route('admin.contact.edit', ['id' => $prd->id])}}" class="btn btn-warning">Edit</a> </td>
                                     <td><a href="{{route('admin.contact.delete', ['id' => $prd->id])}}"class="btn btn-danger">Delete</a></td>
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

