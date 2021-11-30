@extends('admin.main')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="row">
          <div class="col-md-6">
            <div class="x_panel">
              <div class="x_title">
                <h2>Update this Banner</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>                   
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br>
                <form class="form-horizontal form-label-left" method="POST" action="{{route('banner.update',$banner->id)}}" enctype="multipart/form-data">
                  @csrf @method('PUT')
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3">Name</label>
                    <div class="col-md-9 col-sm-9">
                      <input type="hidden" value="{{$banner->id}}" name="id">
                      <input type="text" class="form-control" value="{{$banner->name}}" name="name">
                      @error('name')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3">Content</label>
                      <div class="col-md-9 col-sm-9">
                        <textarea class="form-control w-100" rows="10" name="content">{{$banner->content}}</textarea>
                        @error('content')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3">Image</label>
                      <div class="col-md-9 col-sm-9">
                        <input type="file" class="form-control" name="file_upload">
                        @error('file_upload')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                    </div>

                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9 offset-md-3">                   
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- /page content -->
@endsection

      
