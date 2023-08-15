@extends('Admin.master') @section('content')
<style>label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}</style>
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                    <a href="{{route('admin.Breakingnews')}}"> < Back to List</a>
                    <br><br>
                      <h4 class="card-title">Edit Breaking News</h4>
                      <br>
                      <form class="forms-sample" method="post"  id="cat_form">
                      {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Breaking News</label>
                          <input type="text" class="form-control" id="Name" name="Name" value="{{$brnews->description}}">
                        </div>
                        
                        <input  type="submit" name="updateButton"  class="btn btn-success mr-2" id="updateButton" value="UPDATE" />
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
    
 
<!--/JQUERY Validation-->
@endsection