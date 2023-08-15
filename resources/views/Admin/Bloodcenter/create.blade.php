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
                            <a style="color:green;" href="{{route('admin.contact.ph')}}">
                                < Back to List</a>
                                    <br>
                                    <br>
                                    <h4 >Create</h4>
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
                                            <label  >Center Name*</label>
                                            <input type="text" class="form-control" id="Name" name="Name"  value="">
                                        </div>
                                        <div class="form-group">
                                            <label  >Email*</label>
                                            <input type="text" class="form-control" id="Email" name="Email"  value="">
                                        </div>
                                        <div class="form-group">
                                            <label  >Place*</label>
                                            <input type="text" class="form-control" id="Place" name="Place"  value="">
                                        </div>
                                         <div class="form-group">
                                            <label  >Description*</label>
                                            <textarea type="text" class="form-control" id="Description" name="Description"  value=""></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label  for="Description">Phone Number*</label>
                                            <input type="textarea" class="form-control" id="Phonenumber" name="Phonenumber"></input>
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
                                                         <td><input type="text" class="form-control" id="A1" name="A1"  value=""></td>
                                                          <td><input type="text" class="form-control" id="A2" name="A2"  value=""></td>
                                                           <td><input type="text" class="form-control" id="B1" name="B1"  value=""></td>
                                                           <td><input type="text" class="form-control" id="B2" name="B2"  value=""></td>
                                                           <td><input type="text" class="form-control" id="AB1" name="AB1"  value=""></td>
                                                           <td><input type="text" class="form-control" id="AB2" name="AB2"  value=""></td>
                                                           <td><input type="text" class="form-control" id="O1" name="O1"  value=""></td>
                                                           <td><input type="text" class="form-control" id="O2" name="O2"  value=""></td>


                                                     </tr>
                                               </table>
                                           </div>

                                      
                                              <div class="form-group">
           <label for="">status</label>
           <select name="Status" class="form-control">
            <option value="ON">ON </option>
            <option value="OFF">OFF</option>
           </select>
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
             
                
                Phonenumber: "required",
                
                
                
                
				
				
				
				
			},
			messages: {
				
				Name: "No Name is Entered",
                inp_files:  "ERRRERRR",
                Phonenumber: "No phone number is Entered",
                Category: "No Category is Selected",
                
				
				
			}
            
            
            
		});
        
                

		
	});
    
  
    
    
	</script>
<!--/JQUERY Validation-->    
@endsection
