@extends('adminmanager.main')
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Blogs</h1>
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
                            <h3 class="card-title">Edit Blogs</h3>
                        </div>

                        <form method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
                            @csrf @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="hidden" name="id" value="{{$blog->id}}">
                                    <input name="title" value="{{$blog->title}}" type="text" class="form-control">
                                    @error('title')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea style="height:200px" name="content" class="form-control">{{$blog->content}}</textarea>
                                    @error('content')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>SmallContent</label>
                                    <textarea style="height:200px" name="smallcontent" class="form-control">{{$blog->smallcontent}}</textarea>
                                    @error('smallcontent')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <img src="{{url('/img')}}/{{$blog->image}}" alt="" width="100px">
                                    <input type="file" class="form-control" name="file_upload">
                                    @error('file_upload')
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