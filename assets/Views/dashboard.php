<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title> INICIO </title>

		<!-- Meta -->
		<meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="dashboard\design\assets\images\favicon.svg" /> assets/images/favicon.svg

		<!-- *************
			************ CSS Files *************
		************* -->
		<link rel="stylesheet" href="dashboard\design\assets\fonts\bootstrap\bootstrap-icons.css" />assets/fonts/bootstrap/bootstrap-icons.css
		<link rel="stylesheet" href="dashboard\design\assets\css\main.min.css" />assets/css/main.min.css

		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="dashboard\design\assets\vendor\overlay-scroll\OverlayScrollbars.min.css" />assets/vendor/overlay-scroll/OverlayScrollbars.min.css

		<!-- Toastify CSS -->
		<link rel="stylesheet" href="dashboard\design\assets\vendor\toastify\toastify.css" />assets/vendor/toastify/toastify.css

	</head>

	<body>

		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- App header starts -->
			<div class="app-header d-flex align-items-center">

				<!-- Toggle buttons start -->
				<div class="d-flex">
					<button class="toggle-sidebar" id="toggle-sidebar">
						<i class="bi bi-list lh-1"></i>
					</button>
					<button class="pin-sidebar" id="pin-sidebar">
						<i class="bi bi-list lh-1"></i>
					</button>
				</div>
				<!-- Toggle buttons end -->

				<!-- App brand starts -->
				<div class="app-brand py-2 ms-3">
					<a href="index.html" class="d-sm-block d-none">
						<img src="dashboard\design\assets\images\logo.svg" class="logo" alt="Bootstrap Gallery" />
					</a> //assets/images/logo.svg
					<a href="index.html" class="d-sm-none d-block">
						<img src="dashboard\design\assets\images\logo-sm.svg" class="logo" alt="Bootstrap Gallery" />
					</a>//assets/images/logo-sm.svg
				</div>
				<!-- App brand ends -->

				<!-- App header actions start -->
				<div class="header-actions col">
					<div class="d-lg-flex d-none">
						<div class="dropdown">
							<a class="dropdown-toggle d-flex px-3 py-4 position-relative" href="#!" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-grid fs-4 lh-1 text-secondary"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end shadow-lg">
								<!-- Row start -->
								<div class="d-flex gap-2 m-2">
									<a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
										<img src="dashboard\design\assets\images\brand-behance.svg" class="img-3x" alt="Admin Themes" />
									</a>//assets/images/brand-behance.svg
									<a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
										<img src="dashboard\design\assets\images\brand-gatsby.svg" class="img-3x" alt="Admin Themes" />
									</a>//assets/images/brand-gatsby.svg
									<a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
										<img src="dashboard\design\assets\images\brand-google.svg" class="img-3x" alt="Admin Themes" />
									</a>//assets/images/brand-google.svg
									<a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
										<img src="dashboard\design\assets\images\brand-bitcoin.svg" class="img-3x" alt="Admin Themes" />
									</a>//assets/images/brand-bitcoin.svg
									<a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
										<img src="dashboard\design\assets\images\brand-dribbble.svg" class="img-3x" alt="Admin Themes" />
									</a>//assets/images/brand-dribbble.svg
								</div>
								<!-- Row end -->
							</div>
						</div>
						<div class="dropdown border-start">
							<a class="dropdown-toggle d-flex px-3 py-4 position-relative" href="#!" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-exclamation-triangle fs-4 lh-1 text-secondary"></i>
								<span class="count-label warning"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end shadow-lg">
								<h5 class="fw-semibold px-3 py-2 text-primary">
									Notifications
								</h5>
								<div class="dropdown-item">
									<div class="d-flex py-2 border-bottom">
										<div class="icon-box md bg-success rounded-circle me-3">
											<i class="bi bi-exclamation-triangle text-white fs-4"></i>
										</div>
										<div class="m-0">
											<h6 class="mb-1 fw-semibold">Rosalie Deleon</h6>
											<p class="mb-1">You have new order.</p>
											<p class="small m-0 text-secondary">30 mins ago</p>
										</div>
									</div>
								</div>
								<div class="dropdown-item">
									<div class="d-flex py-2 border-bottom">
										<div class="icon-box md bg-danger rounded-circle me-3">
											<i class="bi bi-exclamation-octagon text-white fs-4"></i>
										</div>
										<div class="m-0">
											<h6 class="mb-1 fw-semibold">Donovan Stuart</h6>
											<p class="mb-1">Membership has been expired.</p>
											<p class="small m-0 text-secondary">2 days ago</p>
										</div>
									</div>
								</div>
								<div class="dropdown-item">
									<div class="d-flex py-2">
										<div class="icon-box md bg-warning rounded-circle me-3">
											<i class="bi bi-exclamation-square text-white fs-4"></i>
										</div>
										<div class="m-0">
											<h6 class="mb-1 fw-semibold">Roscoe Richards</h6>
											<p class="mb-1">Payment pending. Pay now.</p>
											<p class="small m-0 text-secondary">3 days ago</p>
										</div>
									</div>
								</div>
								<div class="d-grid mx-3 my-1">
									<a href="javascript:void(0)" class="btn btn-primary">View all</a>
								</div>
							</div>
						</div>
						<div class="dropdown border-start">
							<a class="dropdown-toggle d-flex px-3 py-4 position-relative" href="#!" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-bell fs-4 lh-1 text-secondary"></i>
								<span class="count-label info"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end shadow-lg">
								<h5 class="fw-semibold px-3 py-2 text-primary">Updates</h5>
								<div class="dropdown-item">
									<div class="d-flex py-2 border-bottom">
										<div class="icon-box md bg-success rounded-circle me-3">
											<span class="fw-bold text-white">DS</span>
										</div>
										<div class="m-0">
											<h6 class="mb-1 fw-semibold">Douglass Shaw</h6>
											<p class="mb-1">
												Membership has been ended.
											</p>
											<p class="small m-0 text-secondary">Today, 07:30pm</p>
										</div>
									</div>
								</div>
								<div class="dropdown-item">
									<div class="d-flex py-2 border-bottom">
										<div class="icon-box md bg-danger rounded-circle me-3">
											<span class="fw-bold text-white">WG</span>
										</div>
										<div class="m-0">
											<h6 class="mb-1 fw-semibold">Willie Garrison</h6>
											<p class="mb-1">
												Congratulate, James for new job.
											</p>
											<p class="small m-0 text-secondary">Today, 08:00pm</p>
										</div>
									</div>
								</div>
								<div class="dropdown-item">
									<div class="d-flex py-2">
										<div class="icon-box md bg-warning rounded-circle me-3">
											<span class="fw-bold text-white">TJ</span>
										</div>
										<div class="m-0">
											<h6 class="mb-1 fw-semibold">Terry Jenkins</h6>
											<p class="mb-1">
												Lewis added new schedule release.
											</p>
											<p class="small m-0 text-secondary">Today, 09:30pm</p>
										</div>
									</div>
								</div>
								<div class="d-grid mx-3 my-1">
									<a href="javascript:void(0)" class="btn btn-primary">View all</a>
								</div>
							</div>
						</div>
						<div class="dropdown border-start">
							<a class="dropdown-toggle d-flex px-3 py-4 position-relative" href="#!" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-envelope-open fs-4 lh-1 text-secondary"></i>
								<span class="count-label"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end shadow-lg">
								<h5 class="fw-semibold px-3 py-2 text-primary">Messages</h5>
								<div class="dropdown-item">
									<div class="d-flex py-2 border-bottom">
										<img src="dashboard\design\assets\images\user3.png" class="img-3x me-3 rounded-5" alt="Admin Theme" />
										//assets/images/user3.png
                                        <div class="m-0">
											<h6 class="mb-1 fw-semibold">ITZELPEREZ</h6>
											<p class="mb-1">
												AYUDAAAAAAAAAA
											</p>
											<p class="small m-0 text-secondary">Today, 07:30pm</p>
										</div>
									</div>
								</div>
								<div class="dropdown-item">
									<div class="d-flex py-2 border-bottom">
										<img src="dashboard\design\assets\images\user1.png" class="img-3x me-3 rounded-5" alt="Admin Theme" />
										//assets/images/user1.png
                                        
                                    <div class="m-0">
											<h6 class="mb-1 fw-semibold">Clyde Fowler</h6>
											<p class="mb-1">
												Congratulate, James for new job.
											</p>
											<p class="small m-0 text-secondary">Today, 08:00pm</p>
										</div>
									</div>
								</div>
								<div class="dropdown-item">
									<div class="d-flex py-2">
										<img src="dashboard\design\assets\images\user4.png" class="img-3x me-3 rounded-5" alt="Admin Theme" />
										//assets/images/user4.png
                                        <div class="m-0">
											<h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
											<p class="mb-1">
												Lewis added new schedule release.
											</p>
											<p class="small m-0 text-secondary">Today, 09:30pm</p>
										</div>
									</div>
								</div>
								<div class="d-grid mx-3 my-1">
									<a href="javascript:void(0)" class="btn btn-primary">View all</a>
								</div>
							</div>
						</div>
					</div>
					<div class="dropdown ms-2">
						<a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none" href="#!"
							role="button" data-bs-toggle="dropdown" aria-expanded="false">
							//assets/images/user.png
                            <img src="dashboard\design\assets\images\user.png" class="rounded-2 img-3x" alt="Bootstrap Gallery" />
							<span class="ms-2 text-truncate d-lg-block d-none">Anne Santiago</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end shadow-lg">
							<div class="header-action-links mx-3 gap-2">
								<a class="dropdown-item" href="profile.html"><i class="bi bi-person text-primary"></i>Profile</a>
								<a class="dropdown-item" href="settings.html"><i class="bi bi-gear text-danger"></i>Settings</a>
								<a class="dropdown-item" href="widgets.html"><i class="bi bi-box text-success"></i>Widgets</a>
							</div>
							<div class="mx-3 mt-2 d-grid">
								<a href="login.html" class="btn btn-primary btn-sm">Logout</a>
							</div>
						</div>
					</div>
				</div>
				<!-- App header actions end -->

			</div>
			<!-- App header ends -->

			<!-- Main container start -->
			<div class="main-container">

				<!-- Sidebar wrapper start -->
				<nav id="sidebar" class="sidebar-wrapper">

					<!-- Sidebar profile starts -->
					<div class="shop-profile">
						<p class="mb-1 fw-bold text-primary">Equipo</p>
						<p class="m-0">LOS TIFONES DE TIJUANA</p>
					</div>
					<!-- Sidebar profile ends -->

					<!-- Sidebar menu starts -->
					<div class="sidebarMenuScroll">
						<ul class="sidebar-menu">
							<li class="active current-page">
								<a href="index.html">
									<i class="bi bi-pie-chart"></i>
									<span class="menu-text">Dashboard</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\analytics.html">//analytics.html
									<i class="bi bi-bar-chart-line"></i>
									<span class="menu-text">Analytics</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\widgets.html">//widgets.html
									<i class="bi bi-box"></i>
									<span class="menu-text">Widgets</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\calendar.html">//calendar.html
									<i class="bi bi-calendar2"></i>
									<span class="menu-text">Calendar</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="bi bi-stickies"></i>
									<span class="menu-text">Components</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="dashboard\design\accordions.html">Accordions</a>Ç
                                        //accordions.html
									</li>
									<li>
										<a href="dashboard\design\alerts.html">Alerts</a>
                                        //alerts.html
									</li>
									<li>
										<a href="dashboard\design\buttons.html">Buttons</a>
                                        //buttons.html
									</li>
									<li>
										<a href="dashboard\design\badges.html">Badges</a>
                                        //badges.html
									</li>
									<li>
										<a href="dashboard\design\carousel.html">Carousel</a>
                                        //carousel.html
									</li>
									<li>
										<a href="dashboard\design\list-items.html">List Items</a>
                                        //list-items.html
									</li>
									<li>
										<a href="dashboard\design\progress.html">Progress Bars</a>
                                        //progress.html
									</li>
									<li>
										<a href="dashboard\design\popovers.html">Popovers</a>
                                        //popovers.html
									</li>
									<li>
										<a href="dashboard\design\tooltips.html">Tooltips</a>
                                        //tooltips.html
									</li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="bi bi-ui-checks-grid"></i>
									<span class="menu-text">Formulario</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="dashboard\design\form-inputs.html">Form Inputs</a>
                                        //form-inputs.html
									</li>
									<li>
										<a href="dashboard\design\form-checkbox-radio.html">Checkbox &amp; Radio</a>
                                        //form-checkbox-radio.html
									</li>
									<li>
										<a href="dashboard\design\form-file-input.html">File Input</a>
                                        //form-file-input.html
									</li>
									<li>
										<a href="dashboard\design\form-validations.html">Validations</a>
                                        //form-validations.html
									</li>
									<li>
										<a href="dashboard\design\date-time-pickers.html">Date Time Pickers</a>
                                        //date-time-pickers.html
									</li>
									<li>
										<a href="dashboard\design\form-layouts.html">Form Layouts</a>
                                        //form-layouts.html
									</li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="bi bi-window-sidebar"></i>
									<span class="menu-text">Invoices</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="dashboard\design\create-invoice.html">Create Invoice</a>
                                        //create-invoice.html
									</li>
									<li>
										<a href="dashboard\design\view-invoice.html">View Invoice</a>
                                        //view-invoice.html
									</li>
									<li>
										<a href="dashboard\design\invoice-list.html">Invoice List</a>
                                        //invoice-list.html
									</li>
								</ul>
							</li>
							<li>
								<a href="dashboard\design\tables.html">
                                    //tables.html
									<i class="bi bi-border-all"></i>
									<span class="menu-text">Tables</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\events.html">
                                    //events.html
									<i class="bi bi-calendar4"></i>
									<span class="menu-text">Events</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\subscribers.html">
                                    //subscribers.html
									<i class="bi bi-check-circle"></i>
									<span class="menu-text">Subscribers</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\contacts.html">
                                    //contacts.html
									<i class="bi bi-wallet2"></i>
									<span class="menu-text">Contacts</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\settings.html">
                                    //settings.html
									<i class="bi bi-gear"></i>
									<span class="menu-text">Settings</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\profile.html">
                                    //profile.html
									<i class="bi bi-person-square"></i>
									<span class="menu-text">Profile</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="bi bi-code-square"></i>
									<span class="menu-text">Cards</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="dashboard\design\cards.html">Cards</a>
                                        //cards.html
									</li>
									<li>
										<a href="dashboard\design\advanced-cards.html">Advanced Cards</a>
                                        //advanced-cards.html
									</li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="bi bi-pie-chart"></i>
									<span class="menu-text">Graphs</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="dashboard\design\apex.html">Apex</a>
                                        //apex.html
									</li>
									<li>
										<a href="dashboard\design\morris.html">Morris</a>
                                        //morris.html
									</li>
								</ul>
							</li>
							<li>
								<a href="dashboard\design\maps.html">
                                    //maps.html
									<i class="bi bi-pin-map"></i>
									<span class="menu-text">Maps</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\tabs.html">
                                    //tabs.html
									<i class="bi bi-slash-square"></i>
									<span class="menu-text">Tabs</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\modals.html">
                                    //modals.html
									<i class="bi bi-terminal"></i>
									<span class="menu-text">Modals</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\icons.html">
                                    //icons.html
									<i class="bi bi-textarea"></i>
									<span class="menu-text">Icons</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\typography.html">
                                    //typography.html
									<i class="bi bi-explicit"></i>
									<span class="menu-text">Typography</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="bi bi-upc-scan"></i>
									<span class="menu-text">Login/Signup</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="dashboard\design\login.html">Login</a>
                                        //login.html
									</li>
									<li>
										<a href="dashboard\design\signup.html">Signup</a>
                                        //signup.html
									</li>
									<li>
										<a href="dashboard\design\forgot-password.html">Forgot Password</a>
                                        //forgot-password.html
									</li>
								</ul>
							</li>
							<li>
								<a href="page-not-found.html">
									<i class="bi bi-exclamation-diamond"></i>
									<span class="menu-text">Page Not Found</span>
								</a>
							</li>
							<li>
								<a href="dashboard\design\maintenance.html">
                                    //maintenance.html
									<i class="bi bi-exclamation-octagon"></i>
									<span class="menu-text">Maintenance</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="bi bi-code-square"></i>
									<span class="menu-text">Multi Level</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="#!">Level One Link</a>
									</li>
									<li>
										<a href="#!">
											Level One Menu
											<i class="bi bi-chevron-right"></i>
										</a>
										<ul class="treeview-menu">
											<li>
												<a href="#!">Level Two Link</a>
											</li>
											<li>
												<a href="#!">Level Two Menu
													<i class="bi bi-chevron-right"></i>
												</a>
												<ul class="treeview-menu">
													<li>
														<a href="#!">Level Three Link</a>
													</li>
													<li>
														<a href="#!">Level Three Link</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#!">Level One Link</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- Sidebar menu ends -->

				</nav>
				<!-- Sidebar wrapper end -->

				<!-- App container starts -->
				<div class="app-container">
					<!-- App hero header starts -->
					<div class="app-hero-header d-flex align-items-center">
						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<i class="bi bi-house lh-1 pe-3 me-3 border-end border-dark"></i>
								<a href="index.html" class="text-decoration-none">Home</a>
							</li>
							<li class="breadcrumb-item text-secondary" aria-current="page">
								Dashboard
							</li>
						</ol>
						<!-- Breadcrumb end -->

						<!-- Sales stats start -->
						<div class="ms-auto d-lg-flex d-none flex-row">
							<div class="d-flex flex-row gap-2">
								<button class="btn btn-sm btn-primary">Today</button>
								<button class="btn btn-sm btn-white">7d</button>
								<button class="btn btn-sm btn-white">2w</button>
								<button class="btn btn-sm btn-white">1m</button>
								<button class="btn btn-sm btn-white">3m</button>
								<button class="btn btn-sm btn-white">6m</button>
								<button class="btn btn-sm btn-white">1y</button>
							</div>
						</div>
						<!-- Sales stats end -->

					</div>
					<!-- App Hero header ends -->

					<!-- App body starts -->
					<div class="app-body">

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<div class="mb-2">
											<i class="bi bi-bar-chart fs-1 text-primary lh-1"></i>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<h5 class="m-0 text-secondary fw-normal">Sales</h5>
											<h3 class="m-0 text-primary">3500</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<div class="mb-2">
											<i class="bi bi-bag-check fs-1 text-primary lh-1"></i>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<h5 class="m-0 text-secondary fw-normal">Orders</h5>
											<h3 class="m-0 text-primary">2900</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<div class="arrow-label">+18%</div>
										<div class="mb-2">
											<i class="bi bi-box-seam fs-1 text-primary lh-1"></i>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<h5 class="m-0 text-secondary fw-normal">Items</h5>
											<h3 class="m-0 text-primary">6500</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<div class="arrow-label">+24%</div>
										<div class="mb-2">
											<i class="bi bi-bell fs-1 text-primary lh-1"></i>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<h5 class="m-0 text-secondary fw-normal">Signups</h5>
											<h3 class="m-0 text-primary">7200</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-xxl-12">
								<div class="card mb-3">
									<div class="card-header d-flex justify-content-between align-items-center">
										<h5 class="card-title">Overview</h5>
										<button class="btn btn-outline-primary btn-sm ms-auto">
											Download
										</button>
									</div>
									<div class="card-body">
										<!-- Row start -->
										<div class="row gx-3">
											<div class="col-lg-5 col-sm-12 col-12">
												<h6 class="text-center mb-3">Visitors</h6>
												<div id="visitors"></div>
												<div class="my-3 text-center">
													<div class="badge bg-danger bg-opacity-10 text-danger">
														10% higher than last month
													</div>
												</div>
											</div>
											<div class="col-lg-2 col-sm-12 col-12">
												<div class="border px-2 py-4 rounded-5 h-100 text-center">
													<h6 class="mt-3 mb-5">Monthly Average</h6>
													<div class="mb-5">
														<h2 class="text-primary">9600</h2>
														<h6 class="text-secondary fw-light">Visitors</h6>
													</div>
													<div class="mb-4">
														<h2 class="text-danger">$450<sup>k</sup></h2>
														<h6 class="text-secondary fw-light">Sales</h6>
													</div>
												</div>
											</div>
											<div class="col-lg-5 col-sm-12 col-12">
												<h6 class="text-center mb-3">Sales</h6>
												<div id="sales"></div>
												<div class="my-3 text-center">
													<div class="badge bg-primary bg-opacity-10 text-primary">
														12% higher than last month
													</div>
												</div>
											</div>
										</div>
										<!-- Row ends -->
									</div>
								</div>
							</div>
						</div>
						<!-- Row ends -->

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-xl-8 col-lg-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Team Activity</h5>
									</div>
									<div class="card-body">
										<ul class="m-0 p-0">
											<li class="team-activity d-flex flex-wrap">
												<div class="activity-time py-2 me-3">
													<p class="m-0">10:30AM</p>
													<span class="badge bg-primary">New</span>
												</div>
												<div class="d-flex flex-column py-2">
													<h6>Earth - Admin Dashboard</h6>
													<p class="m-0 text-secondary">by Elnathan Lois</p>
												</div>
												<div class="ms-auto mt-4">
													<div class="progress small mb-1">
														<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<p class="text-secondary">(225 of 700gb)</p>
												</div>
											</li>
											<li class="team-activity d-flex flex-wrap">
												<div class="activity-time py-2 me-3">
													<p class="m-0">11:30AM</p>
													<span class="badge bg-primary">Task</span>
												</div>
												<div class="d-flex flex-column py-2">
													<h6>Bootstrap Gallery Admin Templates</h6>
													<p class="m-0 text-secondary">by Patrobus Nicole</p>
												</div>
												<div class="ms-auto mt-4">
													<div class="progress small mb-1">
														<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<p class="text-secondary">90% completed</p>
												</div>
											</li>
											<li class="team-activity d-flex flex-wrap">
												<div class="activity-time py-2 me-3">
													<p class="m-0">12:50PM</p>
													<span class="badge bg-danger">Closed</span>
												</div>
												<div class="d-flex flex-column py-2">
													<h6>Bootstrap Admin Themes</h6>
													<p class="m-0 text-secondary">by Abilene Omega</p>
												</div>
												<div class="ms-auto mt-3">
													<div id="sparkline1"></div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Tasks</h5>
									</div>
									<div class="card-body">
										<div class="auto-align-graph">
											<div id="tasks"></div>
										</div>
										<div class="grid text-center">
											<div class="g-col-4">
												<i class="bi bi-triangle text-warning"></i>
												<h3 class="m-0 mt-1">7</h3>
												<p class="text-secondary m-0">Ongoing</p>
											</div>
											<div class="g-col-4">
												<i class="bi bi-triangle text-primary"></i>
												<h3 class="m-0 mt-1 fw-bolder">9</h3>
												<p class="text-secondary m-0">Pending</p>
											</div>
											<div class="g-col-4">
												<i class="bi bi-triangle text-danger"></i>
												<h3 class="m-0 mt-1">12</h3>
												<p class="text-secondary m-0">Completed</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-xl-4 col-sm-6">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Events</h5>
									</div>
									<div class="card-body">
										<div class="bg-light px-3 py-2 d-flex justify-content-between align-items-center">
											<div id="todays-date" class="fw-semibold"></div>
											<div class="badge rounded-pill bg-primary fs-6">
												<span>21</span> Events
											</div>
										</div>
										<div class="event-list mt-3">
											<div class="d-flex align-items-center mb-4">
												//assets/images/checked.svg
                                            <img src="dashboard\design\assets\images\checked.svg" alt="Bootstrap Gallery" class="img-2x" />
												<div class="ms-3">
													<h6 class="text-primary mb-1 fw-bold">11:30AM</h6>
													<h6 class="m-0 text-secondary fw-normal">
														Product Launch
													</h6>
												</div>
											</div>
											<div class="d-flex align-items-center mb-4">
												<img src="assets/images/checked.svg" alt="Bootstrap Gallery" class="img-2x" />
												<div class="ms-3">
													<h6 class="text-primary mb-1 fw-bold">2:30PM</h6>
													<h6 class="m-0 text-secondary fw-normal">
														Code review
													</h6>
												</div>
											</div>
											<div class="d-flex align-items-center">
                                                //assets/images/not-checked.svg
												<img src="dashboard\design\assets\images\not-checked.svg" alt="Bootstrap Gallery" class="img-2x" />
												<div class="ms-3">
													<h6 class="text-primary mb-1 fw-bold">03:30PM</h6>
													<h6 class="m-0 text-secondary fw-normal">
														Product meeting with dev team
													</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-6">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Income</h5>
									</div>
									<div class="card-body p-0">
										<div id="income"></div>
										<div class="p-3 mt-n3">
											<div class="d-flex gap-3">
												<div class="">
													<h4 class="fw-semibold mb-1">1600k</h4>
													<p class="text-secondary m-0">
														<span class="bi bi-record-fill text-primary me-1"></span>Overall Income
													</p>
												</div>

												<div class="">
													<h4 class="fw-semibold mb-1">1200k</h4>
													<p class="text-secondary m-0">
														<span class="bi bi-record-fill text-danger me-1"></span>Overall Expenses
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Activity</h5>
									</div>
									<div class="card-body">
										<div class="my-2 d-flex flex-column gap-3">
											<div class="d-flex align-items-center justify-content-between">
												<h6 class="m-0 fw-normal">Server down</h6>
												<div class="badge bg-danger">High</div>
											</div>
											<div class="d-flex align-items-center justify-content-between">
												<h6 class="m-0 fw-normal">Notification from bank</h6>
												<div class="badge bg-primary">Low</div>
											</div>
											<div class="d-flex align-items-center justify-content-between">
												<h6 class="m-0 fw-normal">Transaction success alert</h6>
												<div class="badge bg-primary">Low</div>
											</div>
											<div class="d-flex align-items-center justify-content-between">
												<h6 class="m-0 fw-normal">Critical issue</h6>
												<div class="badge bg-danger">High</div>
											</div>
											<div class="d-flex align-items-center justify-content-between">
												<h6 class="m-0 fw-normal">Bug fix</h6>
												<div class="badge bg-danger">High</div>
											</div>
											<div class="d-flex align-items-center justify-content-between">
												<h6 class="m-0 fw-normal">OS update</h6>
												<div class="badge bg-primary">Low</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
					<!-- App body ends -->

					<!-- App footer start -->
					<div class="app-footer">
						<span>© Bootstrap Gallery 2023</span>
					</div>
					<!-- App footer end -->

				</div>
				<!-- App container ends -->

			</div>
			<!-- Main container end -->

		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="dashboard\design\assets\js\jquery.min.js"></script>
        //assets/js/jquery.min.js
		<script src="dashboard\design\assets\js\bootstrap.bundle.min.js"></script>
        //assets/js/bootstrap.bundle.min.js
		<script src="dashboard\design\assets\js\moment.min.js"></script>
        //assets/js/moment.min.js

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="dashboard\design\assets\vendor\overlay-scroll\jquery.overlayScrollbars.min.js"></script>
        //assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js
		<script src="dashboard\design\assets\vendor\overlay-scroll\custom-scrollbar.js"></script>
        //assets/vendor/overlay-scroll/custom-scrollbar.js

		<!-- Toastify JS -->
		<script src="dashboard\design\assets\vendor\toastify\toastify.js"></script>
        //assets/vendor/toastify/toastify.js
		<script src="dashboard\design\assets\vendor\toastify\custom.js"></script>
        //assets/vendor/toastify/custom.js

		<!-- Apex Charts -->
		<script src="dashboard\design\assets\vendor\apex\apexcharts.min.js"></script>
        //assets/vendor/apex/apexcharts.min.js
		<script src="dashboard\design\assets\vendor\apex\custom\dash1\visitors.js"></script>
        //assets/vendor/apex/custom/dash1/visitors.js
		<script src="dashboard\design\assets\vendor\apex\custom\dash1\sales.js"></script>
        //assets/vendor/apex/custom/dash1/sales.js
		<script src="dashboard\design\assets\vendor\apex\custom\dash1\sparkline.js"></script>
        //assets/vendor/apex/custom/dash1/sparkline.js
		<script src="dashboard\design\assets\vendor\apex\custom\dash1\tasks.js"></script>
        //assets/vendor/apex/custom/dash1/tasks.js
		<script src="dashboard\design\assets\vendor\apex\custom\dash1\income.js"></script>
        //assets/vendor/apex/custom/dash1/income.js

		<!-- Custom JS files -->
		<script src="dashboard\design\assets\js\custom.js"></script>
        //assets/js/custom.js
		<script src="dashboard\design\assets\js\todays-date.js"></script>
        //assets/js/todays-date.js
	</body>

</html>