@extends('admin.master')

@section('content')
    
        <div class="page-wrapper">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="col-sm-12">
                                <h3 class="box-title" style="float:left">Supplier manager</h3>
                            </div>
                            <div class="col-sm-12">
                                <a class="btn btn-success" style="float:right" href="{{route('add_supplier')}}">Add supplier</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Supplier</th>
                                            <th class="border-top-0">Address</th>
                                            <th class="border-top-0">Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($suppliers as $supplier)
                                        <tr>
                                            <td>{{$supplier->id}}</td>
                                            <td>{{$supplier->supplier}}</td>
                                            <td>{{$supplier->address}}</td>
                                            <td>{{$supplier->phone}}</td>
                                            <td class="center"><a href="supplier/delete/{{$supplier['id']}}"><i class="far fa-trash-alt"></i> Delete</a></td>
                                            <td class="center"><a href="supplier/edit/{{$supplier['id']}}"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style="float: right">
                            {{ $suppliers->render('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>


            
@endsection