@extends('admin.master')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
            <div class="col-lg-12 col-xlg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{route('add_account')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Full name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Full name" name="name"
                                        class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Email</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="email" placeholder="Email"
                                        class="form-control p-0 border-0" name="email"
                                        id="example-email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Password</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="password" placeholder="password" name="password" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Phone</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Phone" name="phone"
                                        class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Address</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea rows="5" placeholder="Address" name="address" class="form-control p-0 border-0"></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12">Role</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-control p-0 border-0" name="role">
                                        <option value="0">Manager</option>
                                        <option value="1">Employee</option>
                                        <option value="2">Customer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Add account</button>
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