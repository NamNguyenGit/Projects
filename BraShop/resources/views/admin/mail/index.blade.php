@extends('admin.main')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-inverse table-hover">
              <thead>
                <legend>Mail</legend>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Content</th>
                  <th>Created at</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($mail as $key => $mails)
                <tr>
                  <td>{{$mails->id}}</td>
                  <td>{{$mails->name}}</td>
                  <td>{{$mails->email}}</td>
                  <td>{{$mails->content}}</td>
                  <td>{{$mails->created_at}}</td>
                  <td>
                    <form method="POST" action="{{route('mail.destroy',$mails->id)}}">
                      @csrf 
                      @method('DELETE')
                      
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