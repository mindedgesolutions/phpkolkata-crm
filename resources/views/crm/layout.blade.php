<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

		<title>@yield('title', 'PHPKolkata CRM')</title>
		
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
				<link rel="stylesheet" href="{{ asset('backend/global/vendor/chartist/chartist.css') }}">
				<link rel="stylesheet" href="{{ asset('backend/global/vendor/aspieprogress/asPieProgress.css') }}">
				<link rel="stylesheet" href="{{ asset('backend/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
				<link rel="stylesheet" href="{{ asset('backend/assets/examples/css/dashboard/ecommerce.css') }}">
				<link rel="stylesheet" href="{{ asset('backend/global/vendor/toastr/toastr.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/examples/css/advanced/toastr.css') }}">
				<link rel="stylesheet" href="{{ asset('backend/assets/examples/css/pages/profile.css') }}">
				<link rel="stylesheet" href="{{ asset('backend/assets/examples/css/uikit/progress-bars.css') }}">
		
		<!-- Fonts -->
				<link rel="stylesheet" href="{{ asset('backend/global/fonts/font-awesome/font-awesome.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/global/fonts/web-icons/web-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/global/fonts/brand-icons/brand-icons.min.css') }}">
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
		
		<!-- Alertify -->
		<link rel="stylesheet" href="{{ asset('backend/global/vendor/alertify/alertify.css') }}">
		<link rel="stylesheet" href="{{ asset('backend/assets/examples/css/advanced/alertify.css') }}">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{ asset('backend/global/vendor/select2/select2.css') }}">

		<link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}">
		
		<!-- Scripts -->
		<script src="{{ asset('backend/global/vendor/breakpoints/breakpoints.js') }}"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

		<!-- Scripts -->
		{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

		<!-- Styles -->
		{{-- @livewireStyles --}}

		<script>
			Breakpoints();
		</script>
	</head>
	<body class="animsition site-navbar-small ecommerce_dashboard">

		<meta name="csrf-token" content="{{ csrf_token() }}">

		@include('crm.inc.header')

		@include('crm.inc.sidebar')
		
		@yield('content')

		@include('crm.inc.footer')

		@stack('modals')

		@livewireScripts

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
				<script src="{{ asset('backend/global/vendor/chartist/chartist.min.js') }}"></script>
				<script src="{{ asset('backend/global/vendor/aspieprogress/jquery-asPieProgress.js') }}"></script>
				<script src="{{ asset('backend/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js') }}"></script>
				<script src="{{ asset('backend/global/vendor/toastr/toastr.js') }}"></script>
				<script src="{{ asset('backend/global/vendor/asprogress/jquery-asProgress.js') }}"></script>
		
		<!-- Select2 -->
		<script src="{{ asset('backend/global/vendor/select2/select2.full.min.js') }}"></script>
		<script src="{{ asset('backend/global/js/Plugin/select2.js') }}"></script>

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
				<script src="{{ asset('backend/global/js/Plugin/aspieprogress.js') }}"></script>
				
				<script src="{{ asset('backend/assets/examples/js/dashboard/ecommerce.js') }}"></script>
				<script src="{{ asset('backend/global/js/Plugin/toastr.js') }}"></script>

				<script src="{{ asset('backend/global/js/Plugin/responsive-tabs.js') }}"></script>
				<script src="{{ asset('backend/global/js/Plugin/tabs.js') }}"></script>

				<script src="{{ asset('backend/global/js/Plugin/asprogress.js') }}"></script>
				<script src="{{ asset('backend/assets/examples/js/uikit/progress-bars.js') }}"></script>
		
		<!-- Alertify -->
		<script src="{{ asset('backend/global/vendor/alertify/alertify.js') }}"></script>
		<script src="{{ asset('backend/global/js/Plugin/alertify.js') }}"></script>

		<script src="{{ asset('backend/js/custom.js') }}"></script>
	</body>
</html>

<script>
@if(Session::has('message'))
var type = "{{ Session::get('alert-type','info') }}"
switch(type){
	case 'info':
	toastr.info(" {{ Session::get('message') }} ");
	break;
	case 'success':
	toastr.success(" {{ Session::get('message') }} ");
	break;
	case 'warning':
	toastr.warning(" {{ Session::get('message') }} ");
	break;
	case 'error':
	toastr.error(" {{ Session::get('message') }} ");
	break; 
}
@endif
</script>