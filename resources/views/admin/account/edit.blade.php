@extends('admin.master')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
            <div class="col-lg-12 col-xlg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{$edit->id}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group mb-4">
                                <h3 class="col-md-12 p-0">Sửa thông tin tài khoản</h3>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Họ và tên</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="{{$edit['name']}}" name="name" value="{{$edit['name']}}"
                                        class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Email</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="email" placeholder="{{$edit['email']}}" name="email" value="{{$edit['email']}}" 
                                        class="form-control p-0 border-0" name="example-email"
                                        id="example-email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Điện thoại</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="{{$edit['phone']}}" name="phone" value="{{$edit['phone']}}"
                                        class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Address</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea rows="5" placeholder="{{$edit['address']}}" name="address" value="{{$edit['address']}}" class="form-control p-0 border-0"></textarea>
                                </div>
                            </div>
                            @if ($edit['role']==0)
                            <div class="form-group mb-4">
                                <label class="col-sm-12">Quyền</label>
                                <div class="col-sm-12 border-bottom">
                                    <select name="role" value="{{$edit['role']}}" class="form-control p-0 border-0">
                                        <option value="0" selected>Quản lý</option>
                                        <option value="1">Nhân viên</option>
                                        <option value="2">Khách hàng</option>
                                    </select>
                                </div>
                            </div>

                            @elseif ($edit['role']==1)
                            
                            <div class="form-group mb-4">
                                <label class="col-sm-12">Quyền</label>
                                <div class="col-sm-12 border-bottom">
                                    <select name="role" value="{{$edit['role']}}" class="form-control p-0 border-0">
                                        <option value="0">Quản lý</option>
                                        <option value="1"selected>Nhân viên</option>
                                        <option value="2">Khách hàng</option>
                                    </select>
                                </div>
                            </div>

                            @else
                            <div class="form-group mb-4">
                                <label class="col-sm-12">Quyền</label>
                                <div class="col-sm-12 border-bottom">
                                    <select name="role" value="{{$edit['role']}}" class="form-control p-0 border-0">
                                        <option value="0">Quản lý</option>
                                        <option value="1">Nhân viên</option>
                                        <option value="2" selected>Khách hàng</option>
                                    </select>
                                </div>
                            </div>
                            @endif 
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">Sửa</button>
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