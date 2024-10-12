@extends('layouts.main')
@section('main')
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>Shopping Cart</h2>
                    </div>

                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cart_elements as $cart_element)
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="{{route('product',['product_id'=>$cart_element->product_id])}}"><img
                                                src="{{asset('img/shop-img/'.json_decode($cart_element->product->pictures)[0])}}"
                                                alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <a href="{{route('product',['product_id'=>$cart_element->product_id])}}">
                                            <h5><?= $cart_element->product->name ?></h5>
                                        </a>
                                    </td>
                                    <td class="price">
                                        <span>$<?= $cart_element->product->price ?></span>
                                    </td>
                                    <td class="qty">
                                        <div class="qty-btn d-flex">
                                            <form
                                                action="{{ route('add_to_cart', ['product_id'=>$cart_element->product->id]) }}"
                                                method="get">
                                                <p>Qty</p>
                                                <div class="quantity">
                                                    <input name="changeCountButton" type="submit" value="-"
                                                           class="qty-minus"/>
                                                    <input disabled class="qty-text" id="products_count" name="products_count"
                                                           value="<?=$cart_element->products_count?>"/>
                                                    <input name="changeCountButton" type="submit" value="+"
                                                           class="qty-plus"/>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>subtotal:</span> <span id="sub_total">$<?= $sub_total ?></span></li>
                            <li><span>delivery:</span> <span>
                                    @if($delivery==0)
                                        Free
                                    @else
                                        $<?= $delivery ?>
                                    @endif</span></li>
                            <li><span>total:</span> <span id="total">$<?= $sub_total + $delivery ?></span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <a href="{{route('checkout')}}" class="btn amado-btn w-100">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
