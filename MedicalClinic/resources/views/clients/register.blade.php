@extends('clients.header-footer')

@section('maincontent')
<div class="container">
    <form class="form-horizontal" role="form" action="{{route('clients.postregister')}}" method="POST">
        @csrf
        <h2>Registration</h2>
        <div class="form-group">
            <label for="fullName" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
                <input type="text" name="name" placeholder="Name..." class="form-control">
                @error('name')
                <small class="help-block text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="userName" class="col-sm-3 control-label">Username</label>
            <div class="col-sm-9">
                <input type="text" name="username" placeholder="Username..." class="form-control">
                @error('username')
                <small class="help-block text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email* </label>
            <div class="col-sm-9">
                <input type="email" name="mail" placeholder="Email..." class="form-control" name="email">
                @error('mail')
                <small class="help-block text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password*</label>
            <div class="col-sm-9">
                <input type="password" name="password" placeholder="Password" class="form-control">
                @error('password')
                <small class="help-block text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="cccd" class="col-sm-3 control-label">Citizen Identification</label>
            <div class="col-sm-9">
                <input type="text" name="cmnd" placeholder="Citizen identification number" class="form-control">
                @error('cmnd')
                <small class="help-block text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
            <div class="col-sm-9">
                <input type="date" name="dob" class="form-control">
                @error('dob')
                <small class="help-block text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">Address</label>
            <div class="col-sm-9">
                <input type="text" name="address" placeholder="Address" class="form-control">
                @error('address')
                <small class="help-block text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="bhyt" class="col-sm-3 control-label">Health Insurance</label>
            <div class="col-sm-9">
                <input type="text" name="bhyt" placeholder="Health Insurance" class="form-control">
                @error('bhyt')
                <small class="help-block text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-9">
                <input type="text" name="phone" placeholder="Phone" class="form-control">
                @error('phone')
                <small class="help-block text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group">
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
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="/clients/contactus/toastr/toastr.min.css">
<link rel="stylesheet" href="/clients/register/assets/css/bootstrap.min.css">
</link>
<link rel="stylesheet" href="/clients/register/assets/css/register.css">
</link>
@endsection
@section('js')
<script src="/clients/register/assets/js/bootstrap.min.js"></script>
<script src="/clients/register/assets/js/jquerry.min.js"></script>


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