@extends('client.header-footer')
@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Shopping cart</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="{{route('client.index')}}">Home</a>
                    <span>Shopping cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart->items as $item)
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="/frontend//img/product/{{$item['image']}}" width="100px">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>{{$item['name']}}</h6>
                                        <h5>{{number_format($item['price']).' VND'}}</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <form action="{{route('cart.update',$item['id'])}}">
                                        @csrf
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{$item['quantity']}}" name="quantity">
                                            </div>
                                        </div>
                                        <button type="submit" class="site-btn">Save</button>
                                    </form>
                                </td>
                                <td class="cart__price">{{number_format($item['price'] * $item['quantity']).' VND'}}</td>
                                <td class="cart__close"><a href="{{route('cart.remove',$item['id'])}}"><span class="icon_close"></span></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="{{route('client.shop')}}">Continue Shopping</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="{{route('cart.clear')}}"><i class="fa fa-spinner"></i>Clear cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Total product <span>{{$cart->total_qtt}}</span></li>
                        <li>Total price <span>{{number_format($cart->total_price).' VND'}}</span></li>
                    </ul>
                    <a href="{{route('cart.checkout')}}" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->

@endsection