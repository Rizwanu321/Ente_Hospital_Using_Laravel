@extends('Admin.master') @section('content')

<div class="content-wrapper" style="padding-right: 100px;">
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('admin.facility')}}">
                                < Back to List</a>
                                    <br>
                                    <br>
                                    <h4 class="card-title">Delete</h4>
                                    <br>
                                    <br>
                                    <h4 class="card-title">Edit Facility</h4>
                                    <br>
                                    <img id="imageHolder" src="../../../uploads/bloodcenter/{{$product->id}}/{{$product->image}}" alt="add image" height="300" width="300"
                                    />
                                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <br><br>
                                            <label >Center Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="Name" value="{{$product->name}}" disabled>
                                        </div>
                                              <div class="form-group">
                                            <br><br>
                                            <label >Email</label>
                                            <input type="text" class="form-control" id="Email" name="Email" value="{{$product->email}}" disabled>
                                        </div>
                                              <div class="form-group">
                                            <br><br>
                                            <label >Place</label>
                                            <input type="text" class="form-control" id="Place" name="Place" value="{{$product->place}}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Phone Number</label>
                                            <input type="textarea" class="form-control" name="Phonenumber" disabled>{{$product->phoneno}}</input>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Description</label>
                                            <input type="textarea" class="form-control" name="Description" value="{{$product->description}}" disabled></input>
                                        </div>
                                          <div class="form-group">
                                               <table border=1 style="font:large">
                                                   <th>A+</th> 
                                                    <th>A-</th>
                                                     <th>B+</th>
                                                     <th>B-</th> 
                                                    <th>AB+</th>
                                                     <th>AB-</th>
                                                     <th>O+</th> 
                                                     <th>O-</th> 
                                                   
                                                     <tr>
                                                         <td><input type="text" class="form-control" id="A+" name="A1"  value="{{$product->A1}}"  disabled></td>
                                                          <td><input type="text" class="form-control" id="A-" name="A2"  value="{{$product->A2}}" disabled></td>
                                                           <td><input type="text" class="form-control" id="B+" name="B1"  value="{{$product->B1}}" disabled></td>
                                                           <td><input type="text" class="form-control" id="B-" name="B2"  value="{{$product->B2}}" disabled></td>
                                                           <td><input type="text" class="form-control" id="AB+" name="AB1"  value="{{$product->AB1}}" disabled></td>
                                                           <td><input type="text" class="form-control" id="AB-" name="AB2"  value="{{$product->AB2}}" disabled></td>
                                                           <td><input type="text" class="form-control" id="O+" name="O1"  value="{{$product->O1}}" disabled></td>
                                                           <td><input type="text" class="form-control" id="O-" name="O2"  value="{{$product->O2}}" disabled></td>


                                                     </tr>
                                               </table>
                                           </div>

                                   
                                       
                                                  <label for="">Status</label>
           <select name="Status" class="form-control">
           <option>{{$product->status}}</option>
          
           </select>
      </div>
                                        <input type="submit" name="saveButton" class="btn btn-danger mr-2" id="updateButton" value="Delete" />
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

            </div>
        </div>
    </div>
</div>
<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageHolder').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $( document ).ready(function() {
        $("#myfile").change(function () {
        readURL(this);
    });

});
$( document ).ready(function() {
    var addedColor = document.querySelector("#color_list").value;
    var arrayOfColor = addedColor.split(',');
    var sizeList = document.querySelector("#sizeList").value;
    var arrayOfSize = sizeList.split(",");
    document.querySelector("#sizes").innerHTML = sizeComponent(arrayOfSize);
    //console.log(addedColor);
    onReadyColorList(arrayOfColor);       
});
function onReadyColorList(arrayOfColor){
    var addedColor = document.querySelector("#color_list").value;
    var arrayOfColor = addedColor.split(',');
    for(var i =0 ; i< arrayOfColor.length; i++){
        newColor = `<div style="height:25px;display:inline-block;margin:5px;width:25px!important;background-color:${arrayOfColor[i]}"></div>`;
        document.querySelector("#colors").innerHTML += newColor;
    }
}
function addColor(){
    var pickedColor = document.querySelector("#picker").value;
    newColor = `<div style="height:25px;display:inline-block;margin:5px;width:25px!important;background-color:${pickedColor}"></div>`;
    var addedColor = document.querySelector("#color_list").value;
    //console.log(addedColor);
    if (addColor != null){  
        var arrayOfColor = addedColor.split(',');
        if(!arrayOfColor.includes(pickedColor)){
            arrayOfColor.push(pickedColor);
            document.querySelector("#color_list").value = arrayOfColor.join(',');
            document.querySelector("#colors").innerHTML += newColor;
        }
        
        console.log(addedColor);
       
        
    } 
}
function sizeComponent(arrayOfSize){
    var s = ``;
    
    for(var i = 0 ; i < arrayOfSize.length; i ++){
        //alert(1);
        var temp = `<span style="border:2px solid #eee;padding:5px 5px;margin:4px">${arrayOfSize[i]}</span>`;
        console.log(temp);
        s += temp;
    }
   // console.log(s);
    return s;
}
function addSize(){
    var size = document.querySelector("#sizePicker").value;
    var sizeList = document.querySelector("#sizeList").value;
    if(size != ""){
        var arrayOfSize = sizeList.split(",");
        console.log(arrayOfSize);
            if(size != ""){
            if(!arrayOfSize.includes(size)){
                arrayOfSize.push(size);
                document.querySelector("#sizeList").value = arrayOfSize.join(",");
                document.querySelector("#sizes").innerHTML = sizeComponent(arrayOfSize);
                console.log(arrayOfSize.join(","));
            }
        }
    }
    //console.log(sizes);
}
</script>
@endsection
