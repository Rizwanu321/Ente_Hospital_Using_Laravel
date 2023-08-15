@extends('Admin.master') @section('content')


<style>label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}</style>









   <section class="content">


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Breaking News</h4>
                    <form  class="forms-sample" method="post" id="cat_form">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Name" id="Name" >
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                    </form>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $err)
                        <tr>
                            <td>
                                <li>{{$err}}</li>
                            </td>
                        </tr>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">News Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Breaking News
                                    </th>
                                 
                                    <th>
                                        Created At
                                    </th>
                                    <th>
                                        Updated At
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Update
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brnews as $brn)
                                <tr>
                                    <td>
                                        {{$brn->description}}
                                    </td>
                               
                                    <td>
                                        {{$brn->created_at->diffForHumans()}}
                                    </td>
                                    <td>
                                        {{$brn->updated_at->diffForHumans()}}
                                    </td>
                                    <td>
                                        <a href="{{route('admin.Breakingnews.edit', ['id' => $brn->id])}}" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.Breakingnews.delete', ['id' => $brn->id])}}"  class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

   </section>



@endsection
