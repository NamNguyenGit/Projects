@extends('client.header-footer')
@section('content')

    <div class="container" style="padding-top: 150px; padding-bottom:150px">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Oops, something is wrong</h2>
                <a href="{{route('client.shop')}}"style="color: blue;">Continue to shopping</a>
            </div>
        </div>
    </div>
    
@endsection