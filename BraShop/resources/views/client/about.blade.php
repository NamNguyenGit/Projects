@extends('client.header-footer')
@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>About</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="{{route('client.index')}}">Home</a>
                    <span>About</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum earum doloremque vitae distinctio sapiente, error eveniet eos iure, debitis impedit optio qui libero enim sit ab cupiditate deserunt, aspernatur natus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum earum doloremque vitae distinctio sapiente, error eveniet eos iure, debitis impedit optio qui libero enim sit ab cupiditate deserunt, aspernatur natus.</p>
                    <p class="pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum earum doloremque vitae distinctio sapiente, error eveniet eos iure, debitis impedit optio qui libero enim sit ab cupiditate deserunt, aspernatur natus.</p>
                    <p class="pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum earum doloremque vitae distinctio sapiente, error eveniet eos iure, debitis impedit optio qui libero enim sit ab cupiditate deserunt, aspernatur natus.</p>
                </div>
                <div class="about__video set-bg" data-setbg="/frontend/img/banner/banner1.jpg">
                    <a href="https://www.youtube.com/watch?v=7SffkX4NISw" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about__text">
                    <div class="section-title">
                        <span>About Etsy shop</span>
                        <h2>STYLE CREATING SUCCESS!</h2>
                    </div>
                    <p>Feel the flair, sexy and energetic in new designs.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about__bar">
                    <div class="about__bar__item">
                        <p>Design</p>
                        <div id="bar1" class="barfiller">
                            <div class="tipWrap"><span class="tip"></span></div>
                            <span class="fill" data-percentage="95"></span>
                        </div>
                    </div>
                    <div class="about__bar__item">
                        <p>Class</p>
                        <div id="bar2" class="barfiller">
                            <div class="tipWrap"><span class="tip"></span></div>
                            <span class="fill" data-percentage="80"></span>
                        </div>
                    </div>
                    <div class="about__bar__item">
                        <p>Models</p>
                        <div id="bar3" class="barfiller">
                            <div class="tipWrap"><span class="tip"></span></div>
                            <span class="fill" data-percentage="90"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection