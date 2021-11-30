@extends('client.header-footer')

@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Product detail</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="{{route('client.index')}}">Home</a>
                    <a href="{{route('client.shop')}}">Shop</a>
                    <span>{{$products->name}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product__details__img">
                    <div class="product__details__big__img">

                        <img class="big_img" src="/frontend/img/product/{{$products->image}}" alt="">
                    </div>
                    <div class="product__details__thumb">
                        <div class="pt__item active">
                            <img data-imgbigurl="/frontend/img/product/{{$products->image}}" src="/frontend/img/product/{{$products->image}}" alt="">
                        </div>
                        <div class="pt__item">
                            <img data-imgbigurl="/frontend/img/product/{{$products->image}}" src="/frontend/img/product/{{$products->image}}" alt="">
                        </div>
                        <div class="pt__item">
                            <img data-imgbigurl="/frontend/img/product/{{$products->image}}" src="/frontend/img/product/{{$products->image}}" alt="">
                        </div>
                        <div class="pt__item">
                            <img data-imgbigurl="/frontend/img/product/{{$products->image}}" src="/frontend/img/product/{{$products->image}}" alt="">
                        </div>
                        <div class="pt__item">
                            <img data-imgbigurl="/frontend/img/product/{{$products->image}}" src="/frontend/img/product/{{$products->image}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product__details__text">
                    <div class="product__label">{{$products->JoinCategory->name}}</div>
                    <h4>{{$products->name}}</h4>
                    <h5>
                        @if($products->sale_price > 0)
                        <s>{{number_format($products->price)}}</s>
                        {{number_format($products->sale_price).' VND'}}
                        @else
                        {{number_format($products->price).' VND'}}
                        @endif
                    </h5>
                    <p>{!!$products->content!!}</p>
                    <ul>
                        <li>Category: <span>{{$products->JoinCategory->name}}</span></li>
                        <li>Color: <span>{{$products->JoinColor->name}}</span></li>
                        <li>Size: <span>{{$products->JoinSize->name}}</span></li>
                    </ul>
                    <div class="product__details__option">
                        <a href="{{route('cart.add',$products->id)}}" class="primary-btn">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__tab">
            <div class="col-lg-12">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Additional information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Previews</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <p>{!!$products->content!!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <p>This delectable Strawberry Pie is an extraordinary treat filled with sweet and
                                    tasty chunks of delicious strawberries. Made with the freshest ingredients, one
                                    bite will send you to summertime. Each gift arrives in an elegant gift box and
                                    arrives with a greeting card of your choice that you can personalize online!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed unde maxime ipsum hic, vitae, aliquid voluptatem omnis tempora rerum delectus totam aspernatur. Dolorum reiciendis maiores velit ducimus. Impedit, cumque dolores.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Details Section End -->

<!-- Related Products Section Begin -->
<section class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="related__products__slider owl-carousel">

                @foreach ($relate as $key => $relates)
                <div class="col-lg-3">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/frontend/img/product/{{$relates->image}}">
                            <div class="product__label">
                                <span>{{$relates->JoinCategory->name}}</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">{{$relates->name}}</a></h6>
                            <div class="product__item__price">{{number_format($relates->price).' VND'}}</div>
                            <div class="cart_add">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- Related Products Section End -->

@endsection