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
                                <label class="col-md-12 p-0">Product Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="{{$edit->name}}" value="{{$edit->name}}" name="name"
                                        class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12 p-0">Category</label>
                                <div class="col-sm-12 border-bottom p-0">
                                    <select class="form-control p-0 border-0" name="category_id">
                                        @foreach ($categories as $category)
                                            @if ($category->id == $edit->category_id)
                                                <option value={{$category->id}} selected>{{$category->category}}</option>
                                            @else 
                                                <option value={{$category->id}}>{{$category->category}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12 p-0">Supplier</label>
                                <div class="col-sm-12 border-bottom p-0">
                                    <select class="form-control p-0 border-0" name="supplier_id">
                                        @foreach ($suppliers as $supplier)
                                            @if ($supplier->id == $edit->supplier_id)
                                                <option value={{$supplier->id}} selected>{{$supplier->supplier}}</option>
                                            @else 
                                                <option value={{$supplier->id}}>{{$supplier->supplier}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Unit Selling price</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" placeholder="{{$edit->out_price}}" value="{{$edit->out_price}}" name="out_price" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Note</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea rows="5" name="note" placeholder="{{$edit->note}}" value="{{$edit->note}}" class="form-control p-0 border-0"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Edit</button>
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