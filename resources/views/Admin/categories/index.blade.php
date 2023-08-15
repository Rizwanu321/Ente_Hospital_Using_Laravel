@extends('Admin.master') @section('content')

<script src="{{asset('js/dist/jquery.validate.js')}}"></script>
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
                    <h4 class="card-title">Add Categories</h4>
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
                    <h4 class="card-title">Categories Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Name
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
                                @foreach($catlist as $cat)
                                <tr>
                                    <td>
                                        {{$cat->name}}
                                    </td>
                               
                                    <td>
                                        {{$cat->created_at}}
                                    </td>
                                    <td>
                                        {{$cat->updated_at}}
                                    </td>
                                    <td>
                                        <a href="{{route('admin.categories.edit', ['id' => $cat->id])}}" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.categories.delete', ['id' => $cat->id])}}"  class="btn btn-danger">Delete</a>
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

<!--JQUERY Validation-->
<script>
	
	$(document).ready(function() {
		
		$("#cat_form").validate({
			rules: {
				Name: "required",
			
				
				
				
			},
			messages: {
				Name: " Required",
		
                	
			}
		});

		
	});
	</script>
<!--/JQUERY Validation-->

@endsection
