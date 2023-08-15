@extends('Admin.master') @section('content')
<style>label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}</style>
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
                                   
                                    <h4 class="card-title">Edit Center</h4>
                                    <br>
                                   <br>
                                    <img id="imageHolder" src="../../../uploads/bloodcenter/{{$product->id}}/{{$product->image}}" alt="add image" height="300" width="300"/>
                                    <br>
                                     <input  type="file" name="inp_files" id="inp_files" multiple="multiple" >
                                    <br>
                                    <form class="forms-sample" method="post" enctype="multipart/form-data">

                                        {{csrf_field()}}
                                      <input id="inp_img" name="img" type="hidden" value="">
                                        <div class="form-group">
                                            <label >Center Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="Name" value="{{$product->name}}">
                                        </div>
                                         </div>
                                              <div class="form-group">
                                            <br><br>
                                            <label >Email</label>
                                            <input type="text" class="form-control" id="Email" name="Email" value="{{$product->email}}" >
                                        </div>
                                              <div class="form-group">
                                            <br><br>
                                            <label >Place</label>
                                            <input type="text" class="form-control" id="Place" name="Place" value="{{$product->place}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Phone Number</label>
                                            <input type="textarea" class="form-control" name="Phonenumber" value="{{$product->phoneno}}"></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Description</label>
                                            <input type="textarea" class="form-control" name="Description" value="{{$product->description}}"></input>
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
                                                         <td><input type="text" class="form-control" id="A1" name="A1"  value="{{$product->A1}}"  ></td>
                                                          <td><input type="text" class="form-control" id="A-" name="A2"  value="{{$product->B2}}" ></td>
                                                           <td><input type="text" class="form-control" id="B+" name="B1"  value="{{$product->B1}}" ></td>
                                                           <td><input type="text" class="form-control" id="B-" name="B2"  value="{{$product->B2}}" ></td>
                                                           <td><input type="text" class="form-control" id="AB+" name="AB1"  value="{{$product->AB1}}" ></td>
                                                           <td><input type="text" class="form-control" id="AB-" name="AB2"  value="{{$product->AB2}}"></td>
                                                           <td><input type="text" class="form-control" id="O+" name="O1"  value="{{$product->O1}}"></td>
                                                           <td><input type="text" class="form-control" id="O-" name="O2"  value="{{$product->O2}}"></td>


                                                     </tr>
                                               </table>
                                           </div>

                                          <div class="form-group">
           <label for="">Status</label>
           <select name="Status" class="form-control">
           <option>{{$product->status}}</option>
           @if($product->status == 'OFF')
            <option>ON </option>
            @else
            <option>OFF</option>
            @endif
           </select>
      </div>
                                    
                                       
                                        <input type="submit" name="saveButton" class="btn btn-success mr-2" id="updateButton" value="UPDATE" />
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
 
  function fileChange(e) {
 
     document.getElementById('inp_img').value = '';
 
     for (var i = 0; i < e.target.files.length; i++) { 
     
        var file = e.target.files[i];
 
        if (file.type == "image/jpeg" || file.type == "image/png") {
 
           var reader = new FileReader();  
           reader.onload = function(readerEvent) {
 
              var image = new Image();
              image.onload = function(imageEvent) { 
 
                 var max_size = 600;
                 var w = image.width;
                 var h = image.height;
                   
                 if (w > h) {  if (w > max_size) { h*=max_size/w; w=max_size; }
                 } else     {  if (h > max_size) { w*=max_size/h; h=max_size; } }
               
                 var canvas = document.createElement('canvas');
                 canvas.width = w;
                 canvas.height = h;
                 canvas.getContext('2d').drawImage(image, 0, 0, w, h);
                 if (file.type == "image/jpeg") {
                    var dataURL = canvas.toDataURL("image/jpeg", 1.0);
                 } else {
                    var dataURL = canvas.toDataURL("image/png");    
                 }
                 document.getElementById('inp_img').value += dataURL + '|';
              }
              image.src = readerEvent.target.result;
           }
           reader.readAsDataURL(file);
           
            readURL(this);

        } else {
           document.getElementById('inp_files').value = ''; 
           alert('Please only select images in JPG or PNG format.');   
           return false;
        }
     }
 
  }
 
  document.getElementById('inp_files').addEventListener('change', fileChange, false); 
         
</script>     
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
    var addedColor = document.querySelector("#color_list").value;
    var arrayOfColor = addedColor.split(',');
    
    
    
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

</script>
    

@endsection
