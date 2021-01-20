@extends('admin.master')

@section('content')
    
        <div class="page-wrapper">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="col-sm-12">
                                <h3 class="box-title" style="float:left">Import manager</h3>
                            </div>
                            <div class="col-sm-12">
                                <a class="btn btn-success" style="float:right" href="{{route('add_import')}}">Add import</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Product</th>
                                            <th class="border-top-0">Supplier</th>
                                            <th class="border-top-0">Quantity</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($imports as $import)
                                        <tr>
                                            <td>{{$import->id}}</td>
                                            <td>{{$import->product->name}}</td>
                                            <td>{{$import->supplier->supplier}}</td>
                                            <td>{{$import->quantity}}</td>
                                            <td>${{$import->in_price}}</td>
                                            <td>{{$import->created_at}}</td>
                                            {{-- <td class="center"><a href="bill/detail/{{$bill->id}}"><i class="fas fa-info-circle"></i> Detail</a></td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                {{-- <div style="float: right">
                    {{ $bills->render('vendor.pagination.bootstrap-4') }}
                </div> --}}
                    </div>
                </div>
            </div>


            
@endsection