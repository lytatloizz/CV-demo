@extends('layout')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom" style="z-index: -1;">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Shop Cart</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Shop Cart</p>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Image</th>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @foreach($carts as $cart)
                    <tr>
                        <td class="align-middle"><img src="{{asset('img/'.$cart->cart_img)}}" alt="" style="width: 50px;"></td>
                        <td class="align-middle"><a href="{{ route('detail',$cart->product_id) }}" class="product_name">{{$cart->cart_name}}</a></td>
                        <td class="align-middle ">$<span class="cart-price">{{exchange_price($cart->cart_price)}}</span></td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm border-1 text-center cart-qty" value="{{$cart->cart_qty}}">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">$<span class="total-item">{{exchange_price($cart->cart_price) * $cart->cart_qty}}</span></td>
                        <td class="align-middle"><a href="{{route('DeleteCart', $cart->cart_id)}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <!-- <form class="mb-30" action="">
                <div class="input-group">
                    <input type="text" class="form-control border-1 p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form> -->
            <form action="{{ route('billCreate') }}" method="POST">
                @csrf
                <h5 class="position-relative text-uppercase mb-3 pt-4"><span class=" pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <input type="text" class="form-control border-0 text-right total-sum col-md-2 bg-transparent" value="0" disabled>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <input type="text" class="form-control border-0 text-right col-md-2 bg-transparent" value="$1" disabled>
                        </div>
                    </div>
                    <input type="hidden" name="product_qty" value="0">
                    <input type="hidden" name="product_description" value="">
                    <input type="hidden" name="product_price" value="0">
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <input type="text" class="form-control border-0 text-right col-md-2 bg-transparent total-all" value="0" disabled>
                        </div>
                        <input type="submit" class="btn btn-block btn-info font-weight-bold my-3 py-3 btn-pay-now" value="Pay now" disabled>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Cart End -->
<script src="{{ asset('js/bills-total.js') }}"></script>
@endsection