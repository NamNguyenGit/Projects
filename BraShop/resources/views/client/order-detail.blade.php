@extends('client.header-footer')
@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Order detail</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="{{route('info.index')}}">Profile</a>
                    <span>Order detail</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="container" style="padding-top: 50px;padding-bottom: 100px">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered table-inverse table-hover">
                <tbody>

                    <tr>
                        <th>Order code</th>
                        <td>#{{$order->id}}</td>
                    </tr>
                    <tr>
                        <th>Created date</th>
                        <td>{{$order->created_at->format('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <th>Total amount</th>
                        <td>{{number_format($order->amount).' VND'}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            @switch($order->status)
                            @case(0)
                            <span class="text-danger">Đã nhận</span>
                            @break

                            @case(1)
                            <span class="text-info">Đang xử lý</span>
                            @break

                            @default
                            <span class="text-success">Hoàn thành</span>
                            @endswitch
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <table class="table table-bordered table-inverse table-hover">
                <tbody>
                    <legend>Buyer</legend>
                    <tr>
                        <th>Name</th>
                        <td>{{$order->JoinCustomer->name}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{$order->JoinCustomer->phone}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$order->JoinCustomer->email}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$order->JoinCustomer->address}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-bordered table-inverse table-hover">
                <tbody>
                    <legend>Receiver</legend>
                    <tr>
                        <th>Name</th>
                        <td>{{$order->name}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{$order->phone}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$order->email}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$order->address}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-inverse table-hover">
                <legend>Product</legend>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $key = 1 ?>
                    @foreach ($order->JoinOrderDetail as $item)
                    <tr>
                        <td>{{$key}}</td>
                        <td>{{$item->JoinProduct->name}}</td>
                        <td><img src="/frontend/img/product/{{$item->JoinProduct->image}}" width="100px"></td>
                        <td>{{number_format($item->price_unit).' VND'}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{number_format($item->price_unit * $item->quantity).' VND'}}</td>
                    </tr>
                    <?php $key++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection