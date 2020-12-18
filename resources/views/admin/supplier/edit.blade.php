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
                                <label class="col-md-12 p-0">Tên nhà cung cấp</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="{{$edit['supplier']}}" name="supplier" value="{{$edit['supplier']}}"
                                        class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Điện thoại</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="{{$edit->phone}}" value="{{$edit->phone}}" name="phone"
                                        class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Địa chỉ</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea rows="5" placeholder="{{$edit->address}}" value="{{$edit->address}}" name="address" class="form-control p-0 border-0"></textarea>
                                </div>
                            </div>
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