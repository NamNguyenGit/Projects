@extends('admin.main')
@section('main')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-inverse table-hover">
          <thead>
            <legend>Banner</legend>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Content</th>
              <th>Image</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($banner as $key => $banners)
            <tr>
              <td>{{$banners->id}}</td>
              <td>{{$banners->name}}</td>
              <td>{{$banners->content}}</td>
              <td><img src="/frontend/img/banner/{{$banners->image}}" width="400px" alt=""></td>
              <td>
                <form method="POST" action="{{route('banner.destroy',$banners->id)}}">
                  @csrf
                  @method('DELETE')
                  <a href="{{route('banner.edit',$banners->id)}}" class="btn btn-sm btn-info">Update</a>
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>
<!-- /page content -->
@endsection