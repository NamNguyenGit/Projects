@extends('client.header-footer')

@section('content')

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">

        @foreach ($banner as $key => $banners)
        <div class="hero__item set-bg" data-setbg="/frontend/img/banner/{{$banners->image}}">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero__text">
                            <h2>{{$banners->content}}</h2>
                            <a href="{{route('client.shop')}}" class="primary-btn">{{$banners->name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>
<!-- Hero Section End -->





<!-- Instagram Section Begin -->
<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="instagram__text">
                    <div class="section-title">
                        <span>Follow us on instagram</span>
                        <h2>Sweet moments are saved as memories.</h2>
                    </div>
                    <h5><i class="fa fa-instagram"></i> @etsyshop</h5>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">

                    @foreach ($instagram1 as $key => $instagrams)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic">
                            <img src="/frontend/img/product/{{$instagrams->image}}" alt="">
                        </div>
                    </div>
                    @endforeach
                    @foreach ($instagram2 as $key => $instagrams)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic middle__pic">
                            <img src="/frontend/img/product/{{$instagrams->image}}" alt="">
                        </div>
                    </div>
                    @endforeach
                    @foreach ($instagram3 as $key => $instagrams)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic">
                            <img src="/frontend/img/product/{{$instagrams->image}}" alt="">
                        </div>
                    </div>
                    @endforeach
                    @foreach ($instagram4 as $key => $instagrams)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic">
                            <img src="/frontend/img/product/{{$instagrams->image}}" alt="">
                        </div>
                    </div>
                    @endforeach
                    @foreach ($instagram5 as $key => $instagrams)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic middle__pic">
                            <img src="/frontend/img/product/{{$instagrams->image}}" alt="">
                        </div>
                    </div>
                    @endforeach
                    @foreach ($instagram6 as $key => $instagrams)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic">
                            <img src="/frontend/img/product/{{$instagrams->image}}" alt="">
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

@endsection