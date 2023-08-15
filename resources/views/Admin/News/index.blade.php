@extends('Admin.master') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">News Table <a class="btn btn-lg btn-success" style="float:right;color:white" href="{{route('admin.news.create')}}">+ Add News</a></h4>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Images
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                 
                               
                                    <th>
                                        Description
                                    </th>
                                                                     
                                    <th>
                                        Created At
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
                            @foreach($prdlist as $prd)
                                <tr>
                                    <td>
                                        <img src="../uploads/news/{{$prd->id}}/{{$prd->image_name}}" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       {{$prd->name}}
                                    </td>
                                    
                                  
                                    <td>
                                        {{$prd->description}}
                                    </td>
                                
                                     <td>
                                        {{$prd->created_at->diffForHumans()}}
                                    </td>
                                    <td><a href="{{route('admin.news.edit', ['id' => $prd->id])}}" class="btn btn-warning">Edit</a> </td>
                                     <td><a href="{{route('admin.news.delete', ['id' => $prd->id])}}"class="btn btn-danger">Delete</a></td>
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

