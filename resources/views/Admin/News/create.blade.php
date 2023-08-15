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
                            <a style="color:green;" href="{{route('admin.newss')}}">
                                < Back to List</a>
                                    <br>
                                    <br>
                                    <h4 >Create News</h4>
                                    <br>
                                    <img  id="imageHolder" src="" alt="add image" height="300" width="300"/>
                                    <br>
                                    <input  type="file" name="inp_files" id="inp_files" multiple="multiple" >
                                    <br>
                                    <div id="empty_image"> </div>
                                    <form class="forms-sample" method="post"  id="product_form">
                                        {{csrf_field()}}
                                       
                                       
                                        <input id="inp_img" name="img" type="hidden" value="">
                                        <br><br>
                                        <div id="for_extension_error"></div>
                                        <div class="form-group">
                                            <label  >News Name*</label>
                                            <input type="text" class="form-control" id="Name" name="Name"  value="">
                                        </div>
                                        <div class="form-group">
                                            <label  for="Description">News Description*</label>
                                            <textarea type="textarea" class="form-control" id="Description" name="Description"></textarea>
                                        </div>
                                   
                                        
                                      
                                        
                                       
                                        
                                      
                                        <input type="submit" name="saveButton" class="btn btn-success mr-2" id="saveButton" value="Create"  />
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
    
    
    
  
function onReadyColorList(arrayOfColor){
    var addedColor = document.querySelector("#color_list").value;
    var arrayOfColor = addedColor.split(',');
    for(var i =0 ; i< arrayOfColor.length; i++){
        newColor = `<div style="height:25px;display:inline-block;margin:5px;width:25px!important;background-color:${arrayOfColor[i]}"></div>`;
        document.querySelector("#colors").innerHTML += newColor;
    }
}




</script>
    
    
<!--JQUERY Validation-->
<script>
	
	$(document).ready(function() {
		
        
        
		$("#product_form").validate({
            
			rules: {
              
                Name: "required",
                inp_files: "required",
                
                Description: "required",
                
                
                
                
				
				
				
				
			},
			messages: {
				
				Name: "No Name is Entered",
                inp_files:  "ERRRERRR",
                Description: "No Description is Entered",
                Category: "No Category is Selected",
                
				
				
			}
            
            
            
		});
        
                

		
	});
    
  
    
    
	</script>
<!--/JQUERY Validation-->    
@endsection
