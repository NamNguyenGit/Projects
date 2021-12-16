@extends('clients.header-footer')

@section('maincontent')
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
@endsection
@section('css')
@endsection
@section('js')
@endsection