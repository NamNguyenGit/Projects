@extends('client.header-footer')
@section('content')

<div class="container" style="padding-top: 150px; padding-bottom:150px">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="/frontend/img/register-success.png" width="200px">
        </div>
        <div class="col-md-12 text-center">
            <h2>Register successful</h2>

        </div>
        <div class="col-md-12 text-center pt-5">
            <a href="{{route('client.login')}}" class="site-btn">Continue to log in</a>
        </div>
    </div>
</div>

@endsection