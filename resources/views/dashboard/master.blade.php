<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
	class="dark-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
	data-assets-path="{{ asset('/') }}" data-template="vertical-menu-template-dark">

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title> @yield('title') | Dashboard - Gato Justiniano</title>

	<!-- Favicon -->
	<link rel="icon" type="image/vnd.microsoft.icon" href="{{ url('/favicon.ico') }}">

	<!-- Iconos -->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

	<!-- Core CSS -->
	<link rel="stylesheet" href="{{ asset('css/bt5/core-dark.css') }}" class="template-customizer-core-css" />
	<link rel="stylesheet" href="{{ asset('css/bt5/theme-default-dark.css') }}" class="template-customizer-theme-css" />
	<link rel="stylesheet" href="{{ asset('css/bt5/demo.css') }}" />
	
	<link rel="stylesheet" href="{{ asset('css/select2/select2.css') }}" />	
	

	<!-- Vendors CSS -->
	<link rel="stylesheet" href="{{ asset('css/bt5/perfect-scrollbar.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/bt5/typeahead.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/bt5/apex-charts.css') }}" />

	<!-- Page CSS -->
	<link rel="stylesheet" href="{{ asset('css/page-auth.css') }}" />
	<!-- Helpers -->
	<script src="{{ asset('js/bt5/helpers.js') }}"></script>

	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
	<script src="{{ asset('js/bt5/template-customizer.js') }}"></script>
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<script src="{{ asset('js/bt5/config.js') }}"></script>

	<script src="{{ asset("js/app.js") }}"></script>
	@stack('styles')
</head>

<body>

	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar  ">
		<div class="layout-container">


			<!-- Menu -->
			@include('dashboard.partials.aside-master')
			<!-- / Menu -->


			<!-- Layout container -->
			<div class="layout-page">

				<!-- Navbar -->
				@include('dashboard.partials.nav-header-master')
				<!-- / Navbar -->



				<!-- Content wrapper -->
				<div class="content-wrapper">

					<!-- Content -->

					<div class="container-xxl flex-grow-1 container-p-y">
						@include('dashboard.partials.session-flash-status')						
						<div id="notification" class="alert-success mx-3 invisible">
							Bienvenido
						</div>

						@yield('content')

					</div>
					<!-- / Content -->


					<!-- Footer -->
					@include('dashboard.partials.footer-master')
					<!-- / Footer -->


					<div class="content-backdrop fade"></div>
				</div>
				<!-- Content wrapper -->
			</div>
			<!-- / Layout page -->
		</div>



		<!-- Overlay -->
		<div class="layout-overlay layout-menu-toggle"></div>

		<!-- Drag Target Area To SlideIn Menu On Small Screens -->
		<div class="drag-target"></div>
	</div>
	<!-- / Layout wrapper -->


	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->
	<script src="{{ asset('js/bt5/libs/jquery.js') }}"></script>
	<script src="{{ asset('js/bt5/libs/popper.js') }}"></script>
	<script src="{{ asset('js/bt5/libs/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('js/bt5/libs/hammer.js') }}"></script>
	<script src="{{ asset('js/bt5/libs/i18n.js') }}"></script>
	<script src="{{ asset('js/bt5/libs/typeahead.js') }}"></script>

	<script src="{{ asset('js/bt5/bootstrap.js') }}"></script>
	<script src="{{ asset('js/bt5/menu.js') }}"></script>

	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<!-- endbuild -->

	<!-- Vendors JS -->
	<script src="{{ asset('js/bt5/libs/apexcharts.js') }}"></script>

	<!-- Main JS -->
	<script src="{{ asset('js/bt5/main.js') }}"></script>

	<!-- Page JS -->
	<script src="{{ asset('js/bt5/dashboards-analytics.js') }}"></script>
	
	<!-- Uso del comando mix -->
	<script src="{{ asset('js/app.js') }}"></script>
	@stack('scripts')
</body>

</html>