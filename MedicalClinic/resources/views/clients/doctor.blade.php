@extends('clients.header-footer')

@section('maincontent')


<section id="blog">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>Our Doctors</h1>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <form action="{{route('user.searchdoctor')}}">
                    <select name="option" style="height: 30px;">
                        <option value="1">Name</option>
                        <option value="2">Specialty</option>
                        <option value="3">Experience</option>
                    </select>
                    <input type="text" placeholder="Search" name="key">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="row pt-3">
            @foreach($doctor as $key => $doctors)

            <div class="col-md-4 pt-5">
                <div class="blog-info">
                    <a href="{{route('userdoctor.detail',$doctors->id)}}"> <img src="/img/{{$doctors->image}}" width="100%" class="img-responsive" alt="" /></a>

                    <a href="{{route('userdoctor.detail',$doctors->id)}}">
                        <h5>Doctor: {{$doctors->name}}</h5>
                    </a>
                    <a href="{{route('userdoctor.detail',$doctors->id)}}">
                        <p style="color: black">
                            Specialty: {{$doctors->joinspecialty->name}}
                        </p>
                    </a>
                    <a href="{{route('userdoctor.detail',$doctors->id)}}">
                        <p style="color: black">
                            Experience: {{$doctors->experience}}
                        </p>
                    </a>
                    <a href="{{route('userdoctor.detail',$doctors->id)}}">
                        <h5 class="readmore">Read more</h5>
                    </a>
                </div>
            </div>


            @endforeach
        </div>
    </div>
</section>
@endsection
@section('css')
<link rel="stylesheet" href="/clients/doctor/css/style.css">
<link rel="stylesheet" href="/clients/doctor/css/boostrap.css">
@endsection
@section('js')

@endsection