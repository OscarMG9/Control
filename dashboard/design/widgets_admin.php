
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
							<li>
								<a href="analytics_admin.php">
									<i class="bi bi-bar-chart-line"></i>
									<span class="menu-text">Analytics</span>
								</a>
							</li>
							<li class="active current-page">
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
							<li class="breadcrumb-item" aria-current="page">Widgets</li>
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
							<div class="col-12">
								<div class="card mb-3">
									<div class="card-body">
										<!-- Row start -->
										<div class="row g-4">
											<div class="px-0 border-end col-xl-3 col-sm-6">
												<div class="text-center">
													<p class="m-0 small text-secondary">Gross Profit</p>
													<h3 class="my-2">75%</h3>
													<p class="m-0 small text-secondary">
														<span class="text-danger me-1">
															<i class="bi bi-arrow-down-left-square"></i>
															1.99%</span>
														for Last month
													</p>
												</div>
											</div>
											<div class="px-0 border-end col-xl-3 col-sm-6">
												<div class="text-center">
													<p class="m-0 small text-secondary">Opex Ratio</p>
													<h3 class="my-2">62%</h3>
													<p class="m-0 small text-secondary">
														<span class="text-success me-1">
															<i class="bi bi-arrow-up-right-square"></i>
															1.69%</span>
														for Last month
													</p>
												</div>
											</div>
											<div class="px-0 border-end col-xl-3 col-sm-6">
												<div class="text-center">
													<p class="m-0 small text-secondary">
														Operating Profit
													</p>
													<h3 class="my-2">48%</h3>
													<p class="m-0 small text-secondary">
														<span class="text-success me-1">
															<i class="bi bi-arrow-up-right-square"></i>
															2.9%</span>
														for Last month
													</p>
												</div>
											</div>
											<div class="px-0 col-xl-3 col-sm-6">
												<div class="text-center">
													<p class="m-0 small text-secondary">Net Profit</p>
													<h3 class="my-2">32%</h3>
													<p class="m-0 small text-secondary">
														<span class="text-success me-1">
															<i class="bi bi-arrow-up-right-square"></i>
															18.5%</span>
														for Last month
													</p>
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
							<div class="col-md-4 col-sm-12">
								<div class="card mb-3">
									<div class="card-body">
										<h6 class="mb-3">Click Through Conversions</h6>
										<h6 class="d-flex align-items-center mb-3">
											<span class="me-2">2,860</span><span class="badge bg-success">02.5%</span>
										</h6>
										<small class="text-secondary lh-sm">Total conversion value divided by the number of eligible
											clicks.</small>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="card mb-3">
									<div class="card-body">
										<h6 class="mb-3">View Good Conversions</h6>
										<h6 class="d-flex align-items-center mb-3">
											<span class="fs-30 me-2">2,971</span><span class="badge bg-danger">0.55%</span>
										</h6>
										<small class="text-secondary lh-sm">A good conversion rate is between 2 percent and 5 percent
											views.</small>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="card mb-3">
									<div class="card-body">
										<h6 class="mb-3">Total Conversions</h6>
										<h6 class="d-flex align-items-center mb-3">
											<span class="fs-30 me-2">1,896</span><span class="badge bg-success">1.8%</span>
										</h6>
										<small class="text-secondary lh-sm">The number of conversions divided by the total number of
											visits.</small>
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
										<h6 class="mb-3">New Users</h6>
										<h2 class="mb-3 d-flex align-items-center justify-content-between">
											<div class="p-3 border border-primary grd-primary-light rounded-5 d-flex">
												<i class="bi bi-box fs-4 lh-1 text-primary"></i>
											</div>
											<span class="text-info">590</span>
										</h2>
										<p class="m-0 small text-secondary">
											Monthly users<span class="float-end badge bg-info text-info bg-opacity-10">50%</span>
										</p>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<h6 class="mb-3">Total Sales</h6>
										<h2 class="mb-3 d-flex align-items-center justify-content-between">
											<div class="p-3 border border-primary grd-primary-light rounded-5 d-flex">
												<i class="bi bi-bar-chart fs-4 lh-1 text-primary"></i>
											</div>
											<span class="text-info">400</span>
										</h2>
										<p class="m-0 small text-secondary">
											Monthly sales<span class="float-end badge bg-info text-info bg-opacity-10">60%</span>
										</p>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<h6 class="mb-3">Total Profit</h6>
										<h2 class="mb-3 d-flex align-items-center justify-content-between">
											<div class="p-3 border border-primary grd-primary-light rounded-5 d-flex">
												<i class="bi bi-sticky fs-4 lh-1 text-primary"></i>
											</div>
											<span class="text-info">$760</span>
										</h2>
										<p class="m-0 small text-secondary">
											Monthly profit<span class="float-end badge bg-info text-info bg-opacity-10">70%</span>
										</p>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<h6 class="mb-3">Total Revenue</h6>
										<h2 class="mb-3 d-flex align-items-center justify-content-between">
											<div class="p-3 border border-primary grd-primary-light rounded-5 d-flex">
												<i class="bi bi-wallet2 fs-4 lh-1 text-primary"></i>
											</div>
											<span class="text-info">$980</span>
										</h2>
										<p class="m-0 small text-secondary">
											Monthly revenue<span class="float-end badge bg-info text-info bg-opacity-10">80%</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row starts -->
						<div class="row gx-3">
							<div class="col-xxl-4 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Notifications</h5>
									</div>
									<div class="card-body">
										<div class="scroll350 my-4">
											<div class="d-flex flex-row mb-4">
												<img src="assets/images/user.png" alt="Bootstrap Gallery" class="img-4x rounded-5" />
												<div class="ms-3">
													<p class="mb-2">
														<strong class="text-primary">Sophie Michiels</strong>
														shared your post with Ilyana Maes, Remssy Wilson,
														and 2 others.
													</p>
													<!-- Time -->
													<small class="text-secondary">2 mins ago</small>
												</div>
											</div>
											<div class="d-flex flex-row mb-4">
												<img src="assets/images/user2.png" alt="Bootstrap Gallery" class="img-4x rounded-5" />
												<div class="ms-3">
													<p class="mb-2">
														<strong class="text-primary">Ilyana Mayees</strong>
														commented “I don't think this really makes sense to
														do without approval from Remssy.”
													</p>
													<!-- Time -->
													<small class="text-secondary">2 mins ago</small>
												</div>
											</div>
											<div class="d-flex flex-row mb-4">
												<img src="assets/images/user3.png" alt="Bootstrap Gallery" class="img-4x rounded-5" />
												<div class="ms-3">
													<p class="mb-2">
														<strong class="text-primary">Wesly Kemby</strong>
														uploaded the files "launch day design" and "new app
														design".
													</p>
													<!-- Time -->
													<small class="text-secondary">5 mins ago</small>
												</div>
											</div>
											<div class="d-flex flex-row mb-4">
												<img src="assets/images/user4.png" alt="Bootstrap Gallery" class="img-4x rounded-5" />
												<div class="ms-3">
													<p class="mb-2">
														<strong class="text-primary">Kelly Lavo</strong>
														thanks for choosing Apple product, further if you
														have any questions please contact sales team.
													</p>
													<!-- Time -->
													<small class="text-secondary">7 mins ago</small>
												</div>
											</div>
											<div class="d-flex flex-row mb-4">
												<img src="assets/images/user5.png" alt="Bootstrap Gallery" class="img-4x rounded-5" />
												<div class="ms-3">
													<p class="mb-2">
														<strong class="text-primary">Teboho Ncube</strong>
														boost your sales by 50% with the easiest and proven
														marketing tool for customer enggement & motivation.
													</p>
													<!-- Time -->
													<small class="text-secondary">9 mins ago</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Timeline</h5>
									</div>
									<div class="card-body">
										<div class="scroll350 my-4">
											<div class="activity-log">
												<p>
													<strong class="text-primary">Rustik Tasgall</strong>
													started working on AGS dashboard for Martin and going
													to complete in 2 weeks.
												</p>
												<span class="badge bg-info text-info bg-opacity-10">#New</span>
											</div>
											<div class="activity-log">
												<p>
													<strong class="text-primary"> Ollie Miller</strong>
													uploaded farewell day photos.
												</p>
												<div class="stacked-images mt-3">
													<img src="assets/images/user.png" alt="Bootstrap Gallery" />
													<img src="assets/images/user2.png" alt="Bootstrap Gallery" />
													<img src="assets/images/user3.png" alt="Bootstrap Gallery" />
													<img src="assets/images/user4.png" alt="Bootstrap Gallery" />
													<span class="plus bg-danger">+5</span>
												</div>
												<span class="badge bg-success text-success bg-opacity-10 mt-3">150 Photos Uploaded</span>
											</div>
											<div class="activity-log">
												<p>
													<strong class="text-primary">
														Candace Sullivan</strong>
													developed 30 multipurpose Bootstrap 5 admin templates.
												</p>
											</div>
											<div class="activity-log">
												<p>
													<strong class="text-primary"> Arnold Maxwell</strong>
													received best design award
												</p>
											</div>
											<div class="activity-log">
												<p>
													<strong class="text-primary">
														Lillian Gonzales</strong>
													farewell day photos uploaded.
												</p>
												<div class="stacked-images mt-1">
													<img src="assets/images/user.png" alt="Bootstrap Gallery" />
													<img src="assets/images/user3.png" alt="Bootstrap Gallery" />
													<span class="plus bg-danger">+7</span>
												</div>
												<span class="badge bg-info text-info bg-opacity-10 mt-4">30 Photos Uploaded</span>
											</div>
											<div class="activity-log">
												<p>
													<strong class="text-primary">Mercedes Powell</strong>
													developed 27 multipurpose Bootstrap 5 admin themes
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Messages</h5>
									</div>
									<div class="card-body">
										<div class="scroll350 my-4">
											<div class="d-flex flex-row align-items-start mb-4">
												<div class="bg-danger bg-opacity-10 rounded-5 p-3">
													<i class="bi bi-envelope-open fs-2 text-danger lh-1"></i>
												</div>
												<div class="ms-3">
													<p class="mb-2">
														<strong class="text-danger">Ilyana Mayees</strong>
														commented “I don't think this really makes sense to
														do without approval from Remssy.” Boost your sales
														by 50% with the easiest and proven marketing tool
														for customer enggement & motivation.
													</p>
													<!-- Time -->
													<small class="text-secondary">2 mins ago</small>
												</div>
											</div>
											<div class="d-flex flex-row align-items-start mb-4">
												<div class="bg-info bg-opacity-10 rounded-5 p-3">
													<i class="bi bi-envelope-open fs-2 text-info lh-1"></i>
												</div>
												<div class="ms-3">
													<p class="mb-2">
														<strong class="text-info">Sophie Michiels</strong>
														shared your post with Ilyana Maes, Remssy Wilson,
														and 2 others. Thanks for choosing Apple product,
														further if you have any questions please contact
														sales team.
													</p>
													<!-- Time -->
													<small class="text-secondary">2 mins ago</small>
												</div>
											</div>
											<div class="d-flex flex-row align-items-start mb-4">
												<div class="bg-warning bg-opacity-10 rounded-5 p-3">
													<i class="bi bi-envelope-open fs-2 text-warning lh-1"></i>
												</div>
												<div class="ms-3">
													<p class="mb-2">
														<strong class="text-warning">Wesly Kemby</strong>
														uploaded the files "launch day design" and "new app
														design".
													</p>
													<!-- Time -->
													<small class="text-secondary">5 mins ago</small>
												</div>
											</div>
											<div class="d-flex flex-row align-items-start mb-4">
												<div class="bg-success bg-opacity-10 rounded-5 p-3">
													<i class="bi bi-envelope-open fs-2 text-success lh-1"></i>
												</div>
												<div class="ms-3">
													<p class="mb-2">
														<strong class="text-success">Kelly Lavo</strong>
														thanks for choosing Apple product, further if you
														have any questions please contact sales team. He
														commented “I don't think this really makes sense to
														do without approval from Mia.”
													</p>
													<!-- Time -->
													<small class="text-secondary">7 mins ago</small>
												</div>
											</div>
											<div class="d-flex flex-row align-items-start mb-4">
												<div class="bg-secondary bg-opacity-10 rounded-5 p-3">
													<i class="bi bi-envelope-open fs-2 text-secondary lh-1"></i>
												</div>
												<div class="ms-3">
													<p class="mb-2">
														<strong class="text-secondary">Teboho Ncube</strong>
														boost your sales by 50% with the easiest and proven
														marketing tool for customer enggement & motivation.
													</p>
													<!-- Time -->
													<small class="text-secondary">9 mins ago</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Transactions</h5>
									</div>
									<div class="card-body">
										<div class="scroll350 my-4">
											<div class="d-grid gap-4">
												<div class="d-flex align-items-center">
													<div class="bg-primary bg-opacity-10 rounded-2 p-3 me-3">
														<i class="bi bi-credit-card-2-front text-primary fs-2 lh-1"></i>
													</div>
													<div class="d-flex flex-column">
														<h5>Visa Card</h5>
														<p class="text-truncate m-0">Laptop Ordered</p>
													</div>
													<h3 class="m-0 ms-auto text-danger">$500</h3>
												</div>
												<div class="d-flex align-items-center">
													<div class="bg-danger bg-opacity-10 rounded-2 p-3 me-3">
														<i class="bi bi-paypal text-danger fs-2 lh-1"></i>
													</div>
													<div class="d-flex flex-column">
														<h5>Paypal</h5>
														<p class="text-truncate m-0">Payment Received</p>
													</div>
													<h3 class="m-0 ms-auto text-success">$350</h3>
												</div>
												<div class="d-flex align-items-center">
													<div class="bg-info bg-opacity-10 rounded-2 p-3 me-3">
														<i class="bi bi-pin-map text-info fs-2 lh-1"></i>
													</div>
													<div class="d-flex flex-column">
														<h5>Travel</h5>
														<p class="text-truncate m-0">Yosemite Trip</p>
													</div>
													<h3 class="m-0 ms-auto text-success">$700</h3>
												</div>
												<div class="d-flex align-items-center">
													<div class="bg-success bg-opacity-10 rounded-2 p-3 me-3">
														<i class="bi bi-bag-check text-success fs-2 lh-1"></i>
													</div>
													<div class="d-flex flex-column">
														<h5>Shopping</h5>
														<p class="text-truncate m-0">Bills Paid</p>
													</div>
													<h3 class="m-0 ms-auto text-danger">$285</h3>
												</div>
												<div class="d-flex align-items-center">
													<div class="bg-danger bg-opacity-10 rounded-2 p-3 me-3">
														<i class="bi bi-boxes text-danger fs-2 lh-1"></i>
													</div>
													<div class="d-flex flex-column">
														<h5>Bank</h5>
														<p class="text-truncate m-0">Investment</p>
													</div>
													<h3 class="m-0 ms-auto text-danger">$150</h3>
												</div>
												<div class="d-flex align-items-center">
													<div class="bg-warning bg-opacity-10 rounded-2 p-3 me-3">
														<i class="bi bi-paypal text-warning fs-2 lh-1"></i>
													</div>
													<div class="d-flex flex-column">
														<h5>Paypal</h5>
														<p class="text-truncate m-0">Payment Received</p>
													</div>
													<h3 class="m-0 ms-auto text-success">$790</h3>
												</div>
												<div class="d-flex align-items-center">
													<div class="bg-info bg-opacity-10 rounded-2 p-3 me-3">
														<i class="bi bi-credit-card-2-front text-info fs-2 lh-1"></i>
													</div>
													<div class="d-flex flex-column">
														<h5>Credit Card</h5>
														<p class="text-truncate m-0">Online Shopping</p>
													</div>
													<h3 class="m-0 ms-auto text-success">$510</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Logs</h5>
									</div>
									<div class="card-body">
										<div class="scroll350 my-4">
											<div class="py-2 d-flex justify-content-between">
												<h6 class="m-0">Server down</h6>
												<div class="badge bg-danger bg-opacity-10 text-danger">
													High
												</div>
											</div>
											<div class="py-2 d-flex justify-content-between">
												<h6 class="m-0">Notification from bank</h6>
												<div class="badge bg-warning bg-opacity-10 text-warning">
													Medium
												</div>
											</div>
											<div class="py-2 d-flex justify-content-between">
												<h6 class="m-0">Transaction success alert</h6>
												<div class="badge bg-success bg-opacity-10 text-success">
													Low
												</div>
											</div>
											<div class="py-2 d-flex justify-content-between">
												<h6 class="m-0">Critical issue</h6>
												<div class="badge bg-danger bg-opacity-10 text-danger">
													High
												</div>
											</div>
											<div class="py-2 d-flex justify-content-between">
												<h6 class="m-0">Bug fix</h6>
												<div class="badge bg-warning bg-opacity-10 text-warning">
													Medium
												</div>
											</div>
											<div class="py-2 d-flex justify-content-between">
												<h6 class="m-0">OS update</h6>
												<div class="badge bg-success bg-opacity-10 text-success">
													Low
												</div>
											</div>
											<div class="py-2 d-flex justify-content-between">
												<h6 class="m-0">Server down</h6>
												<div class="badge bg-danger bg-opacity-10 text-danger">
													High
												</div>
											</div>
											<div class="py-2 d-flex justify-content-between">
												<h6 class="m-0">App down</h6>
												<div class="badge bg-success bg-opacity-10 text-success">
													Low
												</div>
											</div>
											<div class="py-2 d-flex justify-content-between">
												<h6 class="m-0">Service information</h6>
												<div class="badge bg-warning bg-opacity-10 text-warning">
													Medium
												</div>
											</div>
											<div class="py-2 d-flex justify-content-between">
												<h6 class="m-0">OS installation</h6>
												<div class="badge bg-danger bg-opacity-10 text-danger">
													High
												</div>
											</div>
											<div class="py-2 d-flex justify-content-between">
												<h6 class="m-0">Patch release</h6>
												<div class="badge bg-warning bg-opacity-10 text-warning">
													Medium
												</div>
											</div>
											<div class="py-2 d-flex justify-content-between">
												<h6 class="m-0">Software update</h6>
												<div class="badge bg-success bg-opacity-10 text-success">
													Low
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Items Sold</h5>
									</div>
									<div class="card-body">
										<div class="scroll350 my-4">
											<div class="d-grid gap-4">
												<div class="d-flex align-items-center">
													<img src="assets/images/mobiles/mob1.jpg" alt="Apple iPhone 11"
														class="img-4x h-auto rounded-3" />
													<div class="ms-3">
														<h5>Apple iPhone 13</h5>
														<p class="m-0">$999.00</p>
													</div>
													<span class="p-3 bg-info rounded-2 text-white ms-auto">8250</span>
												</div>
												<div class="d-flex align-items-center">
													<img src="assets/images/mobiles/mob2.jpg" alt="Apple iPhone 11"
														class="img-4x h-auto rounded-3" />
													<div class="ms-3">
														<h5>Apple iPhone 13</h5>
														<p class="m-0">$899.00</p>
													</div>
													<span class="p-3 bg-info rounded-2 text-white ms-auto">7650</span>
												</div>
												<div class="d-flex align-items-center">
													<img src="assets/images/mobiles/mob3.jpg" alt="Apple iPhone 11"
														class="img-4x h-auto rounded-3" />
													<div class="ms-3">
														<h5>Apple iPhone 12</h5>
														<p class="m-0">$799.00</p>
													</div>
													<span class="p-3 bg-info rounded-2 text-white ms-auto">6750</span>
												</div>
												<div class="d-flex align-items-center">
													<img src="assets/images/mobiles/mob4.jpg" alt="Apple iPhone 11"
														class="img-4x h-auto rounded-3" />
													<div class="ms-3">
														<h5>Apple iPhone 11</h5>
														<p class="m-0">$699.00</p>
													</div>
													<span class="p-3 bg-info rounded-2 text-white ms-auto">6300</span>
												</div>
												<div class="d-flex align-items-center">
													<img src="assets/images/mobiles/mob5.jpg" alt="Apple iPhone 11"
														class="img-4x h-auto rounded-3" />
													<div class="ms-3">
														<h5>Apple iPhone 11</h5>
														<p class="m-0">$599.00</p>
													</div>
													<span class="p-3 bg-info rounded-2 text-white ms-auto">5900</span>
												</div>
												<div class="d-flex align-items-center">
													<img src="assets/images/mobiles/mob6.jpg" alt="Apple iPhone 11"
														class="img-4x h-auto rounded-3" />
													<div class="ms-3">
														<h5>Apple iPhone 10</h5>
														<p class="m-0">$499.00</p>
													</div>
													<span class="p-3 bg-info rounded-2 text-white ms-auto">5200</span>
												</div>
												<div class="d-flex align-items-center">
													<img src="assets/images/mobiles/mob7.jpg" alt="Apple iPhone 11"
														class="img-4x h-auto rounded-3" />
													<div class="ms-3">
														<h5>Apple iPhone Red</h5>
														<p class="m-0">$399.00</p>
													</div>
													<span class="p-3 bg-info rounded-2 text-white ms-auto">4500</span>
												</div>
												<div class="d-flex align-items-center">
													<img src="assets/images/mobiles/mob8.jpg" alt="Apple iPhone 11"
														class="img-4x h-auto rounded-3" />
													<div class="ms-3">
														<h5>Apple iPhone Blue</h5>
														<p class="m-0">$299.00</p>
													</div>
													<span class="p-3 bg-info rounded-2 text-white ms-auto">3250</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row ends -->

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-xl-4 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div class="me-3">
												<h5 class="lh-base">
													Sell on Amazon with 50% off on Selling Fee
												</h5>
												<a href="#" class="text-info text-decoration-underline">Register now</a>
											</div>
											<img src="assets/images/user3.png" alt="Bootstrap Gallery" class="img-4x rounded-5 ms-auto" />
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-6 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div class="me-3">
												<h5 class="lh-base">
													Sell on Amazon with 30% off on Selling Fee
												</h5>
												<a href="#" class="text-danger text-decoration-underline">Register now</a>
											</div>
											<img src="assets/images/user4.png" alt="Bootstrap Gallery" class="img-4x rounded-5 ms-auto" />
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div class="me-3">
												<h5 class="lh-base">
													Sell on Amazon with 65% off on Selling Fee
												</h5>
												<a href="#" class="text-success text-decoration-underline">Register now</a>
											</div>
											<img src="assets/images/user2.png" alt="Bootstrap Gallery" class="img-4x rounded-5 ms-auto" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-12">
								<div class="card mb-3">
									<div class="card-body">
										<!-- Row start -->
										<div class="row gx-3">
											<div class="col-sm-3 col-6">
												<div class="d-flex flex-column p-3 rounded-2 border border-info">
													<h5 class="mb-3">Q1 - <span>$72,000</span></h5>
													<div class="progress small">
														<div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-3 col-6">
												<div class="d-flex flex-column p-3 rounded-2 border border-warning">
													<h5 class="mb-3">Q2 - <span>$68,000</span></h5>
													<div class="progress small">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
															aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-3 col-6">
												<div class="d-flex flex-column p-3 rounded-2 border border-success">
													<h5 class="mb-3">Q3 - <span>$55,000</span></h5>
													<div class="progress small">
														<div class="progress-bar bg-success" role="progressbar" style="width: 60%"
															aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-3 col-6">
												<div class="d-flex flex-column p-3 rounded-2 border border-danger">
													<h5 class="mb-3">Q4 - <span>$48,000</span></h5>
													<div class="progress small">
														<div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="70"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div>
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
							<div class="col-xxl-8 col-lg-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Order History</h5>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered align-middle">
												<thead>
													<tr>
														<th>Product</th>
														<th>ID</th>
														<th>Purchase Date</th>
														<th>Price</th>
														<th>Doscount</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex flex-row align-items-center">
																<img src="assets/images/mobiles/mob3.jpg" class="img-3x rounded-3 h-auto"
																	alt="Google Admin" />
																<div class="d-flex flex-column ms-3">
																	<p class="m-0">Apple iPhone 14</p>
																	<p class="text-success m-0">(60% Discount)</p>
																</div>
															</div>
														</td>
														<td>
															<a href="#!" class="text-danger">#L10010045</a>
														</td>
														<td>02/12/2022</td>
														<td>$250.00</td>
														<td>25%</td>
														<td>
															<span class="badge bg-success">Delivered</span>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex flex-row align-items-center">
																<img src="assets/images/mobiles/mob4.jpg" class="img-3x rounded-3 h-auto"
																	alt="Google Admin" />
																<div class="d-flex flex-column ms-3">
																	<p class="m-0">Apple iPhone 15</p>
																	<p class="text-success m-0">(50% Discount)</p>
																</div>
															</div>
														</td>
														<td>
															<a href="#!" class="text-danger">#L10010035</a>
														</td>
														<td>05/12/2022</td>
														<td>$450.00</td>
														<td>40%</td>
														<td>
															<span class="badge bg-danger">Cancelled</span>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex flex-row align-items-center">
																<img src="assets/images/mobiles/mob2.jpg" class="img-3x rounded-3 h-auto"
																	alt="Google Admin" />
																<div class="d-flex flex-column ms-3">
																	<p class="m-0">Apple iPhone 13</p>
																	<p class="text-success m-0">(20% Discount)</p>
																</div>
															</div>
														</td>
														<td>
															<a href="#!" class="text-danger">#L10010065</a>
														</td>
														<td>07/12/2022</td>
														<td>$350.00</td>
														<td>75%</td>
														<td>
															<span class="badge bg-info">Shipped</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-xl-12 col-lg-12">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="card-title">Sales History</h5>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered align-middle">
												<thead>
													<tr>
														<th>History</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex flex-row align-items-center">
																<img src="assets/images/mobiles/mob2.jpg" class="img-3x rounded-3 h-auto"
																	alt="Google Admin" />
																<div class="d-flex flex-column ms-3">
																	<p class="m-0">Apple iPhone 14</p>
																	<a href="#!" class="text-danger">#L100100259</a>
																	<p class="text-success m-0">(60% Discount)</p>
																</div>
															</div>
														</td>
														<td>
															<a class="btn btn-info">Edit</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex flex-row align-items-center">
																<img src="assets/images/mobiles/mob4.jpg" class="img-3x rounded-3 h-auto"
																	alt="Google Admin" />
																<div class="d-flex flex-column ms-3">
																	<p class="m-0">Apple iPhone 15</p>
																	<a href="#!" class="text-danger">#L10010033</a>
																	<p class="text-success m-0">(50% Discount)</p>
																</div>
															</div>
														</td>
														<td>
															<a class="btn btn-info">Edit</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex flex-row align-items-center">
																<img src="assets/images/mobiles/mob5.jpg" class="img-3x rounded-3 h-auto"
																	alt="Google Admin" />
																<div class="d-flex flex-column ms-3">
																	<p class="m-0">Apple iPhone 13</p>
																	<a href="#!" class="text-danger">#L10010045</a>
																	<p class="text-success m-0">(20% Discount)</p>
																</div>
															</div>
														</td>
														<td>
															<a class="btn btn-info">Edit</a>
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

		<!-- Custom JS files -->
		<script src="assets/js/custom.js"></script>
	</body>

</html>