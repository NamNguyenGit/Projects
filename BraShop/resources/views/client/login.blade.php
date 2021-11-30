@extends('client.header-footer')
@section('content')

<section class="module" style="padding-top: 150px; padding-bottom: 150px">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-1 mb-sm-40">
          <h4 class="font-alt">Login</h4>
          <hr class="divider-w mb-10">
          <form class="form" method="POST" action="{{route('client.login')}}">
            @csrf
            <div class="form-group">
              <input class="form-control" id="username" type="text" name="email" placeholder="Email"/>
            </div>
            <div class="form-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password"/>
            </div>
            <div class="form-group">
              <div class="checkout__input__checkbox">
                <label for="acc">
                    Remember me?
                    <input type="checkbox" id="acc" name="remember">
                    <span class="checkmark"></span>
                </label>
                <small class="text-danger">{{session('fail')}}</small>
            </div>
            </div>
            <div class="form-group">
              <button class="btn btn-round btn-b" style="background-color: orange;">Login</button>
            </div>
            <div class="form-group"><a href="">Forgot Password?</a></div>
          </form>
        </div>
        <div class="col-sm-6">
          <h4 class="font-alt">Register</h4>
          <hr class="divider-w mb-10">
          <form class="form" method="POST" action="{{route('customer.store')}}">
            @csrf
            <div class="form-group">
              <input class="form-control" type="text" name="name" placeholder="Name" value="{{old('name')}}"/>
              @error('name')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="phone" placeholder="Phone" value="{{old('phone')}}"/>
              @error('phone')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="address" placeholder="Address" value="{{old('address')}}"/>
              @error('address')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="email" placeholder="Email" value="{{old('email')}}"/>
              @error('email')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
              <input class="form-control" type="password" name="password" placeholder="Password" value="{{old('password')}}"/>
              @error('password')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-block btn-round btn-b" style="background-color: orange;">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
    
@endsection