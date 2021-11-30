@extends('admin.main')
@section('main')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-inverse table-hover">
          <thead>
            <legend>Product</legend>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Sale Price</th>
              <th>Image</th>
              <th>Color</th>
              <th>Size</th>
              <th>Quantity</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($product as $key => $products)
            <tr>
              <td>{{$products->id}}</td>
              <td>{{$products->name}}</td>
              <td>{{$products->JoinCategory->name}}</td>
              <td>{{number_format($products->price).' VND'}}</td>
              <td>{{number_format($products->sale_price).' VND'}}</td>
              <td><img src="/frontend/img/product/{{$products->image}}" alt="" width="150px"></td>
              <td>{{$products->JoinColor->name}}</td>
              <td>{{$products->JoinSize->name}}</td>
              <td>{{$products->quantity}}</td>
              <td>{{$products->status == 1 ? 'Có' : 'Hết'}}</td>
              <td>
                <form method="POST" action="{{route('product.destroy',$products->id)}}">
                  @csrf
                  @method('DELETE')
                  <a href="{{route('product.edit',$products->id)}}" class="btn btn-sm btn-info">Update</a>
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{$product->links()}}
      </div>
    </div>

  </div>
</div>
<!-- /page content -->
@endsection