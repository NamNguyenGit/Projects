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
                            <h3 class="card-title">Edit Specialties</h3>
                        </div>

                        <form method="POST" action="{{route('specialty.store')}}">
                            @csrf @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="hidden" name="id" value="{{$specialty->id}}">
                                    <input name="name" value="{{$specialty->name}}" type="text" class="form-control">
                                    @error('name')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Specializing</label>
                                    <textarea name="specializing" style="height: 250px;" type="text" class="form-control">{{$specialty->specializing}}</textarea>
                                    @error('specializing')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">EDIT</button>
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