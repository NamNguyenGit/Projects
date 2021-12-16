@extends('clients.header-footer')

@section('maincontent')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="container">
                <form class="form-horizontal" role="form" action="{{route('clients.postprofile',auth()->guard('patient')->user()->id)}}" method="POST">
                    @csrf @method('PUT')
                    <h2>Profile</h2>
                    <div class="form-group p-2">
                        <label for="fullName" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="hidden" value="{{auth()->guard('patient')->user()->id}}">
                            <input type="text" name="name" value="{{auth()->guard('patient')->user()->name}}" class="form-control">
                            @error('name')
                            <small class="help-block text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group p-2">
                        <label for="userName" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" name="username" value="{{auth()->guard('patient')->user()->username}}" class="form-control">
                            @error('username')
                            <small class="help-block text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group p-2">
                        <label for="email" class="col-sm-3 control-label">Email* </label>
                        <div class="col-sm-9">
                            <input type="email" name="mail" value="{{auth()->guard('patient')->user()->mail}}" class="form-control" name="email">
                            @error('mail')
                            <small class="help-block text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group p-2">
                        <label for="password" class="col-sm-3 control-label">Password*</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control">
                            @error('password')
                            <small class="help-block text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group p-2">
                        <label for="cccd" class="col-sm-3 control-label">Citizen Identification</label>
                        <div class="col-sm-9">
                            <input type="text" name="cmnd" value="{{auth()->guard('patient')->user()->cmnd}}" class="form-control">
                            @error('cmnd')
                            <small class="help-block text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group p-2">
                        <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                        <div class="col-sm-9">
                            <input type="date" name="dob" value="{{auth()->guard('patient')->user()->dob}}" class="form-control">
                            @error('dob')
                            <small class="help-block text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group p-2">
                        <label for="address" class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" value="{{auth()->guard('patient')->user()->address}}" class="form-control">
                            @error('address')
                            <small class="help-block text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group p-2">
                        <label for="bhyt" class="col-sm-3 control-label">Health Insurance</label>
                        <div class="col-sm-9">
                            <input type="text" name="bhyt" value="{{auth()->guard('patient')->user()->bhyt}}" class="form-control">
                            @error('bhyt')
                            <small class="help-block text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group p-2">
                        <label for="phone" class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" value="{{auth()->guard('patient')->user()->phone}}" class="form-control">
                            @error('phone')
                            <small class="help-block text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group p-2">
                        <label class="control-label col-sm-3">Gender</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="checkbox-inline">
                                        <input type="radio" id="femaleCheckbox" name='gender' value="Female">Female
                                        <input type="radio" id="maleCheckbox" name='gender' value="Male">Male
                                        @error('gender')
                                        <small class="help-block text-danger">{{$message}}</small>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button style=" width: 20%;  display: block; margin:0 auto;" type="submit" class="btn btn-lg btn-primary btn-block">Edit</button>



                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="content-wrapper">

                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 text-center pt-2">
                                <h1 class="m-0">History Appointments</h1>
                            </div>

                        </div>
                    </div>
                </div>


                <section class="content">
                    <div class="container-fluid">

                        <table id="example1" class="table table-bordered table-inverse table-hover">
                            <thead>

                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Symptom</th>
                                    <th>Service</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointment as $key => $appointments)
                                <tr>
                                    <td>{{$appointments->id}}</td>
                                    <td>{{$appointments->joinpatient->name}}</td>
                                    <td>{{$appointments->joinpatient->phone}}</td>
                                    <td>{{$appointments->date}}</td>
                                    <td>{{$appointments->symptom}}</td>
                                    <td>{{$appointments->joinsevice->name}}</td>
                                    <td>{{$appointments->joinsevice->price}}</td>
                                    <td>
                                        @if($appointments->status==1)
                                        <button type="submit" class="btn btn-danger">Processing</button>
                                        @else
                                        <button type="button" class="btn btn-primary">Complete</button>
                                        @endif
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </section>

            </div>
        </div>
    </div>
</div>













@endsection
@section('css')
<link rel="stylesheet" href="/clients/contactus/toastr/toastr.min.css">
<link rel="stylesheet" href="/clients/register/assets/css/bootstrap.min.css">
</link>
<link rel="stylesheet" href="/clients/profile/assets/css/profile.css">
</link>
@endsection
@section('js')
<script src="/clients/profile/assets/js/bootstrap.min.js"></script>
<script src="/clients/profile/assets/js/jquerry.min.js"></script>


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