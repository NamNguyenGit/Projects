@extends('admin.main')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-inverse table-hover">
              <thead>
                <legend>Category</legend>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($category as $key => $categories)
                <tr>
                  <td>{{$categories->id}}</td>
                  <td>{{$categories->name}}</td>
                  <td>{{$categories->status == 1 ? 'Còn hàng' : 'Hết hàng'}}</td>
                  <td>{{$categories->created_at}}</td>
                  <td>{{$categories->updated_at}}</td>
                  <td>
                    <form method="POST" action="{{route('category.destroy',$categories->id)}}">
                      @csrf 
                      @method('DELETE')
                      <a href="{{route('category.edit',$categories->id)}}" class="btn btn-sm btn-info">Update</a>
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$category->links()}}
          </div>
        </div>

      </div>
    </div>
    <!-- /page content -->
@endsection