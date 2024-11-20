<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Finify Technology - Business Innovation Machine</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="/assets/img/finifyfavicon.png" type="image/x-icon" />

	@vite('resources/css/app.css')
	<!-- Site font -->
	<link rel="stylesheet" href="/assets/fonts/webfonts/inter/stylesheet.css" />
	<link rel="stylesheet" href="/assets/fonts/webfonts/outfit/stylesheet.css" />

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="/assets/css/vendors/swiper-bundle.min.css" />
	<link rel="stylesheet" href="/assets/css/vendors/jos.css" />
	<link rel="stylesheet" href="/assets/css/vendors/menu.css" />

	<!-- Custom CSS -->
	<link rel="stylesheet" href="/assets/css/custom.css" />
	<!-- Development css -->
	<link rel="stylesheet" href="/assets/css/style.css" />
	
	<!-- Production css -->
	<!-- <link rel="stylesheet" href="//assets/css/style.min.css" /> -->
</head>

<body class="bg-[#FCF9F0]">
	<div class="page-wrapper">
		<!-- Main Header-->
		@include('home.layout.header')
		<!--End Main Header -->

		<!-- Main Wrapper Start -->
		<main class="main-wrapper">
			<!--  Main Wrapper End -->
			@yield('content')
		</main>
		

		@include('home.layout.footer')
	</div>

	<!--Vendor js-->
	<script src="/assets/js/vendors/counterup.js" type="module"></script>
	<script src="/assets/js/vendors/swiper-bundle.min.js"></script>
	<script src="/assets/js/vendors/fslightbox.js"></script>
	<script src="/assets/js/vendors/jos.min.js"></script>
	<script src="/assets/js/vendors/menu.js"></script>
	<script src="/assets/js/vendors/countdown.js"></script>
	<!-- Main js -->
	<script src="/assets/js/main.js"></script>
</body>

</html>