@extends('layouts.main')
@section('main')
    <div class="cart-table-area section-padding-100">
        <form action="{{route('add_order')}}" method="get">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Checkout</h2>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="firstName" name="firstName" value=""
                                           placeholder="First Name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="lastName" name="lastName" value=""
                                           placeholder="Last Name" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <select class="w-100" id="country" name="country">
                                        <option value="ua">Ukraine</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ger">Germany</option>
                                        <option value="fra">France</option>
                                        <option value="ind">India</option>
                                        <option value="aus">Australia</option>
                                        <option value="bra">Brazil</option>
                                        <option value="usa">USA</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control mb-3" id="address" name="address"
                                           placeholder="Address" value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zip Code"
                                           value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="number" class="form-control" id="phone" name="phone" min="0"
                                           placeholder="Phone No" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10"
                                              placeholder="Leave a comment about your order"> </textarea>
                                </div>
                            </div>
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
                                <input type="submit" class="btn amado-btn w-100" value="Checkout"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
