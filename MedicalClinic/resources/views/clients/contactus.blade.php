@extends('clients.header-footer')

@section('maincontent')
<div class="page-banner overlay-dark bg-image" style="background-image: url(/clients/aboutus/assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow ">

            <h1 class="font-weight-normal">Contact</h1>
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow ">Get in Touch</h1>

        <form method="POST" action="{{route('usercontactus.index')}}" class="contact-form mt-5">
            @csrf
            <div class="row mb-3">
                <div class="col-sm-6 py-2 wow ">
                    <label for="fullName">Name</label>
                    <input name="name" type="text" id="name" class="form-control" placeholder="Full name..">
                    @error('name')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-sm-6 py-2 wow ">
                    <label for="emailAddress">Email</label>
                    <input name="email" type="text" id="emailAddress" class="form-control" placeholder="Email address..">
                    @error('email')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-12 py-2 wow ">
                    <label for="message">Message</label>
                    <textarea name="messages" id="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
                    @error('messages')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary wow ">Send Message</button>
        </form>
    </div>
</div>
@endsection

@section('css')


<link rel="stylesheet" href="/clients/contactus/toastr/toastr.min.css">
<link rel="stylesheet" href="/clients/contactus/assets/css/maicons.css">
<link rel="stylesheet" href="/clients/contactus/assets/css/bootstrap.css">
<link rel="stylesheet" href="/clients/contactus/assets/vendor/owl-carousel/css/owl.carousel.css">
<link rel="stylesheet" href="/clients/contactus/assets/vendor/animate/animate.css">
<link rel="stylesheet" href="/clients/contactus/assets/css/theme.css">
</link>
@endsection
@section('js')
<script src="/clients/contactus/assets/js/jquery-3.5.1.min.js"></script>
<script src="/clients/contactus/assets/js/bootstrap.bundle.min.js"></script>
<script src="/clients/contactus/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="/clients/contactus/assets/vendor/wow/wow.min.js"></script>
<script src="/clients/contactus/assets/js/theme.js"></script>
<script src="/clients/contactus/toastr/toastr.min.js"></script>
<script>
    toastr.options = {
        "debug": false,
        "positionClass": "toast-top-center",
        "fadeIn": 300,
        "fadeOut": 1000,
        "timeOut": 3000,
        "extendedTimeOut": 1000
    }
</script>

@if(Session::has('success'))
<script>
    toastr.success("{{Session::get('success')}}", 'Success');
</script>
@endif

@if(Session::has('fail'))
<script>
    toastr.error("{{Session::get('fail')}}", 'Fail');
</script>
@endif
@endsection