<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal. Contact us if you want to remove it.

-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Primary Meta Tags -->
	<title><?= $title ?></title>
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="title" content="Volt - Free Bootstrap 5 Admin Dashboard" />
	<meta name="author" content="Themesberg" />
	<meta
		name="description"
		content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS." />
	<meta
		name="keywords"
		content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
	<link
		rel="canonical"
		href="<?= base_url('/') ?>" />

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website" />
	<meta
		property="og:url"
		content="https://demo.themesberg.com/volt-pro" />
	<meta
		property="og:title"
		content="Volt - Free Bootstrap 5 Admin Dashboard" />
	<meta
		property="og:description"
		content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS." />
	<meta
		property="og:image"
		content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg" />

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image" />
	<meta
		property="twitter:url"
		content="https://demo.themesberg.com/volt-pro" />
	<meta
		property="twitter:title"
		content="Volt - Free Bootstrap 5 Admin Dashboard" />
	<meta
		property="twitter:description"
		content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS." />
	<meta
		property="twitter:image"
		content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg" />

	<!-- Favicon -->
	<link
		rel="apple-touch-icon"
		sizes="120x120"
		href="<?= base_url('public') ?>/assets/img/favicon/apple-touch-icon.png" />
	<link
		rel="icon"
		type="image/png"
		sizes="32x32"
		href="<?= base_url('public') ?>/assets/img/favicon/favicon-32x32.png" />
	<link
		rel="icon"
		type="image/png"
		sizes="16x16"
		href="<?= base_url('public') ?>/assets/img/favicon/favicon-16x16.png" />
	<link rel="manifest" href="<?= base_url('public') ?>/assets/img/favicon/site.webmanifest" />
	<link
		rel="mask-icon"
		href="<?= base_url('public') ?>/assets/img/favicon/safari-pinned-tab.svg"
		color="#ffffff" />
	<meta name="msapplication-TileColor" content="#ffffff" />
	<meta name="theme-color" content="#ffffff" />

	<!-- Sweet Alert -->
	<link
		type="text/css"
		href="<?= base_url('public') ?>/assets/vendor/sweetalert2/dist/sweetalert2.min.css"
		rel="stylesheet" />

	<!-- Notyf -->
	<link
		type="text/css"
		href="<?= base_url('public') ?>/assets/vendor/notyf/notyf.min.css"
		rel="stylesheet" />

	<!-- Volt CSS -->
	<link type="text/css" href="<?= base_url('public') ?>/assets/css/volt.css" rel="stylesheet" />

	<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
</head>

<body>

	<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


	<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
		<a class="navbar-brand me-lg-5" href="<?= base_url('public') ?>/index.html">
			<img class="navbar-brand-dark" src="<?= base_url('public') ?>/assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="<?= base_url('public') ?>/assets/img/brand/dark.svg" alt="Volt logo" />
		</a>
		<div class="d-flex align-items-center">
			<button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>

	<?php $this->load->view('_partials/admin/side_navbar') ?>

	<main class="content">

		<?php $this->load->view('_partials/admin/nav') ?>

		<?= $page_content ?>

		<?php
		$this->load->view('_partials/admin/footer');
		?>
	</main>

	<!-- Core -->
	<script src="<?= base_url('public/assets/') ?>vendor/@popperjs/core/dist/umd/popper.min.js"></script>
	<script src="<?= base_url('public/assets/') ?>vendor/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Vendor JS -->
	<script src="<?= base_url('public/assets/') ?>vendor/onscreen/dist/on-screen.umd.min.js"></script>

	<!-- Slider -->
	<script src="<?= base_url('public/assets/') ?>vendor/nouislider/dist/nouislider.min.js"></script>

	<!-- Smooth scroll -->
	<script src="<?= base_url('public/assets/') ?>vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

	<!-- Charts -->
	<script src="<?= base_url('public/assets/') ?>vendor/chartist/dist/chartist.min.js"></script>
	<script src="<?= base_url('public/assets/') ?>vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

	<!-- Datepicker -->
	<script src="<?= base_url('public/assets/') ?>vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

	<!-- Sweet Alerts 2 -->
	<script src="<?= base_url('public/assets/') ?>vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

	<!-- Moment JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

	<!-- Vanilla JS Datepicker -->
	<script src="<?= base_url('public/assets/') ?>vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

	<!-- Notyf -->
	<script src="<?= base_url('public/assets/') ?>vendor/notyf/notyf.min.js"></script>

	<!-- Simplebar -->
	<script src="<?= base_url('public/assets/') ?>vendor/simplebar/dist/simplebar.min.js"></script>

	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>

	<!-- Volt JS -->
	<script src="<?= base_url('public/assets') ?>/js/volt.js"></script>


</body>

</html>
