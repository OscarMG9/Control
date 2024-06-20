<?php
session_start(); // Iniciar o reanudar sesión

// Verificar si el usuario está logueado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php'); // Redirigir a la página de inicio de sesión si no está logueado
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Admin Dashboard Templates - Unify Admin Template</title>

		<!-- Meta -->
		<meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="assets/images/favicon.svg" />

		<!-- *************
			************ CSS Files *************
		************* -->
		<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
		<link rel="stylesheet" href="assets/css/main.min.css" />

		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />

		<!-- Toastify CSS -->
		<link rel="stylesheet" href="assets/vendor/toastify/toastify.css" />

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
				
					</div>
            <a
              id="userSettings"
              class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none"
              href="#!"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <img
                src="assets/images/logo_admin.png"
                class="rounded-2 img-3x"
                alt="Bootstrap Gallery"
              />
              <span class="ms-2 text-truncate d-lg-block d-none"
                ><?php echo $_SESSION['email']; ?></span
              >
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-lg">
              
              <div class="mx-3 mt-2 d-grid">
                <a href="../../../Control\Index.php" class="btn btn-primary btn-sm">Cerrar sesión</a>
              </div>
            </div>
          </div>
        </div>

			</div>
			<!-- App header ends -->

			<!-- Main container start -->
			<div class="main-container">

				<!-- Sidebar wrapper start -->
				<nav id="sidebar" class="sidebar-wrapper">

					<!-- Sidebar profile starts -->
					<div class="shop-profile">
						<p class="mb-1 fw-bold text-primary">Administración</p>
						<p class="m-0">SERVICIOS TI - UD4</p>
					</div>
					<!-- Sidebar profile ends -->

					<!-- Sidebar menu starts -->
					<div class="sidebarMenuScroll">
						<ul class="sidebar-menu">
							<li>
								<a href="index_admin.php">
									<i class="bi bi-pie-chart"></i>
									<span class="menu-text">Dashboard</span>
								</a>
							</li>
							<li class="active current-page">
								<a href="analytics_admin.php">
									<i class="bi bi-bar-chart-line"></i>
									<span class="menu-text">Analytics</span>
								</a>
							</li>
							<li>
								<a href="widgets_admin.php">
									<i class="bi bi-box"></i>
									<span class="menu-text">Widgets</span>
								</a>
							</li>
							
						</ul>
					</div>
					<!-- Sidebar menu ends -->

				</nav>
				<!-- Sidebar wrapper end -->

				<!-- App container starts -->
				<div class="app-container">

					<!-- App hero header starts -->
					<div class="app-hero-header d-flex align-items-start">

						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<i class="bi bi-house lh-1"></i>
								<a href="index.html" class="text-decoration-none">Home</a>
							</li>
							<li class="breadcrumb-item" aria-current="page">Analytics</li>
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
							<div class="col-xl-7 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Statistics</h5>
									</div>
									<div class="card-body">
										<div id="statistics"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Active Users</h5>
									</div>
									<div class="card-body">
										<div id="device-sessions"></div>
										<!-- Row start -->
										<div class="row g-2">
											<div class="col-sm-4 col-4 v-curve-seperator">
												<div class="border p-2 rounded-2 text-center">
													<h3 class="m-0 text-primary">900</h3>
													<p class="m-0">Likes</p>
												</div>
											</div>
											<div class="col-sm-4 col-4 v-curve-seperator">
												<div class="border p-2 rounded-2 text-center">
													<h3 class="m-0 text-primary">600</h3>
													<p class="m-0">Shares</p>
												</div>
											</div>
											<div class="col-sm-4 col-4 ">
												<div class="border p-2 rounded-2 text-center">
													<h3 class="m-0 text-primary">400</h3>
													<p class="m-0">Clicks</p>
												</div>
											</div>
										</div>
										<!-- Row end -->
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<div class="d-flex align-items-center flex-row">
											<div class="d-flex align-items-center">
												<div class="border border-primary grd-primary-light rounded-4 p-3">
													<i class="bi bi-check-circle text-primary fs-3 lh-1"></i>
												</div>
												<div class="mx-3">
													<h3 class="m-0">1800</h3>
													<p class="m-0 text-secondary">Likes</p>
												</div>
											</div>
											<div id="sparklineLine1" class="ms-auto"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<div class="d-flex align-items-center flex-row">
											<div class="d-flex align-items-center">
												<div class="border border-primary grd-primary-light rounded-4 p-3">
													<i class="bi bi-check-circle text-primary fs-3 lh-1"></i>
												</div>
												<div class="mx-3">
													<h3 class="m-0">4500</h3>
													<p class="m-0 text-secondary">Views</p>
												</div>
											</div>
											<div id="sparklineLine2" class="ms-auto"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<div class="d-flex align-items-center flex-row">
											<div class="d-flex align-items-center">
												<div class="border border-primary grd-primary-light rounded-4 p-3">
													<i class="bi bi-check-circle text-primary fs-3 lh-1"></i>
												</div>
												<div class="mx-3">
													<h3 class="m-0">3200</h3>
													<p class="m-0 text-secondary">Users</p>
												</div>
											</div>
											<div id="sparklineLine3" class="ms-auto"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<div class="d-flex align-items-center flex-row">
											<div class="d-flex align-items-center">
												<div class="border border-danger grd-danger-light rounded-4 p-3">
													<i class="bi bi-check-circle text-danger fs-3 lh-1"></i>
												</div>
												<div class="mx-3">
													<h3 class="m-0">9700</h3>
													<p class="m-0 text-secondary">Sales</p>
												</div>
											</div>
											<div id="sparklineLine4" class="ms-auto"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-xl-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Visitors</h5>
									</div>
									<div class="card-body">
										<div id="traffic"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-12"></div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-xl-6 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Messages</h5>
									</div>
									<div class="card-body">
										<div class="scroll290">
											<ul class="list-unstyled">
												<li class="d-flex align-items-center mb-3">
													<img src="assets/images/user.png" class="img-4x rounded-circle flex-shrink-0 me-3"
														alt="Admin Dashboards" />
													<div>
														<h6 class="fw-semibold">Chandni Issac</h6>
														<p class="mb-2">New contract template design</p>
														<p class="m-0 text-dark">05/12/2022</p>
													</div>
													<div class="ms-auto">
														<span class="badge bg-success">Completed</span>
													</div>
												</li>
												<li class="d-flex align-items-center mb-3">
													<img src="assets/images/user1.png" class="img-4x rounded-circle flex-shrink-0 me-3"
														alt="Admin Dashboards" />
													<div>
														<h6 class="fw-semibold">Donna Miller</h6>
														<p class="mb-2">Quarter budget analysis</p>
														<p class="m-0 text-dark">12/12/2022</p>
													</div>
													<div class="ms-auto">
														<span class="badge bg-info">Processing</span>
													</div>
												</li>
												<li class="d-flex align-items-center mb-3">
													<img src="assets/images/user2.png" class="img-4x rounded-circle flex-shrink-0 me-3"
														alt="Admin Dashboards" />
													<div>
														<h6 class="fw-semibold">William Brown</h6>
														<p class="mb-2">Launch marketing campaign</p>
														<p class="m-0 text-dark">18/12/2022</p>
													</div>
													<div class="ms-auto">
														<span class="badge bg-info">Processing</span>
													</div>
												</li>
												<li class="d-flex align-items-center mb-3">
													<img src="assets/images/user3.png" class="img-4x rounded-circle flex-shrink-0 me-3"
														alt="Admin Dashboards" />
													<div>
														<h6 class="fw-semibold">Laura Morgan</h6>
														<p class="mb-2">
															New estimation finance inc project
														</p>
														<p class="m-0 text-dark">21/12/2022</p>
													</div>
													<div class="ms-auto">
														<span class="badge bg-info">Processing</span>
													</div>
												</li>
												<li class="d-flex align-items-center mb-3">
													<img src="assets/images/user4.png" class="img-4x rounded-circle flex-shrink-0 me-3"
														alt="Admin Dashboards" />
													<div>
														<h6 class="fw-semibold">Nancy Bell</h6>
														<p class="mb-2">
															Create user journey and interaction flows
														</p>
														<p class="m-0 text-dark">25/12/2022</p>
													</div>
													<div class="ms-auto">
														<span class="badge bg-danger">Pending</span>
													</div>
												</li>
												<li class="d-flex align-items-center mb-3">
													<img src="assets/images/user5.png" class="img-4x rounded-circle flex-shrink-0 me-3"
														alt="Admin Dashboards" />
													<div>
														<h6 class="fw-semibold">Raymond Miller</h6>
														<p class="mb-2">
															Download last month Adobe creative cloud invoice.
														</p>
														<p class="m-0 text-dark">21/12/2022</p>
													</div>
													<div class="ms-auto">
														<span class="badge bg-info">Processing</span>
													</div>
												</li>
												<li class="d-flex align-items-center mb-3">
													<img src="assets/images/user.png" class="img-4x rounded-circle flex-shrink-0 me-3"
														alt="Admin Dashboards" />
													<div>
														<h6 class="fw-semibold">Jacob White</h6>
														<p class="mb-2">
															Report a bug to infinity support.
														</p>
														<p class="m-0 text-dark">25/12/2022</p>
													</div>
													<div class="ms-auto">
														<span class="badge bg-danger">Pending</span>
													</div>
												</li>
												<li class="d-flex align-items-center mb-3">
													<img src="assets/images/user2.png" class="img-4x rounded-circle flex-shrink-0 me-3"
														alt="Admin Dashboards" />
													<div>
														<h6 class="fw-semibold">Grace Cooper</h6>
														<p class="mb-2">Campaign performance tracking.</p>
														<p class="m-0 text-dark">21/12/2022</p>
													</div>
													<div class="ms-auto">
														<span class="badge bg-info">Processing</span>
													</div>
												</li>
												<li class="d-flex align-items-center mb-3">
													<img src="assets/images/user3.png" class="img-4x rounded-circle flex-shrink-0 me-3"
														alt="Admin Dashboards" />
													<div>
														<h6 class="fw-semibold">Michelle Taylor</h6>
														<p class="mb-2">
															Design email template and send to dev team for
															approval.
														</p>
														<p class="m-0 text-dark">25/12/2022</p>
													</div>
													<div class="ms-auto">
														<span class="badge bg-danger">Pending</span>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Updates</h5>
									</div>
									<div class="card-body">
										<div class="m-0">
											<ul id="newsticker" class="list-unstyled d-grid gap-4">
												<li class="d-flex align-items-center">
													<div class="me-2">
														<img src="assets/images/user1.png" class="img-4x rounded-5" alt="Bootstrap Admin Themes" />
													</div>
													<div class="m-0">
														Marketplace for the best admin dashboards and admin
														themes, by Bootstrap Gallery
														<a href="javascript:void(0)" class="text-primary">Read More</a>
													</div>
												</li>
												<li class="d-flex align-items-center">
													<div class="me-2">
														<img src="assets/images/user2.png" class="img-4x rounded-5"
															alt="Bootstrap Admin Dashboards" />
													</div>
													<div class="m-0">
														Best admin dashboards and admin themes available at
														reasonable price, by Bootstrap Gallery
														<a href="javascript:void(0)" class="text-primary">Read More</a>
													</div>
												</li>
												<li class="d-flex align-items-center">
													<div class="me-2">
														<img src="assets/images/user3.png" class="img-4x rounded-5" alt="Bootstrap Admin Themes" />
													</div>
													<div class="m-0">
														Bootstrap 5 admin dashboards and admin themes
														available at reasonable price, by Bootstrap Gallery
														<a href="javascript:void(0)" class="text-primary">Read More</a>
													</div>
												</li>
												<li class="d-flex align-items-center">
													<div class="me-2">
														<img src="assets/images/user4.png" class="img-4x rounded-5" alt="Bootstrap Admin Themes" />
													</div>
													<div class="m-0">
														Creative bootstrap admin dashboards and admin themes
														available at reasonable price, by Bootstrap Gallery
														<a href="javascript:void(0)" class="text-primary">Read More</a>
													</div>
												</li>
												<li class="d-flex align-items-center">
													<div class="me-2">
														<img src="assets/images/user5.png" class="img-4x rounded-5"
															alt="Bootstrap Admin Dashboards" />
													</div>
													<div class="m-0">
														Bootstrap 5 admin dashboards and admin templates
														available at low price, by Bootstrap Gallery
														<a href="javascript:void(0)" class="text-primary">Read More</a>
													</div>
												</li>
											</ul>
											<div class="text-center">
												<i class="bi bi-arrow-up-square-fill text-success fs-3" id="newsticker-up"></i>
												<i class="bi bi-arrow-down-square-fill text-danger fs-3" id="newsticker-down"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-xl-4 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Order History</h5>
									</div>
									<div class="card-body">
										<div class="scroll300">
											<ul class="list-unstyled d-grid gap-3">
												<li class="d-flex align-items-center">
													<span class="icon-box md bg-primary rounded-circle me-2">
														<i class="bi bi-bag text-white fs-4"></i>
													</span>
													New admin theme purchased.
												</li>
												<li class="d-flex align-items-center">
													<span class="icon-box md bg-success rounded-circle me-2">
														<i class="bi bi-bag text-white fs-4"></i>
													</span>
													Best admin dashboard template.
												</li>
												<li class="d-flex align-items-center">
													<span class="icon-box md bg-warning rounded-circle me-2">
														<i class="bi bi-bag text-white fs-4"></i>
													</span>
													Bootstrap admin dashboard themes.
												</li>
												<li class="d-flex align-items-center">
													<span class="icon-box md bg-danger rounded-circle me-2">
														<i class="bi bi-bag text-white fs-4"></i>
													</span>
													Best admin dashboards.
												</li>
												<li class="d-flex align-items-center">
													<span class="icon-box md bg-primary rounded-circle me-2">
														<i class="bi bi-bag text-white fs-4"></i>
													</span>
													Responsive admin themes.
												</li>
												<li class="d-flex align-items-center">
													<span class="icon-box md bg-success rounded-circle me-2">
														<i class="bi bi-bag text-white fs-4"></i>
													</span>
													Latest admin dashboards.
												</li>
												<li class="d-flex align-items-center">
													<span class="icon-box md bg-warning rounded-circle me-2">
														<i class="bi bi-bag text-white fs-4"></i>
													</span>
													Responsive admin dashboards.
												</li>
												<li class="d-flex align-items-center">
													<span class="icon-box md bg-danger rounded-circle me-2">
														<i class="bi bi-bag text-white fs-4"></i>
													</span>
													Best admin themes.
												</li>
												<li class="d-flex align-items-center">
													<span class="icon-box md bg-primary rounded-circle me-2">
														<i class="bi bi-bag text-white fs-4"></i>
													</span>
													Latest admin dashboards.
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Activity</h5>
									</div>
									<div class="card-body">
										<div class="scroll300">
											<ul class="m-0 p-0">
												<li class="team-activity d-flex">
													<div class="activity-time py-2 me-3">
														<p class="m-0">10:30AM</p>
														<span class="badge bg-primary">Live</span>
													</div>
													<div class="d-flex flex-column py-2">
														<h6>Mercuty Admin Dashboard</h6>
														<p class="m-0 text-secondary">by Srinu Basava</p>
													</div>
												</li>
												<li class="team-activity d-flex">
													<div class="activity-time py-2 me-3">
														<p class="m-0">11:00AM</p>
														<span class="badge bg-primary">Live</span>
													</div>
													<div class="d-flex flex-column py-2">
														<h6>Venus Admin Dashboard</h6>
														<p class="m-0 text-secondary">by Sandhya Balla</p>
													</div>
												</li>
												<li class="team-activity d-flex">
													<div class="activity-time py-2 me-3">
														<p class="m-0">11:30AM</p>
														<span class="badge bg-danger">New</span>
													</div>
													<div class="d-flex flex-column py-2">
														<h6>Earth Admin Dashboard</h6>
														<p class="m-0 text-secondary">by Abilene Omega</p>
													</div>
												</li>
												<li class="team-activity d-flex">
													<div class="activity-time py-2 me-3">
														<p class="m-0">12:00PM</p>
														<span class="badge bg-primary">Live</span>
													</div>
													<div class="d-flex flex-column py-2">
														<h6>Mars Admin Dashboard</h6>
														<p class="m-0 text-secondary">by Srinu Basava</p>
													</div>
												</li>
												<li class="team-activity d-flex">
													<div class="activity-time py-2 me-3">
														<p class="m-0">12:30PM</p>
														<span class="badge bg-primary">Live</span>
													</div>
													<div class="d-flex flex-column py-2">
														<h6>Jupiter Admin Dashboard</h6>
														<p class="m-0 text-secondary">by Sandhya Balla</p>
													</div>
												</li>
												<li class="team-activity d-flex">
													<div class="activity-time py-2 me-3">
														<p class="m-0">01:00PM</p>
														<span class="badge bg-danger">New</span>
													</div>
													<div class="d-flex flex-column py-2">
														<h6>Unify Admin Dashboard</h6>
														<p class="m-0 text-secondary">by Srinu Basava</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-6 col-md-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Invoices</h5>
									</div>
									<div class="card-body">
										<div class="scroll300">
											<div class="my-2">
												<div class="d-flex position-relative activity-block">
													<img src="assets/images/user1.png" class="img-5x me-3 rounded-circle activity-user"
														alt="Admin Dashboard" />
													<div class="mb-5">
														<h6 class="fw-semibold">Sophie Michiels</h6>
														<p class="text-secondary mb-1">3 day ago</p>
														<p>Paid invoice ref. #26788</p>
														<span class="bg-warning bg-opacity-10 p-2">Sent</span>
													</div>
												</div>
												<div class="d-flex position-relative activity-block">
													<img src="assets/images/user2.png" class="img-5x me-3 rounded-circle activity-user"
														alt="Admin Dashboard" />
													<div class="mb-5">
														<h6 class="fw-semibold">Sunny Desmet</h6>
														<p class="text-secondary mb-1">3 hours ago</p>
														<p>Sent invoice ref. #23457</p>
														<span class="bg-success bg-opacity-10 p-2">Sent</span>
													</div>
												</div>
												<div class="d-flex position-relative activity-block">
													<img src="assets/images/user3.png" class="img-5x me-3 rounded-circle activity-user"
														alt="Admin Dashboard" />
													<div class="mb-5">
														<h6 class="fw-semibold">Ilyana Maes</h6>
														<p class="text-secondary mb-1">One week ago</p>
														<p>Paid invoice ref. #34546</p>
														<span class="bg-danger bg-opacity-10 p-2">Invoice</span>
													</div>
												</div>
												<div class="d-flex position-relative activity-block">
													<img src="assets/images/user4.png" class="img-5x me-3 rounded-circle activity-user"
														alt="Admin Dashboard" />
													<div class="mb-5">
														<h6 class="fw-semibold">Remssy Wilson</h6>
														<p class="text-secondary mb-1">7 hours ago</p>
														<p>Paid invoice ref. #23459</p>
														<span class="bg-warning bg-opacity-10 p-2">Payments</span>
													</div>
												</div>
												<div class="d-flex position-relative activity-block">
													<img src="assets/images/user5.png" class="img-5x me-3 rounded-circle activity-user"
														alt="Admin Dashboard" />
													<div class="mb-5">
														<h6 class="fw-semibold">Elliott Hermans</h6>
														<p class="text-secondary mb-1">1 day ago</p>
														<p>Paid invoice ref. #23473</p>
														<span class="bg-info bg-opacity-10 p-2">Paid</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Page Views</h5>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table align-middle">
												<thead>
													<tr>
														<th>Link</th>
														<th>Page Title</th>
														<th>Visitors</th>
														<th>Percentage</th>
														<th>Growth</th>
													</tr>
												</thead>
												<tbody>
													<tr class="grd-info-light">
														<td>
															<a href="javascript:void()" class="text-danger">
																<i class="bi bi-box-arrow-up-right fs-3"></i>
															</a>
														</td>
														<td>Home</td>
														<td>56,000</td>
														<td>
															<div class="progress lg progress-spacer">
																<div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
																	aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</td>
														<td>
															<p class="m-0 text-info">8% high</p>
														</td>
													</tr>
													<tr class="grd-success-light">
														<td>
															<a href="javascript:void()" class="text-danger">
																<i class="bi bi-box-arrow-up-right fs-3"></i>
															</a>
														</td>
														<td>About</td>
														<td>35,000</td>
														<td>
															<div class="progress lg progress-spacer">
																<div class="progress-bar bg-success" role="progressbar" style="width: 60%"
																	aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</td>
														<td>
															<p class="m-0 text-success">12% low</p>
														</td>
													</tr>
													<tr class="grd-warning-light">
														<td>
															<a href="javascript:void()" class="text-danger">
																<i class="bi bi-box-arrow-up-right fs-3"></i>
															</a>
														</td>
														<td>Contact</td>
														<td>28,000</td>
														<td>
															<div class="progress lg progress-spacer">
																<div class="progress-bar bg-warning" role="progressbar" style="width: 70%"
																	aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</td>
														<td>
															<p class="m-0 text-warning">15% high</p>
														</td>
													</tr>
													<tr class="grd-danger-light">
														<td>
															<a href="javascript:void()" class="text-danger">
																<i class="bi bi-box-arrow-up-right fs-3"></i>
															</a>
														</td>
														<td>Services</td>
														<td>33,000</td>
														<td>
															<div class="progress lg progress-spacer">
																<div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
																	aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</td>
														<td>
															<p class="m-0 text-danger">9% high</p>
														</td>
													</tr>
													<tr class="grd-primary-light">
														<td>
															<a href="javascript:void()" class="text-danger">
																<i class="bi bi-box-arrow-up-right fs-3"></i>
															</a>
														</td>
														<td>Products</td>
														<td>98,000</td>
														<td>
															<div class="progress lg progress-spacer">
																<div class="progress-bar bg-primary" role="progressbar" style="width: 90%"
																	aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</td>
														<td>
															<p class="m-0 text-primary">3% low</p>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Clicks</h5>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table align-middle">
												<thead>
													<tr>
														<th>Link</th>
														<th>Page Title</th>
														<th>Visitors</th>
														<th>Percentage</th>
														<th>Growth</th>
													</tr>
												</thead>
												<tbody>
													<tr class="grd-info-light">
														<td>
															<a href="javascript:void()" class="text-danger">
																<i class="bi bi-box-arrow-up-right fs-3"></i>
															</a>
														</td>
														<td>Home</td>
														<td>56,000</td>
														<td>25%</td>
														<td>
															<p class="m-0 text-info">8% high</p>
														</td>
													</tr>
													<tr class="grd-success-light">
														<td>
															<a href="javascript:void()" class="text-danger">
																<i class="bi bi-box-arrow-up-right fs-3"></i>
															</a>
														</td>
														<td>About</td>
														<td>35,000</td>
														<td>23%</td>
														<td>
															<p class="m-0 text-success">12% low</p>
														</td>
													</tr>
													<tr class="grd-warning-light">
														<td>
															<a href="javascript:void()" class="text-danger">
																<i class="bi bi-box-arrow-up-right fs-3"></i>
															</a>
														</td>
														<td>Contact</td>
														<td>28,000</td>
														<td>18%</td>
														<td>
															<p class="m-0 text-warning">15% high</p>
														</td>
													</tr>
													<tr class="grd-danger-light">
														<td>
															<a href="javascript:void()" class="text-danger">
																<i class="bi bi-box-arrow-up-right fs-3"></i>
															</a>
														</td>
														<td>Services</td>
														<td>33,000</td>
														<td>12%</td>
														<td>
															<p class="m-0 text-success">9% high</p>
														</td>
													</tr>
													<tr class="grd-primary-light">
														<td>
															<a href="javascript:void()" class="text-danger">
																<i class="bi bi-box-arrow-up-right fs-3"></i>
															</a>
														</td>
														<td>Products</td>
														<td>98,000</td>
														<td>16%</td>
														<td>
															<p class="m-0 text-primary">3% low</p>
														</td>
													</tr>
												</tbody>
											</table>
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
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
		<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

		<!-- Toastify JS -->
		<script src="assets/vendor/toastify/toastify.js"></script>
		<script src="assets/vendor/toastify/custom.js"></script>

		<!-- Apex Charts -->
		<script src="assets/vendor/apex/apexcharts.min.js"></script>
		<script src="assets/vendor/apex/custom/dash2/sparkline.js"></script>
		<script src="assets/vendor/apex/custom/dash2/traffic.js"></script>
		<script src="assets/vendor/apex/custom/dash2/active-users.js"></script>
		<script src="assets/vendor/apex/custom/dash2/statistics.js"></script>

		<!-- Newsticker JS -->
		<script src="assets/vendor/newsticker/newsTicker.min.js"></script>
		<script src="assets/vendor/newsticker/custom-newsTicker.js"></script>

		<!-- Custom JS files -->
		<script src="assets/js/custom.js"></script>
	</body>

</html>