@extends('admin.main')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="row">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Upload new Product</h2>
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
                <form class="form-horizontal form-label-left" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="container">
                    <div class="row">
                      <div class="col-md-7">

                        <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3">Name</label>
                          <div class="col-md-9 col-sm-9">
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                            @error('name')
                            <small class="text-danger">{{$message}}</small>
                            @enderror                        
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3">Price</label>
                          <div class="col-md-9 col-sm-9">
                            <input type="number" class="form-control" name="price" value="{{old('price')}}">
                            @error('price')
                            <small class="text-danger">{{$message}}</small>
                            @enderror                        
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3">Sale price</label>
                          <div class="col-md-9 col-sm-9">
                            <input type="number" class="form-control" name="sale_price" value="{{old('sale_price')}}">
                            @error('sale_price')
                            <small class="text-danger">{{$message}}</small>
                            @enderror                        
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3">Content</label>
                          <div class="col-md-9 col-sm-9">
                            <textarea name="content" class="w-100 form-control motcongmotbanghai" rows="7">{{old('content')}}</textarea>
                            @error('content')
                            <small class="text-danger">{{$message}}</small>
                            @enderror                        
                          </div>
                        </div>

                      </div>
                      <div class="col-md-5">

                        <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3">Category</label>
                          <div class="col-md-9 col-sm-9">
                            <select name="category_id" class="form-control">
                              @foreach($category as $key => $categories)
                              <option value="{{$categories->id}}" {{$categories->id == old('category_id') ? 'selected' : ''}}>{{$categories->name}}</option>
                              @endforeach
                            </select>
                            @error('category_id')
                            <small class="text-danger">{{$message}}</small>
                            @enderror                        
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3">Color</label>
                          <div class="col-md-9 col-sm-9">
                            <select name="color_id" class="form-control">
                              @foreach($color as $key => $colors)
                              <option value="{{$colors->id}}" {{$colors->id == old('color_id') ? 'selected' : ''}}>{{$colors->name}}</option>
                              @endforeach
                            </select>
                            @error('color_id')
                            <small class="text-danger">{{$message}}</small>
                            @enderror                        
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3">Size</label>
                          <div class="col-md-9 col-sm-9">
                            <select name="size_id" class="form-control">
                              @foreach($size as $key => $sizes)
                              <option value="{{$sizes->id}}" {{$sizes->id == old('size_id') ? 'selected' : ''}}>{{$sizes->name}}</option>
                              @endforeach
                            </select>
                            @error('size_id')
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
                        <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3">Quantity</label>
                          <div class="col-md-9 col-sm-9">
                            <input type="number" class="form-control" name="quantity" value="{{old('quantity')}}">
                            @error('quantity')
                            <small class="text-danger">{{$message}}</small>
                            @enderror                        
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3">Status</label>
                          <div class="col-md-9 col-sm-9">                         
                            <div class="radio">
                              <label>
                                <input type="radio" class="flat" name="status" value="1" checked> Còn hàng
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" class="flat" name="status" value="0"> Hết hàng
                              </label>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                                                                                                                                                                                                     
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9 offset-md-2">                   
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
@section('css')

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    
@endsection
@section('js')
    
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  <script>
    $('.motcongmotbanghai').summernote({
      height: 241
    })
  </script>

@endsection