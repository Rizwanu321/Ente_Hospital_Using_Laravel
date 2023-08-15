@extends('Admin.master') @section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                    <a href="{{route('admin.categories')}}"> < Back to List</a>
                    <br><br>
                      <h4 class="card-title">Delete Breaking News</h4>
                      <br>
                      <form class="forms-sample" method="post">
                      {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Breaking News</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="Name" value="{{$brnews->description}}" disabled>
                        </div>
                       
                        <input  type="submit" name="updateButton"  class="btn btn-danger mr-2" id="updateButton" value="DELETE" />
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
@endsection