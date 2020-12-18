@extends('admin.master')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
            <div class="col-lg-12 col-xlg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{route('add_account')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Họ và tên</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Họ và tên" name="name"
                                        class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Email</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="email" placeholder="Email"
                                        class="form-control p-0 border-0" name="email"
                                        id="example-email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Mật khẩu</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="password" placeholder="password" name="password" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Điện thoại</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Điện thoại"
                                        class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Địa chỉ</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea rows="5" placeholder="Địa chỉ" name="address" class="form-control p-0 border-0"></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12">Quyền</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-control p-0 border-0" name="role">
                                        <option value="0">Quản lý</option>
                                        <option value="1">Nhân viên</option>
                                        <option value="2">Khách hàng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Thêm tài khoản</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center"> 2020 © Ample Admin brought to you by <a
            href="https://www.wrappixel.com/">wrappixel.com</a>
</div>
@endsection