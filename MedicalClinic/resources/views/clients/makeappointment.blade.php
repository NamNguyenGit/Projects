@extends('clients.header-footer')
@section('maincontent')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12  justify-content:center">
                <div class=" col-md-6 card card-primary" style="display:block; margin : 0 auto;">
                    <div class="card-header">
                        <h3 class="card-title text-center">Make an Appointment</h3>
                        <h3 class="card-title text-center">Good health saves money, bad health cost more.</h3>
                    </div>

                    <form method="POST" action="{{route('makeappointment.index')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group  pt-4">
                                <input type="hidden" name="id" value="{{auth()->guard('patient')->user()->id}}">
                                <label>Name</label>
                                <input value="{{auth()->guard('patient')->user()->name}}" type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group pt-4">
                                <label for="">Phone</label>
                                <input value="{{auth()->guard('patient')->user()->phone}}" type="text" class="form-control" name="phone">
                            </div>
                            <div class="form-group pt-4">
                                <label for="">Service</label>
                                <select name="service_id" class="form-select">
                                    @foreach($service as $key => $services)
                                    <option value="{{$services->id}}" @if(isset($chooseService->id) && $services->id==$chooseService->id) selected @endif >{{$services->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group pt-4">
                                <label for="">Your symptom</label>
                                <input type="text" class="form-control" name="symptom">
                                @error('symptom')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group pt-4">

                                <label for="">Date</label>
                                <input type="text" name="date" class="form-control datepicker">
                                @error('date')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <input type="hidden" name="price" value="{{$services->price}}">
                        </div>

                        <div class="card-footer p-4">
                            <button style="display:block; margin : 0 auto;" type="submit" class="btn btn-primary ">Make an Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('css')
<link rel="stylesheet" href="/clients/contactus/toastr/toastr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
@endsection
@section('js')

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script>
    $(".datepicker").datepicker({
        minDate: 0,
        format: 'yyyy/mm/dd',
        todayHighlight: true,
        autoclose: true
    });
</script>



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