@extends('adminmanager.main')
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Doctors</h1>
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
                            <h3 class="card-title">Add Doctors</h3>
                        </div>

                        <form method="POST" action="{{route('doctor.create')}}" enctype="multipart/form-data">
                            @csrf
                            <div class=" card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" type="text" class="form-control">
                                    @error('name')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputFile">Specialty</label>
                                    <select name="specialty_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        @foreach($specialty as $key => $specialtys)
                                        <option value="{{$specialtys->id}}">{{$specialtys->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('specialty_id')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Experience</label>
                                    <textarea id="experience" name="experience" class="form-control"> </textarea>
                                    @error('experience')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="file_upload">
                                    @error('file_upload')
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