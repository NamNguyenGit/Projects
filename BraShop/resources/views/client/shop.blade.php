@extends('client.header-footer')

@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Shop</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="{{route('client.index')}}">Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="shop__option">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="shop__option__search">
                        <form action="{{route('client.search')}}">
                            <select name="option">
                                <option value="1">Categories</option>
                                <option value="2">Colors</option>
                                <option value="3">Sizes</option>
                            </select>
                            <input type="text" placeholder="Search" name="key">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="shop__option__right">
                        <form action="{{route('client.filter')}}">
                            <select name="filter">
                                <option value="1">Default sorting</option>
                                <option value="2">A to Z</option>
                                <option value="3">Z to A</option>
                                <option value="4">Highest price</option>
                                <option value="5">Lowest price</option>
                            </select>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($product as $key => $products)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <a href="{{route('client.product',$products->id)}}">
                        <div class="product__item__pic set-bg" data-setbg="/frontend/img/product/{{$products->image}}">
                            <div class="product__label">
                                <span>{{$products->JoinCategory->name}}</span>
                            </div>
                        </div>
                    </a>
                    <div class="product__item__text">
                        <h6>{{$products->name}}</h6>
                        <div class="product__item__price">
                            @if($products->sale_price > 0)
                            <s>{{number_format($products->price)}}</s>
                            {{number_format($products->sale_price).' VND'}}
                            @else
                            {{number_format($products->price).' VND'}}
                            @endif
                        </div>
                        <div class="cart_add">
                            <a href="{{route('cart.add',$products->id)}}">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="shop__last__option">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="shop__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><span class="arrow_carrot-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="shop__last__text">
                        <p>Showing 1-9 of 10 results</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->

@endsection