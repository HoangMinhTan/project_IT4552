@extends('admin.master')

@section('content')
    
        <div class="page-wrapper">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="col-sm-12">
                                <h3 class="box-title" style="float:left">Bill detail: No. {{$id}}</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Product ID</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Quantity</th>
                                            <th class="border-top-0">Unit Price </th>
                                            <th class="border-top-0">Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($details as $detail)
                                        <tr>
                                            <td>{{$detail->product_id}}</td>
                                            <td>{{$detail->product->name}}</td>
                                            <td>{{$detail->quantity}}</td>
                                            <td>{{$detail->price}}</td>
                                            <td>{{$detail->total}}</td>
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