@extends('client.header-footer')
@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Edit your profile</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="{{route('info.index')}}">Profile</a>
                        <span>Edit your profile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <form action="{{route('customer.update',auth()->guard('customer')->user()->id)}}" method="POST">
        @csrf @method('PUT')

    <div class="container" style="padding-top: 100px;padding-bottom: 100px">
        <div class="row">
            <div class="col-lg-6">
                <div class="checkout__input">
                    <p>Name</p>
                    <input type="hidden" value="{{$customer->id}}" name="id">
                    <input type="text" value="{{$customer->name}}" name="name">
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="checkout__input">
                    <p>Email</p>
                    <input type="text" value="{{$customer->email}}" name="email">
                    @error('email')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="checkout__input">
                    <p>Phone</p>
                    <input type="text" value="{{$customer->phone}}" name="phone">
                    @error('phone')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="checkout__input">
                    <p>Address</p>
                    <input type="text" value="{{$customer->address}}" name="address">
                    @error('address')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="checkout__input">
                    <button type="submit" class="site-btn">Save</button>
                </div>
            </div>
        </div>
    </div>

    </form>
    
@endsection