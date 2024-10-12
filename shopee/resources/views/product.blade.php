@extends('layouts.main')

@section('main')
    <div class="single-product-area section-padding-100 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach(json_decode($product->pictures)  as $picture)
                                    @if(array_search($picture, json_decode($product->pictures))==0)
                                        <li class="active" data-target="#product_details_slider" data-slide-to="0"
                                            style="background-image: url({{ asset('img/shop-img/'.$picture)}});">
                                        </li>
                                    @else
                                        <li data-target="#product_details_slider"
                                            data-slide-to="<?=array_search($picture, json_decode($product->pictures))?>"
                                            style="background-image: url({{ asset('img/shop-img/'.$picture)}});">
                                        </li>
                                    @endif
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach(json_decode($product->pictures)  as $picture)
                                    @if(array_search($picture, json_decode($product->pictures) )==0)
                                        <div class="carousel-item active">
                                            <a class="gallery_img" href="{{ asset('img/shop-img/'.$picture)}}">
                                                <img class="d-block w-100" src="{{ asset('img/shop-img/'.$picture)}}"
                                                     alt="First slide">
                                            </a>
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <a class="gallery_img" href="{{ asset('img/shop-img/'.$picture)}}">
                                                <img class="d-block w-100" src="{{ asset('img/shop-img/'.$picture)}}"
                                                     alt="First slide">
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single_product_desc">
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">$<?= $product->price ?></p>
                            <a href="{{route('product',['product_id'=>$product->id])}}">
                                <h6><?= $product->name ?></h6>
                            </a>
                            <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                <div class="ratings">
                                    @for($i=0; $i<$product->rate(); $i++)
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    @endfor
                                </div>
                                @if($wish)
                                    <a href="{{route('add_to_wish',['product_id'=>$product->id])}}">
                                        <h6 class="fa fa-heart" aria-hidden="true"></h6>
                                    </a>
                                @else
                                    <a href="{{route('add_to_wish',['product_id'=>$product->id])}}">
                                        <h6 class="fa fa-heart-o" aria-hidden="true"></h6>
                                    </a>
                                @endif
                            </div>
                            <p class="avaibility">
                                @if($product->availability)
                                    <i class="fa fa-circle" style="color: #20d34a;"></i>
                                    In Stock
                                @else
                                    <i class="fa fa-circle" style="color: #d32020;"></i>
                                    No In Stock
                                @endif
                            </p>
                        </div>

                        <div class="short_overview my-5">
                            <p><?= $product->description ?></p>
                        </div>

                        <form class="cart clearfix"
                              action="{{route('add_to_cart', ['product_id'=>$product->id])}}">
                            <div class="cart-btn d-flex mb-50">
                                <p>Qty</p>
                                <div class="quantity">
                                    <span class="qty-minus"
                                          onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i
                                            class="fa fa-caret-down" aria-hidden="true"></i></span>
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="300"
                                           name="products_count" value="1">
                                    <span class="qty-plus"
                                          onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i
                                            class="fa fa-caret-up" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            @if($product->availability)
                                <input type="submit" name="addtocart" class="btn amado-btn" value=" Add to cart"/>
                            @else
                                <input disabled type="submit" name="addtocart" class="btn amado-btn"
                                       value=" Add to cart"/>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
