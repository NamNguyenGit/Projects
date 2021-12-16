@extends('clients.header-footer')

@section('maincontent')
<div class="page-banner overlay-dark bg-image" style="background-image: url(/clients/aboutus/assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow ">

            <h1 class="font-weight-normal">About Us</h1>
        </div>
    </div>
</div>
<div class="page-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 py-3 wow ">

                <div class="card-service">
                    <a href="{{route('userservice.index')}}">
                        <div class="circle-shape bg-secondary text-white">
                            <span class=" mai-shield-checkmark"></span>
                        </div>
                    </a>
                    <a href="{{route('userservice.index')}}">
                        <p>Our Services</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 py-3 wow ">

                <div class="card-service">
                    <a href="{{route('userblog.index')}}">
                        <div class="circle-shape bg-primary text-white">
                            <span class="mai-chatbubbles-outline"></span>
                        </div>
                    </a>
                    <a href="{{route('userblog.index')}}">
                        <p>Our Blogs</p>
                    </a>
                </div>

            </div>
            <div class="col-md-4 py-3 wow ">

                <div class="card-service">
                    <a href="{{route('userappointment.index',0)}}">
                        <div class="circle-shape bg-accent text-white">
                            <span class="mai-basket"></span>
                        </div>
                    </a>
                    <a href="{{route('userappointment.index',0)}}">
                        <p>Make an appointment</p>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow ">
                <h1 class="text-center mb-3">Welcome to Miracle Clinic</h1>
                <div class="text-lg">
                    <p>PHC's patient care philosophy focuses on providing thorough, professional, affordable treatment to our patients through a team approach. Our eight teams of providers are each composed of physicians, clinical pharmacists, nurse practitioners, physician assistants, resident physicians, faculty, nurses, medical assistants, and behavioral health staff that are all familiar with each of their patient's medical history and current needs. This allows you as the patient the comfort of knowing that your health care needs are met in a timely manner.</p>
                    <p>The mission of Your Community Health Center is to provide access to high quality, compassionate, patient-centered healthcare to everyone regardless of financial, cultural or social barriers.Every patient and staff member will be treated with compassion, understanding and acceptance.A high-quality, customer service oriented environment will foster teamwork, employee satisfaction and patient loyalty.</p>
                </div>
            </div>
            <div class="col-lg-10 mt-5">
                <h1 class="text-center mb-5 wow ">Our Doctors</h1>
                <div class="row justify-content-center">
                    @foreach($doctor as $key => $doctors)
                    <div class="col-md-6 col-lg-4 wow ">
                        <div class="card-doctor">
                            <div class="header">
                                <img src="/img/{{$doctors->image}}" alt="">
                            </div>
                            <div class="body">
                                <p class="text-xl mb-0">Dr.{{$doctors->name}}</p>
                                <span class="text-sm text-grey">{{$doctors->joinspecialty->name}}</span>
                            </div>
                        </div>
                    </div>


                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pt-5 text-center">
                    <a href="{{route('userdoctor.index')}}"><button style="width: 15%;" type="button" class="btn btn-outline-success">See full list</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('css')

<link rel="stylesheet" href="/clients/aboutus/assets/css/maicons.css">
</link>

<link rel="stylesheet" href="/clients/aboutus/assets/css/bootstrap.css">
</link>

<link rel="stylesheet" href="/clients/aboutus/assets/vendor/owl-carousel/css/owl.carousel.css">
</link>

<link rel="stylesheet" href="/clients/aboutus/assets/vendor/animate/animate.css">
</link>

<link rel="stylesheet" href="/clients/aboutus/assets/css/theme.css">
</link>
@endsection
@section('js')
<script src="/clients/aboutus/assets/js/jquery-3.5.1.min.js"></script>

<script src="/clients/aboutus/assets/js/bootstrap.bundle.min.js"></script>

<script src="/clients/aboutus/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="/clients/aboutus/assets/vendor/wow/wow.min.js"></script>

<script src="/clients/aboutus/assets/js/theme.js"></script>
</script>
@endsection