@extends('admin.master')

@section('content')
    
        <div class="page-wrapper">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="col-sm-12">
                                <h3 class="box-title" style="float:left">Quản lý kho hàng</h3>
                            </div>
                            <div class="col-sm-12">
                                <a class="btn btn-success" style="float:right" href="{{route('add_product')}}">Thêm sản phẩm</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Tên sản phẩm</th>
                                            <th class="border-top-0">Số lượng</th>
                                            <th class="border-top-0">Loại</th>
                                            <th class="border-top-0">Hãng</th>
                                            <th class="border-top-0">Đơn giá nhập</th>
                                            <th class="border-top-0">Đơn giá bán</th>
                                            <th class="border-top-0">Ghi chú</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->quantity}}</td>
                                            <td>{{$product->category->category}}</td>
                                            <td>{{$product->supplier->supplier}}</td>
                                            <td>{{$product->in_price}}</td>
                                            <td>{{$product->out_price}}</td>
                                            <td>{{$product->note}}</td>
                                            <td class="center"><a href="storage/delete/{{$product['id']}}"><i class="far fa-trash-alt"></i> Xóa</a></td>
                                            <td class="center"><a href="storage/edit/{{$product['id']}}"><i class="fas fa-edit"></i> Sửa</a></td>
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