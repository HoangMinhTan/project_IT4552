@extends('admin.master')

@section('content')
    
        <div class="page-wrapper">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="col-sm-12">
                                <h3 class="box-title" style="float:left">Category manager</h3>
                            </div>
                            <div class="col-sm-12">
                                <a class="btn btn-success" style="float:right" href="{{route('add_category')}}">Add category</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Category's Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->category}}</td>
                                            <td class="center"><a href="category/delete/{{$category['id']}}"><i class="far fa-trash-alt"></i> Delete</a></td>
                                            <td class="center"><a href="category/edit/{{$category['id']}}"><i class="fas fa-edit"></i> Edit</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style="float: right">
                            {{ $categories->render('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>


            
@endsection