<!DOCTYPE html>

<html lang="es" class="dark-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
	data-assets-path="{{ asset('/') }}" data-template="vertical-menu-template-dark">

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title>Dashboard | Gato Justiniano</title>

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

	<!-- Helpers -->
	<script src="{{ asset('js/bt5/helpers.js') }}"></script>

	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
	<script src="{{ asset('js/bt5/template-customizer.js') }}"></script>
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<script src="{{ asset('js/bt5/config.js') }}"></script>



</head>

<body>

	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar  ">
		<div class="layout-container">


			<!-- Menu -->

			<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

				<div class="app-brand demo ">
					<a href="index.html" class="app-brand-link">
						<span class="app-brand-logo demo">
							
							<svg width="343" height="464" viewBox="0 0 343 464" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M65.3742 303.432L0 231.981L212.269 0H343L65.3742 303.432ZM343 214.072H212.269L163.298 267.594L228.672 339.045"
									fill="#74F9FF" fill-opacity="0.8" />
								<path d="M163.298 410.477L212.269 464H343L228.672 339.045" fill="#0D47A1" />
								<path d="M98.0784 339.083L163.35 267.726L228.621 339.064L163.35 410.421L98.0784 339.083Z" fill="#42A5F5" />
								<path d="M163.35 410.421L228.621 339.083L237.732 349.041L172.461 420.379L163.35 410.421Z"
									fill="url(#paint0_linear_3_30)" />
								<path d="M163.298 410.477L260.296 373.852L228.672 339.026" fill="url(#paint1_linear_3_30)" />
								<defs>
									<linearGradient id="paint0_linear_3_30" x1="195.998" y1="374.739" x2="205.917" y2="383.815"
										gradientUnits="userSpaceOnUse">
										<stop offset="0.2" stop-opacity="0.15" />
										<stop offset="0.85" stop-color="#616161" stop-opacity="0.01" />
									</linearGradient>
									<linearGradient id="paint1_linear_3_30" x1="163.321" y1="374.754" x2="260.317" y2="374.754"
										gradientUnits="userSpaceOnUse">
										<stop offset="0.2" stop-opacity="0.55" />
										<stop offset="0.85" stop-color="#616161" stop-opacity="0.01" />
									</linearGradient>
								</defs>
							</svg>

						</span>
						<span class="app-brand-text demo menu-text fw-bolder ms-2">Gato</span>
					</a>

					<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
						<i class="bx bx-chevron-left bx-sm align-middle"></i>
					</a>
				</div>

				<div class="menu-inner-shadow"></div>



				<ul class="menu-inner py-1">
					<!-- Dashboards -->
					<li class="menu-item active open">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon material-icons">assignment_turned_in</i>
							<div data-i18n="Dashboards">Dashboards</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item active">
								<a href="index.html" class="menu-link">
									<div data-i18n="Analytics">Analytics</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="dashboards-ecommerce.html" class="menu-link">
									<div data-i18n="eCommerce">eCommerce</div>
								</a>
							</li>
						</ul>
					</li>

					<!-- Layouts -->
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-layout"></i>
							<div data-i18n="Layouts">Layouts</div>
						</a>

						<ul class="menu-sub">

							<li class="menu-item">
								<a href="layouts-collapsed-menu.html" class="menu-link">
									<div data-i18n="Collapsed menu">Collapsed menu</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="layouts-content-navbar.html" class="menu-link">
									<div data-i18n="Content navbar">Content navbar</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
									<div data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="../horizontal-menu-template" class="menu-link" target="_blank">
									<div data-i18n="Horizontal">Horizontal</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="layouts-without-menu.html" class="menu-link">
									<div data-i18n="Without menu">Without menu</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="layouts-without-navbar.html" class="menu-link">
									<div data-i18n="Without navbar">Without navbar</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="layouts-fluid.html" class="menu-link">
									<div data-i18n="Fluid">Fluid</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="layouts-container.html" class="menu-link">
									<div data-i18n="Container">Container</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="layouts-blank.html" class="menu-link">
									<div data-i18n="Blank">Blank</div>
								</a>
							</li>
						</ul>
					</li>

					<!-- Apps & Pages -->
					<li class="menu-header small text-uppercase">
						<span class="menu-header-text">Apps &amp; Pages</span>
					</li>
					<li class="menu-item">
						<a href="app-calendar.html" class="menu-link">
							<i class="menu-icon tf-icons bx bx-calendar"></i>
							<div data-i18n="Calendar">Calendar</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class='menu-icon tf-icons bx bx-food-menu'></i>
							<div data-i18n="Invoice">Invoice</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="app-invoice-list.html" class="menu-link">
									<div data-i18n="List">List</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="app-invoice-preview.html" class="menu-link">
									<div data-i18n="Preview">Preview</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="app-invoice-edit.html" class="menu-link">
									<div data-i18n="Edit">Edit</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="app-invoice-add.html" class="menu-link">
									<div data-i18n="Add">Add</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-user"></i>
							<div data-i18n="Users">Users</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="app-user-list.html" class="menu-link">
									<div data-i18n="List">List</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="javascript:void(0);" class="menu-link menu-toggle">
									<div data-i18n="View">View</div>
								</a>
								<ul class="menu-sub">
									<li class="menu-item">
										<a href="app-user-view-account.html" class="menu-link">
											<div data-i18n="Account">Account</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="app-user-view-security.html" class="menu-link">
											<div data-i18n="Security">Security</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="app-user-view-billing.html" class="menu-link">
											<div data-i18n="Billing & Plans">Billing & Plans</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="app-user-view-notifications.html" class="menu-link">
											<div data-i18n="Notifications">Notifications</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="app-user-view-connections.html" class="menu-link">
											<div data-i18n="Connections">Connections</div>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class='menu-icon tf-icons bx bx-check-shield'></i>
							<div data-i18n="Roles & Permissions">Roles & Permissions</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="app-access-roles.html" class="menu-link">
									<div data-i18n="Roles">Roles</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="app-access-permission.html" class="menu-link">
									<div data-i18n="Permission">Permission</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-dock-top"></i>
							<div data-i18n="Pages">Pages</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="javascript:void(0);" class="menu-link menu-toggle">
									<div data-i18n="User Profile">User Profile</div>
								</a>
								<ul class="menu-sub">
									<li class="menu-item">
										<a href="pages-profile-user.html" class="menu-link">
											<div data-i18n="Profile">Profile</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="pages-profile-teams.html" class="menu-link">
											<div data-i18n="Teams">Teams</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="pages-profile-projects.html" class="menu-link">
											<div data-i18n="Projects">Projects</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="pages-profile-connections.html" class="menu-link">
											<div data-i18n="Connections">Connections</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="javascript:void(0);" class="menu-link menu-toggle">
									<div data-i18n="Account Settings">Account Settings</div>
								</a>
								<ul class="menu-sub">
									<li class="menu-item">
										<a href="pages-account-settings-account.html" class="menu-link">
											<div data-i18n="Account">Account</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="pages-account-settings-security.html" class="menu-link">
											<div data-i18n="Security">Security</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="pages-account-settings-billing.html" class="menu-link">
											<div data-i18n="Billing & Plans">Billing & Plans</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="pages-account-settings-notifications.html" class="menu-link">
											<div data-i18n="Notifications">Notifications</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="pages-account-settings-connections.html" class="menu-link">
											<div data-i18n="Connections">Connections</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="pages-faq.html" class="menu-link">
									<div data-i18n="FAQ">FAQ</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="javascript:void(0);" class="menu-link menu-toggle">
									<div data-i18n="Help Center">Help Center</div>
								</a>
								<ul class="menu-sub">
									<li class="menu-item">
										<a href="pages-help-center-landing.html" class="menu-link">
											<div data-i18n="List">Landing</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="pages-help-center-categories.html" class="menu-link">
											<div data-i18n="Preview">Categories</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="pages-help-center-article.html" class="menu-link">
											<div data-i18n="Edit">Article</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="pages-pricing.html" class="menu-link">
									<div data-i18n="Pricing">Pricing</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="javascript:void(0);" class="menu-link menu-toggle">
									<div data-i18n="Misc">Misc</div>
								</a>
								<ul class="menu-sub">
									<li class="menu-item">
										<a href="pages-misc-error.html" class="menu-link">
											<div data-i18n="Error">Error</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="pages-misc-under-maintenance.html" class="menu-link">
											<div data-i18n="Under Maintenance">Under Maintenance</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
											<div data-i18n="Coming Soon">Coming Soon</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="pages-misc-not-authorized.html" class="menu-link">
											<div data-i18n="Not Authorized">Not Authorized</div>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
							<div data-i18n="Authentications">Authentications</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="javascript:void(0);" class="menu-link menu-toggle">
									<div data-i18n="Login">Login</div>
								</a>
								<ul class="menu-sub">
									<li class="menu-item">
										<a href="auth-login-basic.html" class="menu-link" target="_blank">
											<div data-i18n="Basic">Basic</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="auth-login-cover.html" class="menu-link" target="_blank">
											<div data-i18n="Cover">Cover</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="javascript:void(0);" class="menu-link menu-toggle">
									<div data-i18n="Register">Register</div>
								</a>
								<ul class="menu-sub">
									<li class="menu-item">
										<a href="auth-register-basic.html" class="menu-link" target="_blank">
											<div data-i18n="Basic">Basic</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="auth-register-cover.html" class="menu-link" target="_blank">
											<div data-i18n="Cover">Cover</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="auth-register-multisteps.html" class="menu-link" target="_blank">
											<div data-i18n="Multi-steps">Multi-steps</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="javascript:void(0);" class="menu-link menu-toggle">
									<div data-i18n="Verify Email">Verify Email</div>
								</a>
								<ul class="menu-sub">
									<li class="menu-item">
										<a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
											<div data-i18n="Basic">Basic</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
											<div data-i18n="Cover">Cover</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="javascript:void(0);" class="menu-link menu-toggle">
									<div data-i18n="Reset Password">Reset Password</div>
								</a>
								<ul class="menu-sub">
									<li class="menu-item">
										<a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
											<div data-i18n="Basic">Basic</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
											<div data-i18n="Cover">Cover</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="javascript:void(0);" class="menu-link menu-toggle">
									<div data-i18n="Forgot Password">Forgot Password</div>
								</a>
								<ul class="menu-sub">
									<li class="menu-item">
										<a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
											<div data-i18n="Basic">Basic</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
											<div data-i18n="Cover">Cover</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="javascript:void(0);" class="menu-link menu-toggle">
									<div data-i18n="Two Steps">Two Steps</div>
								</a>
								<ul class="menu-sub">
									<li class="menu-item">
										<a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
											<div data-i18n="Basic">Basic</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
											<div data-i18n="Cover">Cover</div>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-spreadsheet"></i>
							<div data-i18n="Wizard Examples">Wizard Examples</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="wizard-ex-checkout.html" class="menu-link">
									<div data-i18n="Checkout">Checkout</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="wizard-ex-property-listing.html" class="menu-link">
									<div data-i18n="Property Listing"> Property Listing</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="wizard-ex-create-deal.html" class="menu-link">
									<div data-i18n="Create Deal"> Create Deal</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="modal-examples.html" class="menu-link">
							<i class="menu-icon tf-icons bx bx-window-open"></i>
							<div data-i18n="Modal Examples">Modal Examples</div>
						</a>
					</li>

					<!-- Components -->
					<li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
					<!-- Cards -->
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-collection"></i>
							<div data-i18n="Cards">Cards</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="cards-basic.html" class="menu-link">
									<div data-i18n="Basic">Basic</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="cards-advance.html" class="menu-link">
									<div data-i18n="Advance">Advance</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="cards-statistics.html" class="menu-link">
									<div data-i18n="Statistics">Statistics</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="cards-analytics.html" class="menu-link">
									<div data-i18n="Analytics">Analytics</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="cards-gamifications.html" class="menu-link">
									<div data-i18n="Gamifications">Gamifications</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="cards-actions.html" class="menu-link">
									<div data-i18n="Actions">Actions</div>
								</a>
							</li>
						</ul>
					</li>
					<!-- User interface -->
					<li class="menu-item">
						<a href="javascript:void(0)" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-box"></i>
							<div data-i18n="User interface">User interface</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="ui-accordion.html" class="menu-link">
									<div data-i18n="Accordion">Accordion</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-alerts.html" class="menu-link">
									<div data-i18n="Alerts">Alerts</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-badges.html" class="menu-link">
									<div data-i18n="Badges">Badges</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-buttons.html" class="menu-link">
									<div data-i18n="Buttons">Buttons</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-carousel.html" class="menu-link">
									<div data-i18n="Carousel">Carousel</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-collapse.html" class="menu-link">
									<div data-i18n="Collapse">Collapse</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-dropdowns.html" class="menu-link">
									<div data-i18n="Dropdowns">Dropdowns</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-footer.html" class="menu-link">
									<div data-i18n="Footer">Footer</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-list-groups.html" class="menu-link">
									<div data-i18n="List Groups">List groups</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-modals.html" class="menu-link">
									<div data-i18n="Modals">Modals</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-navbar.html" class="menu-link">
									<div data-i18n="Navbar">Navbar</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-offcanvas.html" class="menu-link">
									<div data-i18n="Offcanvas">Offcanvas</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-pagination-breadcrumbs.html" class="menu-link">
									<div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-progress.html" class="menu-link">
									<div data-i18n="Progress">Progress</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-spinners.html" class="menu-link">
									<div data-i18n="Spinners">Spinners</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-tabs-pills.html" class="menu-link">
									<div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-toasts.html" class="menu-link">
									<div data-i18n="Toasts">Toasts</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-tooltips-popovers.html" class="menu-link">
									<div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="ui-typography.html" class="menu-link">
									<div data-i18n="Typography">Typography</div>
								</a>
							</li>
						</ul>
					</li>

					<!-- Extended components -->
					<li class="menu-item">
						<a href="javascript:void(0)" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-copy"></i>
							<div data-i18n="Extended UI">Extended UI</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="extended-ui-avatar.html" class="menu-link">
									<div data-i18n="Avatar">Avatar</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="extended-ui-blockui.html" class="menu-link">
									<div data-i18n="BlockUI">BlockUI</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="extended-ui-drag-and-drop.html" class="menu-link">
									<div data-i18n="Drag &amp; Drop">Drag &amp; Drop</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="extended-ui-media-player.html" class="menu-link">
									<div data-i18n="Media Player">Media Player</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="extended-ui-perfect-scrollbar.html" class="menu-link">
									<div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="extended-ui-star-ratings.html" class="menu-link">
									<div data-i18n="Star Ratings">Star Ratings</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="extended-ui-sweetalert2.html" class="menu-link">
									<div data-i18n="SweetAlert2">SweetAlert2</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="extended-ui-text-divider.html" class="menu-link">
									<div data-i18n="Text Divider">Text Divider</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="javascript:void(0);" class="menu-link menu-toggle">
									<div data-i18n="Timeline">Timeline</div>
								</a>
								<ul class="menu-sub">
									<li class="menu-item">
										<a href="extended-ui-timeline-basic.html" class="menu-link">
											<div data-i18n="Basic">Basic</div>
										</a>
									</li>
									<li class="menu-item">
										<a href="extended-ui-timeline-fullscreen.html" class="menu-link">
											<div data-i18n="Fullscreen">Fullscreen</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="extended-ui-tour.html" class="menu-link">
									<div data-i18n="Tour">Tour</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="extended-ui-treeview.html" class="menu-link">
									<div data-i18n="Treeview">Treeview</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="extended-ui-misc.html" class="menu-link">
									<div data-i18n="Miscellaneous">Miscellaneous</div>
								</a>
							</li>
						</ul>
					</li>

					<!-- Icons -->
					<li class="menu-item">
						<a href="javascript:void(0)" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-crown"></i>
							<div data-i18n="Icons">Icons</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="icons-boxicons.html" class="menu-link">
									<div data-i18n="Boxicons">Boxicons</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="icons-font-awesome.html" class="menu-link">
									<div data-i18n="Fontawesome">Fontawesome</div>
								</a>
							</li>
						</ul>
					</li>

					<!-- Forms & Tables -->
					<li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span>
					</li>
					<!-- Forms -->
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-detail"></i>
							<div data-i18n="Form Elements">Form Elements</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="forms-basic-inputs.html" class="menu-link">
									<div data-i18n="Basic Inputs">Basic Inputs</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="forms-input-groups.html" class="menu-link">
									<div data-i18n="Input groups">Input groups</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="forms-custom-options.html" class="menu-link">
									<div data-i18n="Custom Options">Custom Options</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="forms-editors.html" class="menu-link">
									<div data-i18n="Editors">Editors</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="forms-file-upload.html" class="menu-link">
									<div data-i18n="File Upload">File Upload</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="forms-pickers.html" class="menu-link">
									<div data-i18n="Pickers">Pickers</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="forms-selects.html" class="menu-link">
									<div data-i18n="Select &amp; Tags">Select &amp; Tags</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="forms-sliders.html" class="menu-link">
									<div data-i18n="Sliders">Sliders</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="forms-switches.html" class="menu-link">
									<div data-i18n="Switches">Switches</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="forms-extras.html" class="menu-link">
									<div data-i18n="Extras">Extras</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-detail"></i>
							<div data-i18n="Form Layouts">Form Layouts</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="form-layouts-vertical.html" class="menu-link">
									<div data-i18n="Vertical Form">Vertical Form</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="form-layouts-horizontal.html" class="menu-link">
									<div data-i18n="Horizontal Form">Horizontal Form</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="form-layouts-sticky.html" class="menu-link">
									<div data-i18n="Sticky Actions">Sticky Actions</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-carousel"></i>
							<div data-i18n="Form Wizard">Form Wizard</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="form-wizard-numbered.html" class="menu-link">
									<div data-i18n="Numbered">Numbered</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="form-wizard-icons.html" class="menu-link">
									<div data-i18n="Icons">Icons</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="form-validation.html" class="menu-link">
							<i class="menu-icon tf-icons bx bx-list-check"></i>
							<div data-i18n="Form Validation">Form Validation</div>
						</a>
					</li>
					<!-- Tables -->
					<li class="menu-item">
						<a href="tables-basic.html" class="menu-link">
							<i class="menu-icon tf-icons bx bx-table"></i>
							<div data-i18n="Tables">Tables</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-grid"></i>
							<div data-i18n="Datatables">Datatables</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="tables-datatables-basic.html" class="menu-link">
									<div data-i18n="Basic">Basic</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="tables-datatables-advanced.html" class="menu-link">
									<div data-i18n="Advanced">Advanced</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="tables-datatables-extensions.html" class="menu-link">
									<div data-i18n="Extensions">Extensions</div>
								</a>
							</li>
						</ul>
					</li>

					<!-- Charts & Maps -->
					<li class="menu-header small text-uppercase">
						<span class="menu-header-text">Charts &amp; Maps</span>
					</li>
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-chart"></i>
							<div data-i18n="Charts">Charts</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="charts-apex.html" class="menu-link">
									<div data-i18n="Apex Charts">Apex Charts</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="charts-chartjs.html" class="menu-link">
									<div data-i18n="ChartJS">ChartJS</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="maps-leaflet.html" class="menu-link">
							<i class="menu-icon tf-icons bx bx-map-alt"></i>
							<div data-i18n="Leaflet Maps">Leaflet Maps</div>
						</a>
					</li>

					<!-- Misc -->
					<li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
					<li class="menu-item">
						<a href="https://themeselection.com/support/" class="menu-link">
							<i class="menu-icon tf-icons bx bx-support"></i>
							<div data-i18n="Support">Support</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
							class="menu-link">
							<i class="menu-icon tf-icons bx bx-file"></i>
							<div data-i18n="Documentation">Documentation</div>
						</a>
					</li>
				</ul>



			</aside>
			<!-- / Menu -->



			<!-- Layout container -->
			<div class="layout-page">





				<!-- Navbar -->




				<nav
					class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
					id="layout-navbar">











					<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
						<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
							<i class="bx bx-menu bx-sm"></i>
						</a>
					</div>


					<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


						<!-- Search -->
						<div class="navbar-nav align-items-center">
							<div class="nav-item navbar-search-wrapper mb-0">
								<a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
									<i class="bx bx-search bx-sm"></i>
									<span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
								</a>
							</div>
						</div>
						<!-- /Search -->


						<ul class="navbar-nav flex-row align-items-center ms-auto">

							<!-- Language -->
							<li class="nav-item dropdown-language dropdown me-2 me-xl-0">
								<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
									data-bs-toggle="dropdown">
									<i class='flag-icon flag-icon-us flag-icon-squared rounded-circle fs-3 me-1'></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li>
										<a class="dropdown-item" href="javascript:void(0);" data-language="en">
											<i class="flag-icon flag-icon-us flag-icon-squared rounded-circle fs-4 me-1"></i>
											<span class="align-middle">English</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0);" data-language="fr">
											<i class="flag-icon flag-icon-fr flag-icon-squared rounded-circle fs-4 me-1"></i>
											<span class="align-middle">France</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0);" data-language="de">
											<i class="flag-icon flag-icon-de flag-icon-squared rounded-circle fs-4 me-1"></i>
											<span class="align-middle">German</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0);" data-language="pt">
											<i class="flag-icon flag-icon-pt flag-icon-squared rounded-circle fs-4 me-1"></i>
											<span class="align-middle">Portuguese</span>
										</a>
									</li>
								</ul>
							</li>
							<!--/ Language -->




							<!-- Style Switcher -->
							<li class="nav-item me-2 me-xl-0">
								<a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
									<i class='bx bx-sm'></i>
								</a>
							</li>
							<!--/ Style Switcher -->

							<!-- Quick links  -->
							<li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
								<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
									data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
									<i class='bx bx-grid-alt bx-sm'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end py-0">
									<div class="dropdown-menu-header border-bottom">
										<div class="dropdown-header d-flex align-items-center py-3">
											<h5 class="text-body mb-0 me-auto">Shortcuts</h5>
											<a href="javascript:void(0)" class="dropdown-shortcuts-add text-body"
												data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i
													class="bx bx-sm bx-plus-circle"></i></a>
										</div>
									</div>
									<div class="dropdown-shortcuts-list scrollable-container">
										<div class="row row-bordered overflow-visible g-0">
											<div class="dropdown-shortcuts-item col">
												<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
													<i class="bx bx-calendar fs-4"></i>
												</span>
												<a href="app-calendar.html" class="stretched-link">Calendar</a>
												<small class="text-muted mb-0">Appointments</small>
											</div>
											<div class="dropdown-shortcuts-item col">
												<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
													<i class="bx bx-food-menu fs-4"></i>
												</span>
												<a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
												<small class="text-muted mb-0">Manage Accounts</small>
											</div>
										</div>
										<div class="row row-bordered overflow-visible g-0">
											<div class="dropdown-shortcuts-item col">
												<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
													<i class="bx bx-user fs-4"></i>
												</span>
												<a href="app-user-list.html" class="stretched-link">User App</a>
												<small class="text-muted mb-0">Manage Users</small>
											</div>
											<div class="dropdown-shortcuts-item col">
												<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
													<i class="bx bx-check-shield fs-4"></i>
												</span>
												<a href="app-access-roles.html" class="stretched-link">Role Management</a>
												<small class="text-muted mb-0">Permission</small>
											</div>
										</div>
										<div class="row row-bordered overflow-visible g-0">
											<div class="dropdown-shortcuts-item col">
												<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
													<i class="bx bx-pie-chart-alt-2 fs-4"></i>
												</span>
												<a href="index.html" class="stretched-link">Dashboard</a>
												<small class="text-muted mb-0">User Profile</small>
											</div>
											<div class="dropdown-shortcuts-item col">
												<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
													<i class="bx bx-cog fs-4"></i>
												</span>
												<a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
												<small class="text-muted mb-0">Account Settings</small>
											</div>
										</div>
										<div class="row row-bordered overflow-visible g-0">
											<div class="dropdown-shortcuts-item col">
												<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
													<i class="bx bx-help-circle fs-4"></i>
												</span>
												<a href="pages-help-center-landing.html" class="stretched-link">Help Center</a>
												<small class="text-muted mb-0">FAQs & Articles</small>
											</div>
											<div class="dropdown-shortcuts-item col">
												<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
													<i class="bx bx-window-open fs-4"></i>
												</span>
												<a href="modal-examples.html" class="stretched-link">Modals</a>
												<small class="text-muted mb-0">Useful Popups</small>
											</div>
										</div>
									</div>
								</div>
							</li>
							<!-- Quick links -->

							<!-- Notification -->
							<li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
								<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
									data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
									<i class="bx bx-bell bx-sm"></i>
									<span class="badge bg-danger rounded-pill badge-notifications">5</span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end py-0">
									<li class="dropdown-menu-header border-bottom">
										<div class="dropdown-header d-flex align-items-center py-3">
											<h5 class="text-body mb-0 me-auto">Notification</h5>
											<a href="javascript:void(0)" class="dropdown-notifications-all text-body"
												data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i
													class="bx fs-4 bx-envelope-open"></i></a>
										</div>
									</li>
									<li class="dropdown-notifications-list scrollable-container">
										<ul class="list-group list-group-flush">
											<li class="list-group-item list-group-item-action dropdown-notifications-item">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<img src="../../assets/img/avatars/1.png" alt
																class="w-px-40 h-auto rounded-circle">
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1">Congratulation Lettie 🎉</h6>
														<p class="mb-0">Won the monthly best seller gold badge</p>
														<small class="text-muted">1h ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)" class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)" class="dropdown-notifications-archive"><span
																class="bx bx-x"></span></a>
													</div>
												</div>
											</li>
											<li class="list-group-item list-group-item-action dropdown-notifications-item">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<span class="avatar-initial rounded-circle bg-label-danger">CF</span>
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1">Charles Franklin</h6>
														<p class="mb-0">Accepted your connection</p>
														<small class="text-muted">12hr ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)" class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)" class="dropdown-notifications-archive"><span
																class="bx bx-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<img src="../../assets/img/avatars/2.png" alt
																class="w-px-40 h-auto rounded-circle">
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1">New Message ✉️</h6>
														<p class="mb-0">You have new message from Natalie</p>
														<small class="text-muted">1h ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)" class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)" class="dropdown-notifications-archive"><span
																class="bx bx-x"></span></a>
													</div>
												</div>
											</li>
											<li class="list-group-item list-group-item-action dropdown-notifications-item">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<span class="avatar-initial rounded-circle bg-label-success"><i
																	class="bx bx-cart"></i></span>
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1">Whoo! You have new order 🛒 </h6>
														<p class="mb-0">ACME Inc. made new order $1,154</p>
														<small class="text-muted">1 day ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)" class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)" class="dropdown-notifications-archive"><span
																class="bx bx-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<img src="../../assets/img/avatars/9.png" alt
																class="w-px-40 h-auto rounded-circle">
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1">Application has been approved 🚀 </h6>
														<p class="mb-0">Your ABC project application has been approved.</p>
														<small class="text-muted">2 days ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)" class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)" class="dropdown-notifications-archive"><span
																class="bx bx-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<span class="avatar-initial rounded-circle bg-label-success"><i
																	class="bx bx-pie-chart-alt"></i></span>
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1">Monthly report is generated</h6>
														<p class="mb-0">July monthly financial report is generated </p>
														<small class="text-muted">3 days ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)" class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)" class="dropdown-notifications-archive"><span
																class="bx bx-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<img src="../../assets/img/avatars/5.png" alt
																class="w-px-40 h-auto rounded-circle">
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1">Send connection request</h6>
														<p class="mb-0">Peter sent you connection request</p>
														<small class="text-muted">4 days ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)" class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)" class="dropdown-notifications-archive"><span
																class="bx bx-x"></span></a>
													</div>
												</div>
											</li>
											<li class="list-group-item list-group-item-action dropdown-notifications-item">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<img src="../../assets/img/avatars/6.png" alt
																class="w-px-40 h-auto rounded-circle">
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1">New message from Jane</h6>
														<p class="mb-0">Your have new message from Jane</p>
														<small class="text-muted">5 days ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)" class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)" class="dropdown-notifications-archive"><span
																class="bx bx-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<span class="avatar-initial rounded-circle bg-label-warning"><i
																	class="bx bx-error"></i></span>
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1">CPU is running high</h6>
														<p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
														<small class="text-muted">5 days ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)" class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)" class="dropdown-notifications-archive"><span
																class="bx bx-x"></span></a>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li class="dropdown-menu-footer border-top">
										<a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
											View all notifications
										</a>
									</li>
								</ul>
							</li>
							<!--/ Notification -->
							<!-- User -->
							<li class="nav-item navbar-dropdown dropdown-user dropdown">
								<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
									data-bs-toggle="dropdown">
									<div class="avatar avatar-online">
										<img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
									</div>
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li>
										<a class="dropdown-item" href="pages-account-settings-account.html">
											<div class="d-flex">
												<div class="flex-shrink-0 me-3">
													<div class="avatar avatar-online">
														<img src="../../assets/img/avatars/1.png" alt
															class="w-px-40 h-auto rounded-circle">
													</div>
												</div>
												<div class="flex-grow-1">
													<span class="fw-semibold d-block">John Doe</span>
													<small class="text-muted">Admin</small>
												</div>
											</div>
										</a>
									</li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
										<a class="dropdown-item" href="pages-profile-user.html">
											<i class="bx bx-user me-2"></i>
											<span class="align-middle">My Profile</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="pages-account-settings-account.html">
											<i class="bx bx-cog me-2"></i>
											<span class="align-middle">Settings</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="pages-account-settings-billing.html">
											<span class="d-flex align-items-center align-middle">
												<i class="flex-shrink-0 bx bx-credit-card me-2"></i>
												<span class="flex-grow-1 align-middle">Billing</span>
												<span
													class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
											</span>
										</a>
									</li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
										<a class="dropdown-item" href="pages-help-center-landing.html">
											<i class="bx bx-support me-2"></i>
											<span class="align-middle">Help</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="pages-faq.html">
											<i class="bx bx-help-circle me-2"></i>
											<span class="align-middle">FAQ</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="pages-pricing.html">
											<i class="bx bx-dollar me-2"></i>
											<span class="align-middle">Pricing</span>
										</a>
									</li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
										<a class="dropdown-item" href="auth-login-cover.html" target="_blank">
											<i class="bx bx-power-off me-2"></i>
											<span class="align-middle">Log Out</span>
										</a>
									</li>
								</ul>
							</li>
							<!--/ User -->


						</ul>
					</div>


					<!-- Search Small Screens -->
					<div class="navbar-search-wrapper search-input-wrapper  d-none">
						<input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
							aria-label="Search...">
						<i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
					</div>


				</nav>



				<!-- / Navbar -->



				<!-- Content wrapper -->
				<div class="content-wrapper">

					<!-- Content -->

					<div class="container-xxl flex-grow-1 container-p-y">



						<div class="row">
							<div class="col-lg-8 mb-4 order-0">
								<div class="card">
									<div class="d-flex align-items-end row">
										<div class="col-sm-7">
											<div class="card-body">
												<h5 class="card-title text-primary">Congratulations John! 🎉</h5>
												<p class="mb-4">You have done <span class="fw-bold">72%</span> more sales today.
													Check your new
													badge in your profile.</p>

												<a href="javascript:;" class="btn btn-sm btn-label-primary">View Badges</a>
											</div>
										</div>
										<div class="col-sm-5 text-center text-sm-left">
											<div class="card-body pb-0 px-0 px-md-4">
												<img src="../../assets/img/illustrations/man-with-laptop-dark.png" height="140"
													alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
													data-app-light-img="illustrations/man-with-laptop-light.png">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 order-1">
								<div class="row">
									<div class="col-lg-6 col-md-12 col-6 mb-4">
										<div class="card">
											<div class="card-body pb-0">
												<span class="d-block fw-semibold mb-1">Order</span>
												<h3 class="card-title mb-1">276k</h3>
											</div>
											<div id="orderChart" class="mb-3"></div>
										</div>
									</div>
									<div class="col-lg-6 col-md-12 col-6 mb-4">
										<div class="card">
											<div class="card-body">
												<div class="card-title d-flex align-items-start justify-content-between">
													<div class="avatar flex-shrink-0">
														<img src="../../assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
															class="rounded">
													</div>
													<div class="dropdown">
														<button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
															aria-haspopup="true" aria-expanded="false">
															<i class="bx bx-dots-vertical-rounded"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
															<a class="dropdown-item" href="javascript:void(0);">View More</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
												<span>Sales</span>
												<h3 class="card-title text-nowrap mb-1">$4,679</h3>
												<small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i>
													+28.42%</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Total Revenue -->
							<div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
								<div class="card">
									<div class="row row-bordered g-0">
										<div class="col-md-8">
											<h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
											<div id="totalRevenueChart" class="px-2"></div>
										</div>
										<div class="col-md-4">
											<div class="card-body">
												<div class="text-center">
													<div class="dropdown">
														<button class="btn btn-sm btn-label-primary dropdown-toggle" type="button"
															id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false">
															2022
														</button>
														<div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
															<a class="dropdown-item" href="javascript:void(0);">2021</a>
															<a class="dropdown-item" href="javascript:void(0);">2020</a>
															<a class="dropdown-item" href="javascript:void(0);">2019</a>
														</div>
													</div>
												</div>
											</div>
											<div id="growthChart"></div>
											<div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

											<div
												class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
												<div class="d-flex">
													<div class="me-2">
														<span class="badge bg-label-primary p-2"><i
																class="bx bx-dollar text-primary"></i></span>
													</div>
													<div class="d-flex flex-column">
														<small>2022</small>
														<h6 class="mb-0">$32.5k</h6>
													</div>
												</div>
												<div class="d-flex">
													<div class="me-2">
														<span class="badge bg-label-info p-2"><i
																class="bx bx-wallet text-info"></i></span>
													</div>
													<div class="d-flex flex-column">
														<small>2021</small>
														<h6 class="mb-0">$41.2k</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ Total Revenue -->
							<div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
								<div class="row">
									<div class="col-6 mb-4">
										<div class="card">
											<div class="card-body">
												<div class="card-title d-flex align-items-start justify-content-between">
													<div class="avatar flex-shrink-0">
														<img src="../../assets/img/icons/unicons/paypal.png" alt="Credit Card"
															class="rounded">
													</div>
													<div class="dropdown">
														<button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
															aria-haspopup="true" aria-expanded="false">
															<i class="bx bx-dots-vertical-rounded"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
															<a class="dropdown-item" href="javascript:void(0);">View More</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
												<span class="d-block mb-1">Payments</span>
												<h3 class="card-title text-nowrap mb-2">$2,456</h3>
												<small class="text-danger fw-semibold"><i class='bx bx-down-arrow-alt'></i>
													-14.82%</small>
											</div>
										</div>
									</div>
									<div class="col-6 mb-4">
										<div class="card">
											<div class="card-body pb-2">
												<span class="d-block fw-semibold mb-1">Revenue</span>
												<h3 class="card-title mb-1">425k</h3>
												<div id="revenueChart"></div>
											</div>
										</div>
									</div>
									<!-- </div>
    <div class="row"> -->
									<div class="col-12 mb-4">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
													<div
														class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
														<div class="card-title">
															<h5 class="text-nowrap mb-2">Profile Report</h5>
															<span class="badge bg-label-warning rounded-pill">Year 2021</span>
														</div>
														<div class="mt-sm-auto">
															<small class="text-success text-nowrap fw-semibold"><i
																	class='bx bx-chevron-up'></i>
																68.2%</small>
															<h3 class="mb-0">$84,686k</h3>
														</div>
													</div>
													<div id="profileReportChart"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- Order Statistics -->
							<div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
								<div class="card h-100">
									<div class="card-header d-flex align-items-center justify-content-between pb-0">
										<div class="card-title mb-0">
											<h5 class="m-0 me-2">Order Statistics</h5>
											<small class="text-muted">42.82k Total Sales</small>
										</div>
										<div class="dropdown">
											<button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
												<a class="dropdown-item" href="javascript:void(0);">Select All</a>
												<a class="dropdown-item" href="javascript:void(0);">Refresh</a>
												<a class="dropdown-item" href="javascript:void(0);">Share</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center mb-3">
											<div class="d-flex flex-column align-items-center gap-1">
												<h2 class="mb-2">8,258</h2>
												<span>Total Orders</span>
											</div>
											<div id="orderStatisticsChart"></div>
										</div>
										<ul class="p-0 m-0">
											<li class="d-flex mb-4 pb-1">
												<div class="avatar flex-shrink-0 me-3">
													<span class="avatar-initial rounded bg-label-primary"><i
															class='bx bx-mobile-alt'></i></span>
												</div>
												<div
													class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
													<div class="me-2">
														<h6 class="mb-0">Electronic</h6>
														<small class="text-muted">Mobile, Earbuds, TV</small>
													</div>
													<div class="user-progress">
														<small class="fw-semibold">82.5k</small>
													</div>
												</div>
											</li>
											<li class="d-flex mb-4 pb-1">
												<div class="avatar flex-shrink-0 me-3">
													<span class="avatar-initial rounded bg-label-success"><i
															class='bx bx-closet'></i></span>
												</div>
												<div
													class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
													<div class="me-2">
														<h6 class="mb-0">Fashion</h6>
														<small class="text-muted">T-shirt, Jeans, Shoes</small>
													</div>
													<div class="user-progress">
														<small class="fw-semibold">23.8k</small>
													</div>
												</div>
											</li>
											<li class="d-flex mb-4 pb-1">
												<div class="avatar flex-shrink-0 me-3">
													<span class="avatar-initial rounded bg-label-info"><i
															class='bx bx-home-alt'></i></span>
												</div>
												<div
													class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
													<div class="me-2">
														<h6 class="mb-0">Decor</h6>
														<small class="text-muted">Fine Art, Dining</small>
													</div>
													<div class="user-progress">
														<small class="fw-semibold">849k</small>
													</div>
												</div>
											</li>
											<li class="d-flex">
												<div class="avatar flex-shrink-0 me-3">
													<span class="avatar-initial rounded bg-label-secondary"><i
															class='bx bx-football'></i></span>
												</div>
												<div
													class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
													<div class="me-2">
														<h6 class="mb-0">Sports</h6>
														<small class="text-muted">Football, Cricket Kit</small>
													</div>
													<div class="user-progress">
														<small class="fw-semibold">99</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--/ Order Statistics -->

							<!-- Expense Overview -->
							<div class="col-md-6 col-lg-4 order-1 mb-4">
								<div class="card h-100">
									<div class="card-header">
										<ul class="nav nav-pills" role="tablist">
											<li class="nav-item">
												<button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
													data-bs-target="#navs-tabs-line-card-income"
													aria-controls="navs-tabs-line-card-income" aria-selected="true">Income</button>
											</li>
											<li class="nav-item">
												<button type="button" class="nav-link" role="tab">Expenses</button>
											</li>
											<li class="nav-item">
												<button type="button" class="nav-link" role="tab">Profit</button>
											</li>
										</ul>
									</div>
									<div class="card-body px-0">
										<div class="tab-content p-0">
											<div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
												<div class="d-flex p-4 pt-3">
													<div class="avatar flex-shrink-0 me-3">
														<img src="../../assets/img/icons/unicons/wallet.png" alt="User">
													</div>
													<div>
														<small class="text-muted d-block">Total Balance</small>
														<div class="d-flex align-items-center">
															<h6 class="mb-0 me-1">$459.10</h6>
															<small class="text-success fw-semibold">
																<i class='bx bx-chevron-up'></i>
																42.9%
															</small>
														</div>
													</div>
												</div>
												<div id="incomeChart"></div>
												<div class="d-flex justify-content-center pt-4 gap-2">
													<div class="flex-shrink-0">
														<div id="expensesOfWeek"></div>
													</div>
													<div>
														<p class="mb-n1 mt-1">Expenses This Week</p>
														<small class="text-muted">$39 less than last week</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ Expense Overview -->

							<!-- Transactions -->
							<div class="col-md-6 col-lg-4 order-2 mb-4">
								<div class="card h-100">
									<div class="card-header d-flex align-items-center justify-content-between">
										<h5 class="card-title m-0 me-2">Transactions</h5>
										<div class="dropdown">
											<button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
												<a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
												<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
												<a class="dropdown-item" href="javascript:void(0);">Last Year</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<ul class="p-0 m-0">
											<li class="d-flex mb-4 pb-1">
												<div class="avatar flex-shrink-0 me-3">
													<img src="../../assets/img/icons/unicons/paypal.png" alt="User" class="rounded">
												</div>
												<div
													class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
													<div class="me-2">
														<small class="text-muted d-block mb-1">Paypal</small>
														<h6 class="mb-0">Send money</h6>
													</div>
													<div class="user-progress d-flex align-items-center gap-1">
														<h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
													</div>
												</div>
											</li>
											<li class="d-flex mb-4 pb-1">
												<div class="avatar flex-shrink-0 me-3">
													<img src="../../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
												</div>
												<div
													class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
													<div class="me-2">
														<small class="text-muted d-block mb-1">Wallet</small>
														<h6 class="mb-0">Mac'D</h6>
													</div>
													<div class="user-progress d-flex align-items-center gap-1">
														<h6 class="mb-0">+270.69</h6> <span class="text-muted">USD</span>
													</div>
												</div>
											</li>
											<li class="d-flex mb-4 pb-1">
												<div class="avatar flex-shrink-0 me-3">
													<img src="../../assets/img/icons/unicons/chart.png" alt="User" class="rounded">
												</div>
												<div
													class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
													<div class="me-2">
														<small class="text-muted d-block mb-1">Transfer</small>
														<h6 class="mb-0">Refund</h6>
													</div>
													<div class="user-progress d-flex align-items-center gap-1">
														<h6 class="mb-0">+637.91</h6> <span class="text-muted">USD</span>
													</div>
												</div>
											</li>
											<li class="d-flex mb-4 pb-1">
												<div class="avatar flex-shrink-0 me-3">
													<img src="../../assets/img/icons/unicons/cc-success.png" alt="User"
														class="rounded">
												</div>
												<div
													class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
													<div class="me-2">
														<small class="text-muted d-block mb-1">Credit Card</small>
														<h6 class="mb-0">Ordered Food</h6>
													</div>
													<div class="user-progress d-flex align-items-center gap-1">
														<h6 class="mb-0">-838.71</h6> <span class="text-muted">USD</span>
													</div>
												</div>
											</li>
											<li class="d-flex mb-4 pb-1">
												<div class="avatar flex-shrink-0 me-3">
													<img src="../../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
												</div>
												<div
													class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
													<div class="me-2">
														<small class="text-muted d-block mb-1">Wallet</small>
														<h6 class="mb-0">Starbucks</h6>
													</div>
													<div class="user-progress d-flex align-items-center gap-1">
														<h6 class="mb-0">+203.33</h6> <span class="text-muted">USD</span>
													</div>
												</div>
											</li>
											<li class="d-flex">
												<div class="avatar flex-shrink-0 me-3">
													<img src="../../assets/img/icons/unicons/cc-warning.png" alt="User"
														class="rounded">
												</div>
												<div
													class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
													<div class="me-2">
														<small class="text-muted d-block mb-1">Mastercard</small>
														<h6 class="mb-0">Ordered Food</h6>
													</div>
													<div class="user-progress d-flex align-items-center gap-1">
														<h6 class="mb-0">-92.45</h6> <span class="text-muted">USD</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--/ Transactions -->
							<!-- Activity Timeline -->
							<div class="col-md-12 col-lg-6 order-4 order-lg-3 ">
								<div class="card">
									<div class="card-header d-flex align-items-center justify-content-between">
										<h5 class="card-title m-0 me-2">Activity Timeline</h5>
										<div class="dropdown">
											<button class="btn p-0" type="button" id="timelineWapper" data-bs-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineWapper">
												<a class="dropdown-item" href="javascript:void(0);">Select All</a>
												<a class="dropdown-item" href="javascript:void(0);">Refresh</a>
												<a class="dropdown-item" href="javascript:void(0);">Share</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<!-- Activity Timeline -->
										<ul class="timeline">
											<li class="timeline-item timeline-item-transparent">
												<span class="timeline-point timeline-point-primary"></span>
												<div class="timeline-event">
													<div class="timeline-header mb-1">
														<h6 class="mb-0">12 Invoices have been paid</h6>
														<small class="text-muted">12 min ago</small>
													</div>
													<p class="mb-2">Invoices have been paid to the company</p>
													<div class="d-flex">
														<a href="javascript:void(0)" class="d-flex align-items-center me-3">
															<img src="../../assets/img/icons/misc/pdf.png" alt="PDF image" width="23"
																class="me-2">
															<h6 class="mb-0">invoices.pdf</h6>
														</a>
													</div>
												</div>
											</li>
											<li class="timeline-item timeline-item-transparent">
												<span class="timeline-point timeline-point-warning"></span>
												<div class="timeline-event">
													<div class="timeline-header mb-1">
														<h6 class="mb-0">Client Meeting</h6>
														<small class="text-muted">45 min ago</small>
													</div>
													<p class="mb-2">Project meeting with john @10:15am</p>
													<div class="d-flex flex-wrap">
														<div class="avatar me-3">
															<img src="../../assets/img/avatars/3.png" alt="Avatar"
																class="rounded-circle" />
														</div>
														<div>
															<h6 class="mb-0">Lester McCarthy (Client)</h6>
															<span>CEO of ThemeSelection</span>
														</div>
													</div>
												</div>
											</li>
											<li class="timeline-item timeline-item-transparent">
												<span class="timeline-point timeline-point-info"></span>
												<div class="timeline-event pb-0">
													<div class="timeline-header mb-1">
														<h6 class="mb-0">Create a new project for client</h6>
														<small class="text-muted">2 Day Ago</small>
													</div>
													<p class="mb-2">5 team members in a project</p>
													<div class="d-flex align-items-center avatar-group">
														<div class="avatar pull-up" data-bs-toggle="tooltip"
															data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy">
															<img src="../../assets/img/avatars/5.png" alt="Avatar"
																class="rounded-circle">
														</div>
														<div class="avatar pull-up" data-bs-toggle="tooltip"
															data-popup="tooltip-custom" data-bs-placement="top" title="Marrie Patty">
															<img src="../../assets/img/avatars/12.png" alt="Avatar"
																class="rounded-circle">
														</div>
														<div class="avatar pull-up" data-bs-toggle="tooltip"
															data-popup="tooltip-custom" data-bs-placement="top" title="Jimmy Jackson">
															<img src="../../assets/img/avatars/9.png" alt="Avatar"
																class="rounded-circle">
														</div>
														<div class="avatar pull-up" data-bs-toggle="tooltip"
															data-popup="tooltip-custom" data-bs-placement="top" title="Kristine Gill">
															<img src="../../assets/img/avatars/6.png" alt="Avatar"
																class="rounded-circle">
														</div>
														<div class="avatar pull-up" data-bs-toggle="tooltip"
															data-popup="tooltip-custom" data-bs-placement="top" title="Nelson Wilson">
															<img src="../../assets/img/avatars/14.png" alt="Avatar"
																class="rounded-circle">
														</div>
													</div>
												</div>
											</li>
											<li class="timeline-end-indicator">
												<i class="bx bx-check-circle"></i>
											</li>
										</ul>
										<!-- /Activity Timeline -->
									</div>
								</div>
							</div>
							<!--/ Activity Timeline -->
							<!-- pill table -->
							<div class="col-md-6 order-3 order-lg-4 mb-4 mb-lg-0">
								<div class="card text-center">
									<div class="card-header py-3">
										<ul class="nav nav-pills" role="tablist">
											<li class="nav-item">
												<button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
													data-bs-target="#navs-pills-browser" aria-controls="navs-pills-browser"
													aria-selected="true">Browser</button>
											</li>
											<li class="nav-item">
												<button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
													data-bs-target="#navs-pills-os" aria-controls="navs-pills-os"
													aria-selected="false">Operating
													System</button>
											</li>
											<li class="nav-item">
												<button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
													data-bs-target="#navs-pills-country" aria-controls="navs-pills-country"
													aria-selected="false">Country</button>
											</li>
										</ul>
									</div>
									<div class="tab-content pt-0">
										<div class="tab-pane fade show active" id="navs-pills-browser" role="tabpanel">
											<div class="table-responsive text-start">
												<table class="table table-borderless text-nowrap">
													<thead>
														<tr>
															<th>No</th>
															<th>Browser</th>
															<th>Visits</th>
															<th class="w-50">Data In Percentage</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/chrome.png" alt="Chrome"
																		height="24" class="me-2">
																	<span>Chrome</span>
																</div>
															</td>
															<td>8.92k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-success" role="progressbar"
																			style="width: 84.75%" aria-valuenow="84.75" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">84.75%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>2</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/safari.png" alt="Safari"
																		height="24" class="me-2">
																	<span>Safari</span>
																</div>
															</td>
															<td>7.29k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-primary" role="progressbar"
																			style="width: 72.43%" aria-valuenow="72.43" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">72.43%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/firefox.png" alt="Firefox"
																		height="24" class="me-2">
																	<span>Firefox</span>
																</div>
															</td>
															<td>6.11k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-primary" role="progressbar"
																			style="width: 67.37%" aria-valuenow="67.37" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">67.37%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>4</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/edge.png" alt="Edge"
																		height="24" class="me-2">
																	<span>Edge</span>
																</div>
															</td>
															<td>5.08k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-info" role="progressbar"
																			style="width: 60.12%" aria-valuenow="60.12" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">60.12%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>5</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/opera.png" alt="Opera"
																		height="24" class="me-2">
																	<span>Opera</span>
																</div>
															</td>
															<td>3.93k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-info" role="progressbar"
																			style="width: 51.94%" aria-valuenow="51.94" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">51.94%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>6</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/brave.png" alt="Brave"
																		height="24" class="me-2">
																	<span>Brave</span>
																</div>
															</td>
															<td>3.19k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-warning" role="progressbar"
																			style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">39.94%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>7</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/vivaldi.png" alt="Vivaldi"
																		height="24" class="me-2">
																	<span>Vivaldi</span>
																</div>
															</td>
															<td>1.29k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-danger" role="progressbar"
																			style="width: 28.43%" aria-valuenow="28.43" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">18.43%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>8</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/uc.png" alt="UC Browser"
																		height="24" class="me-2">
																	<span>UC Browser</span>
																</div>
															</td>
															<td>328</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-danger" role="progressbar"
																			style="width: 20.14%" aria-valuenow="20.14" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">20.14%</small>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="navs-pills-os" role="tabpanel">
											<div class="table-responsive text-start">
												<table class="table table-borderless">
													<thead>
														<tr>
															<th>No</th>
															<th>System</th>
															<th>Visits</th>
															<th class="w-50">Data In Percentage</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/windows.png" alt="Windows"
																		height="24" class="me-2">
																	<span>Windows</span>
																</div>
															</td>
															<td>875.24k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-success" role="progressbar"
																			style="width: 71.50%" aria-valuenow="71.50" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">71.50%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>2</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/mac.png" alt="Mac"
																		height="24" class="me-2">
																	<span>Mac</span>
																</div>
															</td>
															<td>89.68k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-primary" role="progressbar"
																			style="width: 66.67%" aria-valuenow="66.67" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">66.67%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/ubuntu.png" alt="Ubuntu"
																		height="24" class="me-2">
																	<span>Ubuntu</span>
																</div>
															</td>
															<td>37.68k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-info" role="progressbar"
																			style="width: 62.82%" aria-valuenow="62.82" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">62.82%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>4</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/chrome.png" alt="Chrome"
																		height="24" class="me-2">
																	<span>Chrome</span>
																</div>
															</td>
															<td>35.34k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-info" role="progressbar"
																			style="width: 56.25%" aria-valuenow="56.25" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">56.25%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>5</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/cent.png" alt="Cent"
																		height="24" class="me-2">
																	<span>Cent</span>
																</div>
															</td>
															<td>32.25k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-info" role="progressbar"
																			style="width: 42.76%" aria-valuenow="42.76" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">42.76%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>6</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/linux.png" alt="Linux"
																		height="24" class="me-2">
																	<span>Linux</span>
																</div>
															</td>
															<td>22.15k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-warning" role="progressbar"
																			style="width: 37.77%" aria-valuenow="37.77" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">37.77%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>7</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/fedora.png" alt="Fedora"
																		height="24" class="me-2">
																	<span>Fedora</span>
																</div>
															</td>
															<td>1.13k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-danger" role="progressbar"
																			style="width: 29.16%" aria-valuenow="29.16" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">29.16%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>8</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/img/icons/brands/vivaldi-os.png" alt="Vivaldi"
																		height="24" class="me-2">
																	<span>Vivaldi</span>
																</div>
															</td>
															<td>1.09k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-danger" role="progressbar"
																			style="width: 26.26%" aria-valuenow="26.26" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">26.26%</small>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="navs-pills-country" role="tabpanel">
											<div class="table-responsive text-start">
												<table class="table table-borderless">
													<thead>
														<tr>
															<th>No</th>
															<th>Country</th>
															<th>Visits</th>
															<th class="w-50">Data In Percentage</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/svg/flags/us.svg" alt="USA" height="24"
																		class="me-2">
																	<span>USA</span>
																</div>
															</td>
															<td>87.24k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-success" role="progressbar"
																			style="width: 89.12%" aria-valuenow="89.12" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">89.12%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>2</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/svg/flags/br.svg" alt="Brazil" height="24"
																		class="me-2">
																	<span>Brazil</span>
																</div>
															</td>
															<td>62.68k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-primary" role="progressbar"
																			style="width: 78.23%" aria-valuenow="78.23" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">78.23%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/svg/flags/in.svg" alt="India" height="24"
																		class="me-2">
																	<span>India</span>
																</div>
															</td>
															<td>52.58k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-info" role="progressbar"
																			style="width: 69.82%" aria-valuenow="69.82" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">69.82%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>4</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/svg/flags/au.svg" alt="Australia" height="24"
																		class="me-2">
																	<span>Australia</span>
																</div>
															</td>
															<td>44.13k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-warning" role="progressbar"
																			style="width: 59.90%" aria-valuenow="59.90" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">59.90%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>5</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/svg/flags/de.svg" alt="Germany" height="24"
																		class="me-2">
																	<span>Germany</span>
																</div>
															</td>
															<td>32.21k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-warning" role="progressbar"
																			style="width: 57.11%" aria-valuenow="57.11" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">57.11%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>6</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/svg/flags/fr.svg" alt="France" height="24"
																		class="me-2">
																	<span>France</span>
																</div>
															</td>
															<td>37.87k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-warning" role="progressbar"
																			style="width: 41.23%" aria-valuenow="41.23" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">41.23%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>7</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/svg/flags/pt.svg" alt="Portugal" height="24"
																		class="me-2">
																	<span>Portugal</span>
																</div>
															</td>
															<td>20.29k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-danger" role="progressbar"
																			style="width: 37.11%" aria-valuenow="37.11" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">37.11%</small>
																</div>
															</td>
														</tr>
														<tr>
															<td>8</td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="../../assets/svg/flags/cn.svg" alt="China" height="24"
																		class="me-2">
																	<span>China</span>
																</div>
															</td>
															<td>12.21k</td>
															<td>
																<div class="d-flex justify-content-between align-items-center gap-3">
																	<div class="progress w-100" style="height:10px;">
																		<div class="progress-bar bg-danger" role="progressbar"
																			style="width: 17.61%" aria-valuenow="17.61" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																	<small class="fw-semibold">17.61%</small>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ pill table -->
						</div>


					</div>
					<!-- / Content -->




					<!-- Footer -->
					<footer class="content-footer footer bg-footer-theme">
						<div
							class="container-xxl d-flex flex-wrap justify-content-between align-items-center py-2 flex-md-row flex-column">
							<div class="mb-2 mb-md-0">
								© <script>
									document.write(new Date().getFullYear())
								</script>
								, made with ❤️ by <a href="https://themeselection.com" target="_blank"
									class="footer-link fw-bolder">ThemeSelection</a>
							</div>
							<div>

								<a href="https://themeselection.com/license/" class="footer-link me-4"
									target="_blank">License</a>
								<a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

								<a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
									target="_blank" class="footer-link me-4">Documentation</a>

								<a href="https://themeselection.com/support/" target="_blank" class="footer-link">Support</a>

							</div>
						</div>
					</footer>
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


	<div class="buy-now">
		<a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"
			class="btn btn-danger btn-buy-now">Buy Now</a>
	</div>


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
	<!-- endbuild -->

	<!-- Vendors JS -->
	<script src="{{ asset('js/bt5/libs/apexcharts.js') }}"></script>

	<!-- Main JS -->
	<script src="{{ asset('js/bt5/main.js') }}"></script>

	<!-- Page JS -->
	<script src="{{ asset('js/bt5/dashboards-analytics.js') }}"></script>
</body>

</html>