<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GOVERNMENT HOSPITAL </title>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="assets/images/icons/fav-icon.gif" type="image/png" sizes="16x16">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Bootstrap -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/scroller/owl.carousel.css')}}">
    <!--vertical menu-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/menu/menu_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

>
</head>
<body>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="padding-left: 500px;">
        Edit Doctors
        
      </h1>
     
    </section>

    <section class="content" style="margin-left: 150px;">
       <div class="row">
       @if(Session::has('message'))
        <div class="col-sm-12">
                <div class="alert alert-success alert-dismissable">
                  {{Session::get('message')}}
                  <a class="close" data-dismiss="alert">&times;</a>
                </div>
        </div>
        @endif


        
        <div style="margin-left: 200px;" class="col-md-6">
      <form action="{{ URL::to('doctor/updatedoctor/'.$maindata->pid) }}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="tbl" value="{{encrypt('portfolios')}}">
      <input type="hidden" name="pid" value="{{$maindata->pid}}">
      <div class="form-group">
           <label for=""> Name</label>
           <input type="text" name="title" value="{{$maindata->title}}" class="form-control">
      </div>
      <div class="form-group">
         
           <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
           <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
            @if($maindata->image)
           <p><img id="output" src="{{url('portfolios')}}/{{$maindata->image}}" width="200" /></p>
           @else
            <p><img id="output" width="200" /></p>
          @endif
      </div>
     
     
      <div class="form-group">
           <label for="">Cateogory</label>
           <select name="category" class="form-control">
      
            <option value="{{$maindata->category}}">{{$maindata->category}} </option>
           @foreach($cats as $cat)
            <option value="{{$cat->title}}">{{$cat->title}} </option>
           @endforeach
           </select>
      </div>
        <div class="form-group">
           <label for="">Email</label>
           <input type="text" name="email" value="{{$maindata->email}}" class="form-control">
      </div>
        <div class="form-group">
           <label for="">Phone Number</label>
           <input type="text" name="phonenumber" value="{{$maindata->phonenumber}}" class="form-control">
      </div>
        <div class="form-group">
           <label for="">Qualification</label>
           <input type="text" name="qualification" value="{{$maindata->qualification}}" class="form-control">
      </div>
        <div class="form-group">
           <label for="">Position</label>
           <input type="text" name="position" value="{{$maindata->position}}" class="form-control">
      </div>
      <div class="form-group">
           <label for="">status</label>
           <select name="status" class="form-control">
           <option>{{$maindata->status}}</option>
           @if($maindata->status == 'OFF')
            <option>ON </option>
            @else
            <option>OFF</option>
            @endif
           </select>
      </div>
   
  
      <div class="form-group">
        <button class="btn btn-success">Update Post</button>
       
          <a class="btn btn-success"href="{{ URL::to('doctorlogins/'.$maindata->pid) }}">Go back</a>
      </div>
      </form>
      </div>
     
       
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
  
</body>
</html>