@extends('login.master')

@section('content')
<form class="login100-form validate-form" action="{{'login'}}" method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<span class="login100-form-title">
						Member Login
					</span>

					@if(count($errors)>0)
					<div class="alert alert-danger">
					@foreach($errors->all() as $err)
						{{$err}}<br>
					@endforeach
					</div>
					@endif

					@if(session('thongbao1'))
					<div class="alert alert-danger">
						{{session('thongbao1')}}
					</div>
					@endif   

					@if(session('thongbao'))
					<div class="alert alert-success">
						{{session('thongbao')}}
					</div>
					@endif    

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="">
							Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
						</a>
					</div>
				</form>
@endsection
