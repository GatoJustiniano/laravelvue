<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
	class="dark-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
	data-assets-path="{{ asset('css/') }}" data-template="vertical-menu-template-dark">

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

		<title>@yield('title') | {{env('APP_NAME')}} - Gato Justiniano</title>

	<!-- Favicon -->
	<link rel="icon" type="image/vnd.microsoft.icon" href="{{ url('/favicon.ico') }}">

	<!-- Iconos -->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

	<!-- Core CSS -->
	<link rel="stylesheet" href="{{ asset('css/bt5/core-dark.css') }}" class="template-customizer-core-css" />
	<link rel="stylesheet" href="{{ asset('css/bt5/theme-default-dark.css') }}" class="template-customizer-theme-css" />
	<link rel="stylesheet" href="{{ asset('css/bt5/demo.css') }}" />

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

	<style>
		#template-customizer{
			visibility: hidden !important;
		}
	</style>


</head>

<body>

	@yield('content')



	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->
	<script src="{{ asset('js/bt5/libs/jquery.js') }}"></script>
	<script src="{{ asset('js/bt5/libs/popper.js') }}"></script>
	<script src="{{ asset('js/bt5/libs/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('js/bt5/libs/hammer.js') }}"></script>
	<script src="{{ asset('js/bt5/libs/typeahead.js') }}"></script>

	<script src="{{ asset('js/bt5/bootstrap.js') }}"></script>
	<script src="{{ asset('js/bt5/menu.js') }}"></script>
	<!-- endbuild -->

	<!-- Vendors JS -->
	<script src="{{ asset('js/bt5/libs/apexcharts.js') }}"></script>

	<!-- Main JS -->
	<script src="{{ asset('js/bt5/main.js') }}"></script>

	<!-- Page JS -->
	<script src="{{ asset('js/bt5/dashboards-analytics.js') }}"></script>
</body>

</html>