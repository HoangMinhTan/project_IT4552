@extends('admin.master')

@section('content')
    
        <div class="page-wrapper">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="col-sm-12">
                                <h3 class="box-title" style="float:left">Bill manager</h3>
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
                                            <th class="border-top-0">Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach($bills as $bill)
                                        <tr>
                                            <td>{{$bill->id}}</td>
                                            <td>{{$bill->user->name}}</td>
                                            <td>${{$bill->total}}</td>
                                            <td>{{$bill->created_at}}</td>
                                            <td class="center"><a href="bill/detail/{{$bill->id}}"><i class="fas fa-info-circle"></i> Detail</a></td>
                                        </tr>
                                        @endforeach --}}
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