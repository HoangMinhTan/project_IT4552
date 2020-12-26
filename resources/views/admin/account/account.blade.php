@extends('admin.master')


@section('content')
<div class="page-wrapper">
           
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="white-box">
                    <div class="col-sm-12">
                        <h3 class="box-title" style="float:left">Account manager</h3>
                    </div>
                    <div class="col-sm-12">
                        <a class="btn btn-success" style="float:right" href="{{route('add_account')}}">Create account</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Full Name</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Phone</th>
                                    <th class="border-top-0">Address</th>
                                    <th class="border-top-0">Role</th>
                                    <th class="border-top-0">Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $account)
                                <tr>
                                    <td>{{$account['id']}}</td>
                                    <td>{{$account['name']}}</td>
                                    <td>{{$account['email']}}</td>
                                    <td>{{$account['phone']}}</td>
                                    <td>{{$account['address']}}</td>
                                    @if ($account['role'] == 0)
                                        <td>Manager</td>
                                    @elseif ($account['role'] == 1)
                                        <td>Employee</td>
                                    @else 
                                        <td>Customer</td>
                                    @endif 

                                    <td>{{$account['created_at']}}</td>
                                    @if ($user['role'] < $account['role'])
                                        <td class="center"><a href="account/delete/{{$account['id']}}"><i class="far fa-trash-alt"></i> Delete</a></td>
                                        <td class="center"><a href="account/edit/{{$account['id']}}"><i class="fas fa-edit"></i> Edit</a></td>
                                    @endif
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