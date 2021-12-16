@extends('clients.header-footer')

@section('maincontent')
<div class="container ">
    <div class="row  mt-5 detail">

        <div class="col-md-12 p-5 text-center">

            <h1> <b> {{$blog->title}}</b></h1>
        </div>

        <div class="row">
            <div class="col-md-6 ">

                <h5> <span><i class="fas fa-clock"></i></span> {{$blog->date}}</h5>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 justify-content:center mt-2">
                <h4 class="text"> <b> {{$blog->smallcontent}}</b></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 justify-content:center mt-2 mb-2">
                <h4 class="text">{{$blog->content}}</h4>
            </div>
        </div>
        <div class="col-md-12 justify-content:center mt-3 mb-3">
            <img src="/img/{{$blog->image}}" width="100%" class="img-responsive" alt="" />
        </div>
        <div class="row">
            <div class="col-md-12 justify-content:center mt-4  mb-5">
                <h4 class="text">{{$blog->content}}</h4>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')
<link rel="stylesheet" href="/clients/blogdetail/style.css">



@endsection