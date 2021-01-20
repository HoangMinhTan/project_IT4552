@extends('admin.master')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
            <div class="col-lg-12 col-xlg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{route('add_import')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group mb-4">
                                <label class="col-sm-12 p-0">Supplier</label>
                                <div class="col-sm-12 border-bottom p-0">
                                    <select class="form-control p-0 border-0" name="supplier_id">
                                        @foreach ($suppliers as $supplier)
                                        <option value={{$supplier->id}}>{{$supplier->supplier}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12 p-0">Proudct</label>
                                <div class="col-sm-12 border-bottom p-0">
                                    <select class="form-control p-0 border-0" name="product_id">
                                        @foreach ($products as $product)
                                        <option value={{$product->id}}>{{$product->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Quantity</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Quantity" name="quantity"
                                        class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Unit Price</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Unit Price" name="in_price"
                                        class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Add import</button>
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