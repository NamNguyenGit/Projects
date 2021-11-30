@extends('admin.main')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-inverse table-hover">
              <thead>
                <legend>Orders</legend>
                <form action="{{route('admin.filter')}}">
                  <div class="form-row align-items-center">
                    <div class="col-auto my-1">

                      <?php 
                        if(isset($_GET['filter'])){
                          $filter = $_GET['filter'];
                        }else{
                          $filter = 1;
                        }                        
                      ?>
                      
                      
                      <select class="custom-select mr-sm-2 <?php if($filter == 2){ echo 'text-danger';}elseif($filter == 3) { echo 'text-info';}elseif($filter == 4) { echo 'text-success';}else{echo '';}?>" id="inlineFormCustomSelect" name="filter">
                        <option value="1" <?php if($filter == 2 || $filter == 3 || $filter == 4){ echo '';}else { echo 'selected';} ?>>Mặc định</option>
                        <option class="text-danger" value="2" <?php if($filter == 2){ echo 'selected';}else { echo '';} ?>>Vừa nhận</option>
                        <option class="text-info" value="3" <?php if($filter == 3){ echo 'selected';}else { echo '';} ?>>Đang xử lý</option>
                        <option class="text-success" value="4" <?php if($filter == 4){ echo 'selected';}else { echo '';} ?>>Hoàn thành</option>
                      </select>
                    </div>
                    <div class="col-auto my-1"></div>
                    <div class="col-auto my-1">
                      <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                  </div>
                </form>
                <tr>
                  <th>No.</th>
                  <th>ID</th>
                  <th>Buyer</th>
                  <th>Receiver</th>
                  <th>Created date</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $k = 1 ?>
                @foreach($order as $key => $orders)
                <tr>
                  <td>{{$k}}</td>
                  <td>#{{$orders->id}}</td>
                  <td>{{$orders->JoinCustomer->name}}</td>
                  <td>{{$orders->name}}</td>
                  <td>{{$orders->created_at->format('d-m-Y')}}</td>
                  <td>{{number_format($orders->amount).' VND'}}</td>
                  <td>@switch($orders->status)
                        @case(0)
                            <form method="POST" action="{{route('order.update',$orders->id)}}">
                              @csrf @method('PUT')
                              <input type="hidden" name="status" value="1">
                              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Chuyển trạng thái sang Đang xử lý?')">Vừa nhận</button>
                            </form>
                            @break
                        @case(1)
                            <form method="POST" action="{{route('order.update',$orders->id)}}">
                              @csrf @method('PUT')
                              <input type="hidden" name="status" value="2">
                              <button type="submit" class="btn btn-sm btn-info" onclick="return confirm('Chuyển trạng thái sang Hoàn thành?')">Đang xử lý</button>
                            </form>
                            @break
                        @default
                        <button type="submit" class="btn btn-sm btn-success">Hoàn thành</button>
                    @endswitch
                  </td>
                  <td>
                    <form method="POST" action="{{route('order.destroy',$orders->id)}}">
                      @csrf 
                      @method('DELETE')
                      <a href="{{route('order.show',$orders->id)}}" class="btn btn-sm btn-dark">Detail</a>
                      <button type="submit" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                  </td>
                </tr>
                <?php $k++ ?>
                @endforeach
              </tbody>
            </table>
            {{$order->links()}}
          </div>
        </div>

      </div>
    </div>
    <!-- /page content -->
@endsection