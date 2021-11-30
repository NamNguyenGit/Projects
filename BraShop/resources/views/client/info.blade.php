@extends('client.header-footer')

@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Your profile</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="{{route('client.index')}}">Home</a>
                        <span>Your profile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <div class="col-md-4">
                <table class="table table-bordered table-inverse table-hover">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{auth()->guard('customer')->user()->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{auth()->guard('customer')->user()->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{auth()->guard('customer')->user()->phone}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{auth()->guard('customer')->user()->address}}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{route('customer.edit',auth()->guard('customer')->user()->id)}}" class="site-btn">Edit profile</a>
            </div>    
        </div>
    </div>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Your orders history</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="container" style="padding-top: 100px; padding-bottom: 200px">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-8"></div>
            <div class="col-md-12">
                <table class="table table-bordered table-inverse table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Code number</th>

                            <th>Total amount</th>
                            <th>Created date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $key = 1 ?>
                        @foreach ($order as $item)
                            <tr>
                                <td>{{$key}}</td>
                                <td>#{{$item->id}}</td>

                                <td>{{number_format($item->amount).' VND'}}</td>
                                <td>{{$item->created_at->format('d-m-Y')}}</td>
                                <td>
                                    @switch($item->status)
                                        @case(0)
                                            <button class="btn btn-sm btn-danger" style="cursor: default">Đã nhận</button>
                                            @break
            
                                        @case(1)
                                        <button class="btn btn-sm btn-info" style="cursor: default">Đang xử lý</button>
                                            @break
            
                                        @default
                                        <button class="btn btn-sm btn-success" style="cursor: default">Hoàn thành</button>
                                    @endswitch
                                </td>
                                <td><a href="{{route('info.order-detail',$item->id)}}" class="btn btn-sm btn-dark">Detail</a></td>
                            </tr>
                            <?php $key++ ?>    
                        @endforeach                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    
@endsection