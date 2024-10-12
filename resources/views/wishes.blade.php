@extends('layouts.main')
@section('main')
    <div class="amado_product_area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                @foreach($wishes as $wish)
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <div class="product-img">
                                    <?php $cover = json_decode($wish->product->pictures)[0] ?>
                                <img src={{ asset('img/shop-img/'.$cover)}} alt="">
                            </div>
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price"><?= $wish->product->price ?>$</p>
                                    <a href="{{route('product',['product_id'=>$wish->product->id])}}">
                                        <h6><?= $wish->product->name ?></h6>
                                    </a>
                                </div>
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        @for($i=0; $i<$wish->product->rate(); $i++)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor
                                    </div>
                                    <div class="cart">
                                        @if($wish->product->availability)
                                            @if(auth()->user())
                                                <a href="{{route('add_to_cart',['product_id'=>$wish->product->id])}}"
                                                   data-toggle="tooltip" data-placement="left"
                                                   title="Add to Cart"><img
                                                        src={{ asset('img/shop-img/cart.png')}} alt=""></a>
                                            @else
                                                <a href="{{route('register')}}" data-toggle="tooltip"
                                                   data-placement="left"
                                                   title="Add to Cart"><img
                                                        src={{ asset('img/shop-img/cart.png')}} alt=""></a>
                                            @endif
                                        @else
                                            <p data-toggle="tooltip" data-placement="left"
                                               title="Product is`nt available"><img
                                                    src={{ asset('img/shop-img/cart.png')}} alt=""></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
