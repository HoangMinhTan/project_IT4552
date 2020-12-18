@extends('admin.master')


@section('content')
<div class="page-wrapper">
           
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="white-box">
                    <div class="col-sm-12">
                        <h3 class="box-title" style="float:left">Quản lý tài khoản</h3>
                    </div>
                    <div class="col-sm-12">
                        <a class="btn btn-success" style="float:right" href="{{route('add_account')}}">Thêm tài khoản</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Họ Và Tên</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Điện thoại</th>
                                    <th class="border-top-0">Địa chỉ</th>
                                    <th class="border-top-0">Quyền</th>
                                    <th class="border-top-0">Ngày tạo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $account)
                                <tr>
                                    <td>{{$account['id']}}</td>
                                    <td>{{$account['name']}}</td>
                                    <td>{{$account['email']}}</td>
                                    <td>{{$account['phone']}}</td>
                                    <td>{{$account['address']}}</td>
                                    @if ($account['role'] == 0)
                                        <td>Quản lý</td>
                                    @elseif ($account['role'] == 1)
                                        <td>Nhân viên</td>
                                    @else 
                                        <td>Khách hàng</td>
                                    @endif 

                                    <td>{{$account['created_at']}}</td>
                                    @if ($user['role'] < $account['role'])
                                        <td class="center"><a href="account/delete/{{$account['id']}}"><i class="far fa-trash-alt"></i> Xóa</a></td>
                                        <td class="center"><a href="account/edit/{{$account['id']}}"><i class="fas fa-edit"></i> Sửa</a></td>
                                    @endif
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