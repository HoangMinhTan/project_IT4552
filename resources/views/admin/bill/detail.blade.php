@extends('admin.master')

@section('content')
    
        <div class="page-wrapper">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="col-sm-12">
                                <h3 class="box-title" style="float:left">Chi tiết hóa đơn số {{$id}}</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Mã sản phẩm</th>
                                            <th class="border-top-0">Tên</th>
                                            <th class="border-top-0">Số lượng</th>
                                            <th class="border-top-0">Đơn giá </th>
                                            <th class="border-top-0">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($details as $detail)
                                        <tr>
                                            <td>{{$detail->product_id}}</td>
                                            <td>{{$detail->product->name}}</td>
                                            <td>{{$detail->quantity}}</td>
                                            <td>{{$detail->price}}</td>
                                            <td>{{$detail->total}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
@endsection