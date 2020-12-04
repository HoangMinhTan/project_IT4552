@extends('login.master')

@section('content')
<form class="login100-form validate-form">
					<span class="login100-form-title">
						Change your Password
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="New Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Change password
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
						</a>
					</div>
                </form>
                
@endsection
