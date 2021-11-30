@extends('client.header-footer')
@section('content')

<div class="container" style="padding-top: 150px; padding-bottom:150px">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="/frontend/img/checkout_success.png" alt="">
        </div>
        <div class="col-md-12 text-center">
            <a href="{{route('client.shop')}}" class="site-btn">Continue to shopping</a>
        </div>
    </div>
</div>

@endsection