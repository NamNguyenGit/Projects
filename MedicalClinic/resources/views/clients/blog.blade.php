@extends('clients.header-footer')

@section('maincontent')

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Recently Blogs</h1>
        </div>
    </div>
    <div class="container">
        <div class="row p-2">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <form action="{{route('user.search')}}">
                    <select name="option" style="width: 30%; height: 30px; margin-top: 10px;">
                        <option value="1">Title</option>
                        <option value="2">Date</option>
                        <option value="3">Content</option>
                    </select>
                    <input type="text" placeholder="Search" name="key" style="height: 30px; width: 50%; margin-top: 10px;">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="row pt-3">
        @foreach($blog as $key => $blogs)
        <div class="col-md-4 pt-5">
            <div class="blog-info">
                <a href="{{route('userblog.detail',$blogs->id)}}"> <img src="/img/{{$blogs->image}}" width="100%" class="img-responsive" alt="" /></a>
                <h1 class="pt-4">{{$blogs->title}}</h1> <span class="ml-3">{{$blogs->date}}</span>
                <p style="color: black">
                    {{$blogs->smallcontent}}
                </p>
                <a href="{{route('userblog.detail',$blogs->id)}}">
                    <h5 class="readmore pb-5 " style="color: red;">Read more</h5>
                </a>
            </div>
        </div>
        @endforeach


    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="section-title">
                <h2>Related Images</h2>
            </div>
            <div class="owl-carousel">
                <div><img src="/img/gallery-1.jpg"> </div>
                <div><img src="/img/gallery-2.jpg"> </div>
                <div><img src="/img/gallery-3.jpg"> </div>
                <div><img src="/img/gallery-4.jpg"> </div>
                <div><img src="/img/gallery-5.jpg"> </div>
                <div><img src="/img/gallery-6.jpg"> </div>
                <div><img src="/img/gallery-7.jpg"> </div>
                <div><img src="/img/gallery-8.jpg"> </div>
            </div>
        </div>
    </div>
</div>



@endsection
@section('css')


<link rel="stylesheet" href="/clients/blog/css/owl.carousel.min.css">
<link rel="stylesheet" href="/clients/blog/css/owl.theme.default.min.css">

@endsection
@section('js')


<script src="/clients/blog/js/jquery.min.js"></script>
<script src="/clients/blog/js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            autoplay: true,
            loop: true,
            margin: 10,
            autoplayTimeout: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                },
            }
        });
    });
</script>
@endsection