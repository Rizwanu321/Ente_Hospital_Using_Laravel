@extends('store.storeLayout') 
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">MEDICINES</h3>

                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">


                        @foreach($products as $product)
                        <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/{{$product->id}}/{{$product->image_name}}" alt="">
                                    
                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{$product->category->name}}</p>
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
                    
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
    </div>
@endsection