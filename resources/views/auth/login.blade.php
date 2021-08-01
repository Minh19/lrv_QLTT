<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{url('public/site')}}/assets/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/site')}}/vendor-login/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/site')}}/fonts-login/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/site')}}/fonts-login/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/site')}}/vendor-login/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('public/site')}}/vendor-login/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/site')}}/vendor-login/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/site')}}/vendor-login/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('public/site')}}/vendor-login/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/site')}}/css/util-login.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/site')}}/css/main-login.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4 pb-4"> <img src="{{url('public/site')}}/assets/img/new_banner.png" width="450px" ></div>
                    <span class="login100-form-title p-b-43">
						ĐĂNG NHẬP ĐỂ TIẾP TỤC
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <x-jet-input id="email" class="input100" type="email" name="email"  />
                        <span class="focus-input100"></span>
						<span class="label-input100">Email</span>
                    </div>
        
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <x-jet-input id="password" class="input100" type="password" name="password" />
                        <span class="focus-input100"></span>
						<span class="label-input100">Password</span>
                    </div>
        
                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                        <div >
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
            
                            <x-jet-button class="ml-4">
                                {{ __('Log in') }}
                            </x-jet-button>
                        </div>
                    </div>
        
                    <div class="container-login100-form-btn">
                        <x-jet-button class="login100-form-btn">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </form>

				<div class="login100-more" style="background-image: url('{{url('public/site')}}/assets/bg-login.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{url('public/site')}}/vendor-login/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('public/site')}}/vendor-login/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('public/site')}}/vendor-login/bootstrap/js/popper.js"></script>
	<script src="{{url('public/site')}}/vendor-login/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('public/site')}}/vendor-login/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('public/site')}}/vendor-login/daterangepicker/moment.min.js"></script>
	<script src="{{url('public/site')}}/vendor-login/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{url('public/site')}}/vendor-login/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{url('public/site')}}/js/main-login.js"></script>

</body>
</html>
