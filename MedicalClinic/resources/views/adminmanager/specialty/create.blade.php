@extends('adminmanager.main')
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Specialties</h1>
                </div>

            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Specialties</h3>
                        </div>

                        <form method="POST" action="{{route('specialty.create')}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" type="text" class="form-control">
                                    @error('name')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Specializing</label>
                                    <textarea style="height: 250px;" name="specializing" type="text" class="form-control"></textarea>
                                    @error('specializing')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>


                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">ADD</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection



@section('js')
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

@endsection