@extends('store.storeLayout')
@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- STORE -->
            <div id="store" class="col-md-12">
                <!-- store products -->
                <div class="row">
                   @foreach($products as $product)
                        <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/{{$product->id}}/{{$product->image_name}}" alt="">
                                    
                                </div>
                                <div class="product-body">
                                    <p class="product-category" style="padding-top: 20px;"></p>
                                    <h3 class="product-name"><a href="{{route('user.view',['id'=>$product->id])}}">{{$product->name}}</a></h3>
                                   
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="{{route('user.view',['id'=>$product->id])}}">Click Here</a>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                        @endforeach





                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    @endsection
