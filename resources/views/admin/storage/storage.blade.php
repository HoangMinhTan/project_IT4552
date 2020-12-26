@extends('admin.master')

@section('content')
    
        <div class="page-wrapper">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="col-sm-12">
                                <h3 class="box-title" style="float:left">Product manager</h3>
                            </div>
                            <div class="col-sm-12">
                                <a class="btn btn-success" style="float:right" href="{{route('add_product')}}">Add product</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Product Name</th>
                                            <th class="border-top-0">Quantity</th>
                                            <th class="border-top-0">Category</th>
                                            <th class="border-top-0">Supplier</th>
                                            <th class="border-top-0">Unit buying price</th>
                                            <th class="border-top-0">Unit selling price</th>
                                            <th class="border-top-0">Note</th>
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
                                            <td class="center"><a href="storage/delete/{{$product['id']}}"><i class="far fa-trash-alt"></i> Delete</a></td>
                                            <td class="center"><a href="storage/edit/{{$product['id']}}"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style="float: right">
                            {{ $products->render('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>


            
@endsection