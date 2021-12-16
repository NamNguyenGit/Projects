@extends('adminmanager.main')
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Services</h1>
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
                            <h3 class="card-title">Edit Services</h3>
                        </div>

                        <form method="POST" action="{{route('service.store')}}">
                            @csrf @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="hidden" name="id" value="{{$service->id}}">
                                    <input name="name" value="{{$service->name}}" type="text" class="form-control">
                                    @error('name')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Price</label>
                                    <input name="price" value="{{$service->price}}" min="1" type="number" class="form-control">
                                    @error('price')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label>Benefit</label>
                                    <input value="{{$service->benefit}}" name="benefit" type="text" class="form-control">
                                    @error('benefit')
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