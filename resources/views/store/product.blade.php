@extends('store.storeLayout')
@section('content')
<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/dist/jquery.validate.js')}}"></script>
 <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link type="text/css" rel="stylesheet" href="{{asset('css/style_for_quantity.css')}}" />

<style>
label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}


</style>

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 ">
                <div id="produc-main-img">
                    <div class="product-preview">
                        <img src="../uploads/products/{{$product->id}}/{{$product->image_name}}" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->


            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-price">{{$product->name}}</h2>

                    
                    <p class="product-available">{!!$product->description!!}</p>
                    <form method="post" id="order_form">
                    {{csrf_field()}}
                   
                        
                        </label>
                        
                        
                       
                          
                    </div>
                        <div id="for_error"></div>

                    
                    </form>
                    
                </div>
            </div>
            <!-- /Product details -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<div style="height:200px"></div>

<!--JQUERY Validation-->
<script>
	
    //////////////////////////////////////
    $(document).ready(function() {
		
		$("#order_form").validate({
			
            submitHandler: function (form) {
            if($('input[name=color]:checked').val()==undefined)
            {
                
            document.getElementById("for_error").innerHTML = "<label class='error' style=' '>Invalid Variation Input</label>";

            }
                else
                    {
                        return true;
                    }
                
         }
		});

		
	});
	
    $('.add').click(function () {
        
        $(this).prev().val(+$(this).prev().val() + 1);
        
    });
    $('.sub').click(function () {
            if ($(this).next().val() > 1) {
            $(this).next().val(+$(this).next().val() - 1);
            }
    });
    
	
   
	</script>
<!--/JQUERY Validation-->
<!-- /SECTION -->
@endsection
