@extends('admin.master')

@section('content')
    
        <div class="page-wrapper">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="col-sm-12">
                                <h3 class="box-title" style="float:left">Quản lý nhà hóa đơn</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Tên Khách hàng</th>
                                            <th class="border-top-0">Tổng số tiền</th>
                                            <th class="border-top-0">Thời gian thanh toán</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bills as $bill)
                                        <tr>
                                            <td>{{$bill->id}}</td>
                                            <td>{{$bill->user->name}}</td>
                                            <td>{{$bill->total}}</td>
                                            <td>{{$bill->created_at}}</td>
                                            <td class="center"><a href="bill/detail/{{$bill->id}}"><i class="fas fa-info-circle"></i> Chi tiết hóa đơn</a></td>
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