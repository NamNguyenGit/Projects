@extends('admin.main')
@section('main')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered table-inverse table-hover">
                    <tbody>

                        <tr>
                            <th>Order code</th>
                            <td>#{{$orders->id}}</td>
                        </tr>
                        <tr>
                            <th>Created date</th>
                            <td>{{$orders->created_at->format('d-m-Y')}}</td>
                        </tr>
                        <tr>
                            <th>Total amount</th>
                            <td>{{number_format($orders->amount).' VND'}}</td>
                        </tr>
                        <tr>
                            <th>Notes</th>
                            <td>{{$orders->note}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                @switch($orders->status)
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
                            <td>{{$orders->JoinCustomer->name}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$orders->JoinCustomer->phone}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$orders->JoinCustomer->email}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$orders->JoinCustomer->address}}</td>
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
                            <td>{{$orders->name}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$orders->phone}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$orders->email}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$orders->address}}</td>
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
                        @foreach ($orders->JoinOrderDetail as $item)
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
</div>
<!-- /page content -->

@endsection