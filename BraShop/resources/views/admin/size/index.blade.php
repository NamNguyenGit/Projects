@extends('admin.main')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-inverse table-hover">
              <thead>
                <legend>Size</legend>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($size as $key => $sizes)
                <tr>
                  <td>{{$sizes->id}}</td>
                  <td>{{$sizes->name}}</td>
                  <td>
                    <form method="POST" action="{{route('size.destroy',$sizes->id)}}">
                      @csrf 
                      @method('DELETE')
                      <a href="{{route('size.edit',$sizes->id)}}" class="btn btn-sm btn-info">Update</a>
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