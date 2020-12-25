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
                                <label class="col-md-12 p-0">Product Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Product Name" name="name"
                                        class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12 p-0">Category</label>
                                <div class="col-sm-12 border-bottom p-0">
                                    <select class="form-control p-0 border-0" name="category_id">
                                        @foreach ($categories as $category)
                                        <option value={{$category->id}}>{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
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
                                <label class="col-md-12 p-0">Unit selling price</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" placeholder="Unit selling price" name="out_price" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Note</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea rows="5" placeholder="Note" name="note" class="form-control p-0 border-0"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Add product</button>
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