<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Gaurav Ranpara - Mean Stack Developer</title>

        <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/font-awesome.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/simplebar.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/jquery.animatedheadline.css') }}">

		<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
	</head>
<body>
	<!-- Preloader -->
	<div id="preloader">
		<div class="loading">
			<div class="circle"></div>
			<div class="text-loading">
				<span data-text-preloader="L" class="letters">L</span>
				<span data-text-preloader="O" class="letters">O</span>
				<span data-text-preloader="A" class="letters">A</span>
				<span data-text-preloader="D" class="letters">D</span>
				<span data-text-preloader="I" class="letters">I</span>
				<span data-text-preloader="N" class="letters">N</span>
				<span data-text-preloader="G" class="letters">G</span>
			</div>
		</div>	
	</div>


	@yield('page_content')

	<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/simplebar.js') }}"></script>
	<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/jquery.animatedheadline.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>

   	<!-- Page Script -->
	<script src="{{ URL::asset('assets/js/jquery.ripples-min.js') }}"></script>
	<script>
		$('.home').ripples({
			resolution: 1000,
			dropRadius: 15,
			perturbance: 0.02
		});
	</script>
</body>
</html>