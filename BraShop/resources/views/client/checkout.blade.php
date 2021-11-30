@extends('client.header-footer')
@section('content')
    
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="{{route('client.index')}}">Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="{{route('cart.checkout')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7 col-md-6">
                            <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? Click
                            here to enter your code</h6>

                            <h6 class="checkout__title">Receiver information</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Name</p>
                                        <input type="text" value="{{$auth->name}}" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone number</p>
                                        <input type="text" value="{{$auth->phone}}" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email</p>
                                        <input type="text" value="{{$auth->email}}" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Address</p>
                                        <input type="text" value="{{$auth->address}}" name="address">
                                    </div>
                                </div>
                            </div>                           
                            
                            <div class="checkout__input">
                                <p>Order notes</p>
                                <input type="text"
                                placeholder="Notes about your order, e.g. special notes for delivery." name="note">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="checkout__order">
                                <h6 class="order__title">Your order</h6>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    
                                    @foreach ($cart->items as $item)
                                    
                                    <li><samp></samp> {{$item['name']}} <span>{{number_format($item['price'] * $item['quantity']).' VND'}}</span></li>

                                    @endforeach
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Total product <span>{{$cart->total_qtt}}</span></li>
                                    <li>Total price <span>{{number_format($cart->total_price).' VND'}}</span></li>
                                </ul>
                                
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                            <small class="text-danger">{{session('qtt')}}</small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

@endsection