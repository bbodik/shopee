@extends('layouts.main')
@section('main')
    <div class="shop_sidebar_area">
        <div class="widget catagory mb-50">
            <h6 class="widget-title mb-30">Catagories</h6>
            <div class="catagories-menu">
                <ul>
                    @foreach($categories as $category)
                        @if($category->name==$category_name)
                            <li class="active"><a
                                    href="{{route('shop', ['category_name'=>$category->name])}}"><?= $category->name ?></a>
                            </li>
                        @else
                            <li>
                                <a href="{{route('shop', ['category_name'=>$category->name])}}"><?= $category->name ?></a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <form action="{{route('shop', ['category_name'=>$category_name])}}">
            <div class="widget brands mb-50">
                <h6 class="widget-title mb-30">Brands</h6>
                <div class="widget-desc">
                    @foreach($brands as $brand)
                        <div class="form-check">
                            @if($checked_brands && in_array($brand->id, $checked_brands))
                                <input class="form-check-input" type="checkbox" checked value="<?=$brand->id?>"
                                       name="brand[]" id="<?=$brand->id?>">
                            @else
                                <input class="form-check-input" type="checkbox" value="<?=$brand->id?>" name="brand[]"
                                       id="<?=$brand->id?>">
                            @endif
                            <label class="form-check-label" for="<?=$brand->id?>"><?= $brand->name ?></label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="widget brands mb-50">
                <h6 class="widget-title mb-30">Sort By</h6>
                <div class="widget-desc">
                    <select id="sortBy" name="sortBy">
                        <option value="name" <?= $sort == 'name' ? 'selected' : "" ?>>Name</option>
                        <option value="created_at" <?= $sort == 'created_at' ? 'selected' : "" ?>>Newest</option>
                        <option value="price" <?= $sort == 'price' ? 'selected' : "" ?>>Price</option>
                    </select>
                </div>
                <div class="amado-btn-group mt-30 mb-100">
                    <input type="submit" class="btn amado-btn" value="Apply"/>
                </div>
            </div>
        </form>
    </div>
    <div class="amado_product_area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <div class="product-img">
                                    <?php $cover = json_decode($product->pictures)[0] ?>
                                <img src={{ asset('img/shop-img/'.$cover)}} alt="">
                            </div>
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price"><?= $product->price ?>$</p>
                                    <a href="{{route('product',['product_id'=>$product->id])}}">
                                        <h6><?= $product->name ?></h6>
                                    </a>
                                </div>
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        @for($i=0; $i<$product->rate(); $i++)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor
                                    </div>
                                    <div class="cart">
                                        @if($product->availability)
                                            @if(auth()->user())
                                                <a href="{{route('add_to_cart',['product_id'=>$product->id])}}"
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
        <div class="row">
            <div class="col-12">
                <nav aria-label="navigation">
                    <ul class="pagination justify-content-center mt-50">
                        <?= $products->onEachSide(2)->links('vendor.pagination.custom') ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
