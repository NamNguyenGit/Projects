@extends('clients.header-footer')
@section('maincontent')

<div class="container">
    <div class="row  ">
        <div class="col-md-12 justify-content:center">
            <div class="row p-5">
                <div class="col-md-6">
                    <img src="/img/{{$doctor->image}}" width="90%" class="img-responsive" alt="" />
                </div>
                <div class="col-md-6 ml-5">
                    <h4 style="color: black;">Profile</h4>
                    <h2 style="color: blue;">Dr.{{$doctor->name}}</h2>
                    <h5>Professor doctors</h5>
                    <br>
                    <p>Fellowship(Dental Surgeon)</p>
                    <p>MS(Medicine),FCPS,MBBS</p>
                    <br>
                    <h3>Experience: {{$doctor->experience}}</h3>
                    <h3>Language: English,French</h3>
                    <h3>
                        Specialty: {{$doctor->joinspecialty->name}}
                    </h3>
                    <br>
                    <br>
                    <h2>Miracle Clinic</h2>
                    <p>0123 456 789</p>
                    <p>group4@gmail.com</p>
                    <p>18 Hoang Quoc Viet Street</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection