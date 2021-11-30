@extends('admin.main')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-inverse table-hover">
              <thead>
                <legend>Color</legend>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Color code</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($color as $key => $colors)
                <tr>
                  <td>{{$colors->id}}</td>
                  <td>{{$colors->name}}</td>
                  <td>{{$colors->color_code}}</td>
                  <td>
                    <form method="POST" action="{{route('color.destroy',$colors->id)}}">
                      @csrf 
                      @method('DELETE')
                      <a href="{{route('color.edit',$colors->id)}}" class="btn btn-sm btn-info">Update</a>
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