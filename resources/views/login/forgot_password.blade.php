@extends('login.master')

@section('content')
<form class="login100-form validate-form">
					<span class="login100-form-title">
						Forgot Password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Send request
						</button>
					</div>

					<div class="text-center p-t-12">
						<a class="txt2" href="{{route('AdminLogin')}}">
							Login
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
						</a>
					</div>
                </form>
@endsection