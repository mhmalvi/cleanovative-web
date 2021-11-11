<!DOCTYPE html>
<html lang="en">
<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--====== Title ======-->
	<title>@yield('title')</title>
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/png" />

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    @include('layouts.styles')
</head>

<body>
	<!--[if lte IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!--====== PRELOADER ======-->
	<div id="preloader">
		<div>
			<div></div>
		</div>
	</div>

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    <!--====== GO TO TOP PART START ======-->
	<div class="go-top-area">
		<div class="go-top-wrap">
			<div class="go-top-btn-wrap">
				<div class="go-top go-top-btn">
					<i class="fal fa-angle-double-up"></i>
					<i class="fal fa-angle-double-up"></i>
				</div>
			</div>
		</div>
	</div>

	<!--====== GO TO TOP PART ENDS ======-->
    @include('layouts.footer')

    @include('layouts.scripts')

    @stack('js')
</body>

</html>
