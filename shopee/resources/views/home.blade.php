@extends('layouts.main')
@section('main')
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
            @foreach($products as $product)
                <div class="single-products-catagory clearfix">
                    <a href="{{route('product',['product_id'=>$product->id])}}">
                        <img
                            src="{{asset('img/shop-img/'.json_decode($product->pictures)[sizeof(json_decode($product->pictures))-1])}}"
                            alt="">
                        <div class="hover-content">
                            <div class="line"></div>
                            <p><?= $product->brand->name ?></p>
                            <h4><?= $product->name ?></h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
