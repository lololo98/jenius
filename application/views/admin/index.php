<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Jenius Admin</title>
	<link rel="stylesheet" href="<?= site_url('assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/admin/vendors/css/vendor.bundle.base.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/admin/vendors/css/vendor.bundle.addons.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/admin/css/style.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/admin/css/datatables.css') ?>">
	<script src="<?= site_url('assets/admin/vendors/js/vendor.bundle.base.js') ?>"></script>
	<link rel="shortcut icon" href="<?= site_url('assets/admin/images/favicon.png') ?>" />
</head>

<body>
	<div class="container-scroller">
		<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
				<a class="navbar-brand brand-logo" href="index.html">
					<img src="<?= site_url('assets/admin/images/logo.svg') ?>" alt="logo" />
				</a>
				<a class="navbar-brand brand-logo-mini" href="index.html">
					<img src="<?= site_url('assets/admin/images/logo-mini.svg') ?>" alt="logo" />
				</a>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-center">
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item dropdown d-none d-xl-inline-block">
						<a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
							<span class="profile-text">Hello, Admin!</span>
							<img class="img-xs rounded-circle" src="<?= site_url('assets/admin/images/faces/face2.jpg') ?>" alt="Profile image">
						</a>
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
					<span class="icon-menu"></span>
				</button>
			</div>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_sidebar.html -->
			<?php $this->load->view('admin/layouts/navbar') ?>
			<!-- partial -->
			<div class="main-panel">
				<?php $this->load->view('admin/page/'. $hlm)?>
				<footer class="footer">
					<div class="container-fluid clearfix">
						<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018</span>
						<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
							<i class="mdi mdi-heart text-danger"></i>
						</span>
					</div>
				</footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<script src="<?= site_url('assets/admin/vendors/js/vendor.bundle.addons.js') ?>"></script>
	<script src="<?= site_url('assets/admin/js/off-canvas.js') ?>"></script>
	<script src="<?= site_url('assets/admin/js/misc.js') ?>"></script>
	<script src="<?= site_url('assets/admin/js/dashboard.js') ?>"></script>
	<script src="<?= site_url('assets/admin/js/jquery.datatables.js') ?>"></script>
</body>

</html>
