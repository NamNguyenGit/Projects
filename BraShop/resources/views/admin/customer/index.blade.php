@extends('admin.main')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-inverse table-hover">
              <thead>
                <legend>Customer</legend>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($customer as $key => $customers)
                <tr>
                  <td>{{$customers->id}}</td>
                  <td>{{$customers->name}}</td>
                  <td>{{$customers->email}}</td>
                  <td>{{$customers->address}}</td>
                  <td>{{$customers->phone}}</td>
                  <td>{{$customers->status == 1 ? 'Enable' : 'Disable'}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$customer->links()}}
          </div>
        </div>

      </div>
    </div>
    <!-- /page content -->
@endsection