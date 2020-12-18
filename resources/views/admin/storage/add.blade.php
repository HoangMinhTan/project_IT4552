@extends('admin.master')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
            <div class="col-lg-12 col-xlg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{route('add_product')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Tên sản phẩm</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Tên sản phẩm" name="name"
                                        class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12 p-0">Loại</label>
                                <div class="col-sm-12 border-bottom p-0">
                                    <select class="form-control p-0 border-0" name="category_id">
                                        @foreach ($categories as $category)
                                        <option value={{$category->id}}>{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12 p-0">Hãng</label>
                                <div class="col-sm-12 border-bottom p-0">
                                    <select class="form-control p-0 border-0" name="supplier_id">
                                        @foreach ($suppliers as $supplier)
                                        <option value={{$supplier->id}}>{{$supplier->supplier}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Đơn giá bán</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" placeholder="Đơn giá bán" name="out_price" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Ghi chú</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea rows="5" placeholder="Ghi chú" name="note" class="form-control p-0 border-0"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Thêm sản phẩm</button>
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