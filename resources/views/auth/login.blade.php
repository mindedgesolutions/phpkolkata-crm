
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		
		<title>Login | CRM - PHPKolkata</title>
		
		<link rel="apple-touch-icon" href="{{ asset('backend/assets/images/apple-touch-icon.png') }}">
		<link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
		
		<!-- Stylesheets -->
		<link rel="stylesheet" href="{{ asset('backend/global/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/global/css/bootstrap-extend.min.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/assets/css/site.min.css') }}">
		
		<!-- Plugins -->
		<link rel="stylesheet" href="{{ asset('backend/global/vendor/animsition/animsition.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/global/vendor/asscrollable/asScrollable.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/global/vendor/switchery/switchery.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/global/vendor/intro-js/introjs.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/global/vendor/slidepanel/slidePanel.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/global/vendor/jquery-mmenu/jquery-mmenu.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/global/vendor/flag-icon-css/flag-icon.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/assets/examples/css/pages/login-v2.css') }}">
		
		<!-- Fonts -->
		<link rel="stylesheet" href="{{ asset('backend/global/fonts/web-icons/web-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/global/fonts/brand-icons/brand-icons.min.css') }}">
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

		<!-- Alertify -->
		<link rel="stylesheet" href="{{ asset('backend/global/vendor/alertify/alertify.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/assets/examples/css/advanced/alertify.css') }}">

		<link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}">
		
		<!-- Scripts -->
		<script src="{{ asset('backend/global/vendor/breakpoints/breakpoints.js') }}"></script>
		<script>
			Breakpoints();
		</script>
	</head>
	<body class="animsition page-login-v2 layout-full page-dark">

		<style>
			body {
				background: transparent;
			}
		</style>
		<!-- Page -->
		<div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
			<div class="page-content">
				<div class="page-brand-info">
					<div class="brand">
						<img class="brand-img" src="{{ asset('backend/assets/images/logo@2x.png') }}" alt="...">
						<h2 class="brand-text font-size-40">CRM - PHPKolkata</h2>
					</div>
					<p class="font-size-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>

				<div class="page-login-main animation-slide-right animation-duration-1">
					<div class="brand hidden-md-up">
						<img class="brand-img" src="{{ asset('backend/assets/images/logo-colored@2x.png') }}" alt="...">
						<h3 class="brand-text font-size-40">CRM - PHPKolkata</h3>
					</div>
					<h3 class="font-size-24">Sign In</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

					<form method="POST" id="loginForm" action="{{ route('login') }}" onsubmit="return validateFormLogin()">
						@csrf

						<div class="form-group">
							<input type="text" class="form-control empty" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
							<span class="text-danger">@error('email'){{ $message }}@enderror</span>
						</div>
						<div class="form-group">
							<input type="password" class="form-control empty" id="password" name="password" placeholder="Password">
							<span class="text-danger">@error('password'){{ $message }}@enderror</span>
						</div>
						<div class="form-group clearfix">
							<div class="checkbox-custom checkbox-inline checkbox-primary float-left">
								<input type="checkbox" id="remember_me" name="remember">
								<label for="remember_me">Remember me</label>
							</div>
							<a class="float-right" href="{{ route('password.request') }}">Forgot password?</a>
						</div>
						<button type="submit" class="btn btn-primary btn-block">Sign in</button>
					</form>

					{{-- <p>No account? <a href="register-v2.html">Sign Up</a></p> --}}

					<footer class="page-copyright">
						<p>CRM - PHPKOLKATA</p>
						<p>&copy; {{ date('Y') }}. All RIGHT RESERVED.</p>
						<div class="social">
							<a class="btn btn-icon btn-round social-twitter mx-5" href="javascript:void(0)">
								<i class="icon bd-twitter" aria-hidden="true"></i>
							</a>
							<a class="btn btn-icon btn-round social-facebook mx-5" href="javascript:void(0)">
								<i class="icon bd-facebook" aria-hidden="true"></i>
							</a>
							<a class="btn btn-icon btn-round social-google-plus mx-5" href="javascript:void(0)">
								<i class="icon bd-google-plus" aria-hidden="true"></i>
							</a>
						</div>
					</footer>
				</div>

			</div>
		</div>
		<!-- End Page -->


		<!-- Core  -->
		<script src="{{ asset('backend/global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
		<script src="{{ asset('backend/global/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('backend/global/vendor/popper-js/umd/popper.min.js') }}"></script>
		<script src="{{ asset('backend/global/vendor/bootstrap/bootstrap.js') }}"></script>
		<script src="{{ asset('backend/global/vendor/animsition/animsition.js') }}"></script>
		<script src="{{ asset('backend/global/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
		<script src="{{ asset('backend/global/vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
		<script src="{{ asset('backend/global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
		
		<!-- Plugins -->
		<script src="{{ asset('backend/global/vendor/jquery-mmenu/jquery.mmenu.min.all.js') }}"></script>
		<script src="{{ asset('backend/global/vendor/switchery/switchery.js') }}"></script>
		<script src="{{ asset('backend/global/vendor/intro-js/intro.js') }}"></script>
		<script src="{{ asset('backend/global/vendor/screenfull/screenfull.js') }}"></script>
		<script src="{{ asset('backend/global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>
		<script src="{{ asset('backend/global/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
		
		<!-- Scripts -->
		<script src="{{ asset('backend/global/js/Component.js') }}"></script>
		<script src="{{ asset('backend/global/js/Plugin.js') }}"></script>
		<script src="{{ asset('backend/global/js/Base.js') }}"></script>
		<script src="{{ asset('backend/global/js/Config.js') }}"></script>
		
		<script src="{{ asset('backend/assets/js/Section/Menubar.js') }}"></script>
		<script src="{{ asset('backend/assets/js/Section/Sidebar.js') }}"></script>
		<script src="{{ asset('backend/assets/js/Section/PageAside.js') }}"></script>
		<script src="{{ asset('backend/assets/js/Section/GridMenu.js') }}"></script>
		
		<!-- Config -->
		<script src="{{ asset('backend/global/js/config/colors.js') }}"></script>
		<script src="{{ asset('backend/assets/js/config/tour.js') }}"></script>
		<script>Config.set('assets', 'assets');</script>
		
		<!-- Page -->
		<script src="{{ asset('backend/assets/js/Site.js') }}"></script>
		<script src="{{ asset('backend/global/js/Plugin/asscrollable.js') }}"></script>
		<script src="{{ asset('backend/global/js/Plugin/slidepanel.js') }}"></script>
		<script src="{{ asset('backend/global/js/Plugin/switchery.js') }}"></script>
		<script src="{{ asset('backend/global/js/Plugin/jquery-placeholder.js') }}"></script>
		
		<!-- Alertify -->
		<script src="{{ asset('backend/global/vendor/alertify/alertify.js') }}"></script>
		<script src="{{ asset('backend/global/js/Plugin/alertify.js') }}"></script>

		<script src="{{ asset('backend/js/custom.js') }}"></script>

		<script>
			(function(document, window, $){
				'use strict';
		
				var Site = window.Site;
				$(document).ready(function(){
					Site.run();
				});
			})(document, window, jQuery);
		</script>
		
	</body>
</html>