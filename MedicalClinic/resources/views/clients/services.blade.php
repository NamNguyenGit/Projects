@extends('clients.header-footer')

@section('maincontent')
<div class="page-banner overlay-dark bg-image" style="background-image: url(/clients/services/assets/img/bg_services.jpg); height: 180px;">
    <div class="banner-section">
        <div class="container text-center wow ">
            <h1 class="font-weight-normal">Services</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row p-2">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <form action="{{route('user.searchservice')}}">
                <select name="option" style="width: 30%; height: 30px; margin-top: 10px;">
                    <option value="1">Name</option>
                    <option value="2">Price</option>
                    <option value="3">Benefit</option>
                </select>
                <input type="text" placeholder="Search" name="key" style="height: 30px; width: 50%; margin-top: 10px;">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($service as $key => $services)
        <div class="col-md-4 pb-5">
            <form action="{{route('userservice.index')}}" method="POST" style="margin: 0; padding: 0;">
                @csrf

                <div class="" style="background-color: #E6E6E6;">
                    <div class=" text-center " style="height: 100px;">
                        <h1>{{$services->name}}</h1>
                    </div>
                    <div class="">
                        <h4>Price: {{$services->price}}$/month</h4>
                    </div>
                    <div class=" pt-2" style="height: 200px;">
                        <h5>Benefit: {{$services->benefit}}</h5>
                    </div>
                    <div class=" ">
                        <a href="{{route('userappointment.index',$services->id)}}" class="btn btn-block btn-large">Choose Plan</a>
                    </div>
                </div>
            </form>
        </div>

        @endforeach
    </div>
</div>
<div class="row-fluid">

    @endsection

    @section('css')
    <link rel="stylesheet" href="/clients/services/assets/css/bootstrap.min.css">
    </link>
    <link rel="stylesheet" href="/clients/services/assets/css/style.css">
    </link>
    <link rel="stylesheet" href="/clients/services/assets/vendor/wow/wow.mim.js">
    </link>
    @endsection
    @section('js')
    <script src="/clients/services/assets/js/jquery.min.js"></script>
    <script src="/clients/services/assets/js/bootstrap.min.js"></script>
    @endsection