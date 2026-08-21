<!doctype html>
<html lang="en-US">
<head>

  <title>Light and Media Technologies- </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="HandheldFriendly" content="true">
  <meta name="author" content="bslthemes" />

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue%3Aital%2Cwght%400%2C100%3B0%2C200%3B0%2C300%3B0%2C400%3B0%2C500%3B0%2C600%3B0%2C700%3B0%2C800%3B0%2C900%3B1%2C100%3B1%2C200%3B1%2C300%3B1%2C400%3B1%2C500%3B1%2C600%3B1%2C700%3B1%2C800%3B1%2C900&#038;display=swap" type="text/css" media="all" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

  <!-- CSS STYLES -->
  <link rel="stylesheet" href="assets/css/vendors/bootstrap.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/vendors/magnific-popup.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/vendors/splitting.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/vendors/swiper.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/vendors/animate.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/vendors/jquery.pagepiling.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
  <link rel="icon" href="assets/images/fav.png" type="image/x-icon">


<link rel="stylesheet" href="{{asset('build/assets/app-DrdTcuTJ.css')}}" />
<script src="{{asset('build/assets/app-C1-XIpUa.js')}}"></script>

</head>

<body>

	<!-- Page -->
	<div class="lightnmedia-page footer--fixed">

		<!-- Preloader -->
		<div class="preloader">
			<div class="preloader__spinner">
				<span class="preloader__double-bounce"></span>
				<span class="preloader__double-bounce preloader__double-bounce--delay"></span>
			</div>
		</div>

		<!-- Header -->
		<header class="lightnmedia-header header--white">
			<div class="header--builder">
				<div class="container">
					<div class="row">
						<div class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-3 align-self-center">

							<!-- Logo -->
							<div class="lightnmedia-logo-image" style="max-width: 70px">
								<a href="index.html">
									<img src="assets/images/logo-black.png" alt="lightnmedia" />
									<img class="logo--white" src="assets/images/logo-main.png" alt="lightnmedia" />
								</a>
							</div>

						</div>
						<div class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-6 align-self-center align-center">

							<!-- Menu Hamburger -->
							<a href="#" class="lightnmedia-menu-btn"><span></span></a>
							<div class="lightnmedia-menu-popup align-left">
								<div class="lightnmedia-menu-overlay"></div>
								<div class="lightnmedia-menu-overlay-after"></div>
								<div class="lightnmedia-menu-container lightnmedia--noscroll">
									<div class="container">
										<div class="lightnmedia-menu">
											<ul class="lightnmedia-menu-nav">


                                                @php
                                                use App\Helpers\SiteMapToggle;

                                            @endphp


                                                <li class="  menu-item-has-children {{Route::currentRouteName()=='home'?'current-menu-item':''}}" >
													<a class="lightnmedia-lnk lnk--active lightnmedia-dropdown-toggle " href="{{route('home')}}">Home</a>
												</li>
                                                    @if(SiteMapToggle::getSiteMap('nav_about')==true)
                                                <li class="menu-item-has-children {{Route::currentRouteName()=='about'?'current-menu-item':''}}">
													<a class="lightnmedia-lnk lnk--active lightnmedia-dropdown-toggle" href="{{route('about')}}">About us</a>
												</li>
                                                @endif
                                                @if(SiteMapToggle::getSiteMap('nav_brands')==true)
                                                <li class="menu-item-has-children {{Route::currentRouteName()=='brands'?'current-menu-item':''}}" >
													<a class="lightnmedia-lnk lnk--active lightnmedia-dropdown-toggle" href="{{route('brands')}}">Brands</a>
												</li>
                                                @endif
                                                @if(SiteMapToggle::getSiteMap('nav_portfolio')==true)
                                                <li class=" menu-item-has-children {{Route::currentRouteName()=='portfolio'?'current-menu-item':''}}">
													<a class="lightnmedia-lnk lnk--active lightnmedia-dropdown-toggle" href="{{route('portfolio')}}">Portfolio</a>
												</li>
                                                @endif
                                                {{-- @if(SiteMapToggle::getSiteMap('nav_news')==true)
                                                <li class=" menu-item-has-children {{Route::currentRouteName()=='news'?'current-menu-item':''}}" ">
													<a class="lightnmedia-lnk lnk--active lightnmedia-dropdown-toggle" href="{{route('news')}}">News</a>
												</li>
                                                @endif --}}
                                                @if(SiteMapToggle::getSiteMap('nav_contact')==true)
                                                <li class=" menu-item-has-children {{Route::currentRouteName()=='contact'?'current-menu-item':''}}">
													<a class="lightnmedia-lnk lnk--active lightnmedia-dropdown-toggle" href="{{route('contact')}}">Contact us</a>
												</li>
                                                @endif
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</header>
        <div class="wrapper" style="padding-bottom: 0px !important">
                {{ $slot }}
            </div>
       <!-- Footer -->

@if (Route::currentRouteName()=="home")


@else
		<footer class="lightnmedia-footer footer--dark">
			<div class="footer--default">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">

							<!-- Description -->
							<div class="lightnmedia-text lightnmedia-text-white">
								<h5>Information</h5>
								<p style="opacity: 0.6;">From the moment our company was founded, we have helped our clients find exceptional solutions <strong>for their businesses</strong>. </p>
							</div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 offset-lg-1">

							<!-- Description -->
							<div class="lightnmedia-text lightnmedia-text-white">
								<h5>Dubai</h5>
										<div>302, Suntech tower, <br>Dubai silicon oasis</div>
							</div>

                            <h5>Contact Info</h5>
										<a  style="color:white" href="tel:+10204302973" class="" target="_blank">+ 1 (020) 430 2973</a><br>
										<a style="color:white" href="mailto:sales@lightnmedia.com" class="" target="_blank">sales@lightnmedia.com</a>


						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">

							<!-- Gallery items -->
							<div class="row">

                                <div class="lightnmedia-text lightnmedia-text-white">
                                    <h5>Brands</h5>

                                    <p style="opacity: 0.6;">
                                        <a href="https://vishvatha.com/lumipix/" class="lightnmedia-lnk lnk--white" target="_blank">Lumi-Pix</a><br>
                                        <a href="https://valoled.com/" class="lightnmedia-lnk lnk--white" target="_blank">VALOLED</a>
                                    </p>
                                </div>

							</div>

						</div>
					</div>

					<div class="separator"></div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 align-self-center">

							<!-- Copyright -->
							<div class="copyright lightnmedia-text-white">
								© 2024 lightnmedia. All rights reserved.
							</div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 align-right">

							<!-- Social-->
							<div class="lightnmedia-social-1 lightnmedia-social-active">
								<ul>
									{{-- <li>
										<a class="lightnmedia-social-link lightnmedia-hover-2" href="http://twitter.com" title="Twitter" target="_blank">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="lightnmedia-social-link lightnmedia-hover-2" href="http://linkedin.com" title="LinkedIn" target="_blank">
											<i class="fab fa-linkedin-in"></i>
										</a>
									</li>
									<li>
										<a class="lightnmedia-social-link lightnmedia-hover-2" href="http://dribbble.com" title="Dribbble" target="_blank">
											<i class="fab fa-behance"></i>
										</a>
									</li> --}}
								</ul>
							</div>

						</div>
					</div>

				</div>
			</div>
		</footer>

        @endif

	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/swiper.js"></script>
	<script src="assets/js/splitting.js"></script>
	<script src="assets/js/scroll-out.js"></script>
	<script src="assets/js/jquery.pagepiling.js"></script>
	<script src="assets/js/jquery.easy_number_animate.js"></script>
	<script src="assets/js/magnific-popup.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/isotope.pkgd.js"></script>
	<script src="assets/js/common.js"></script>

</body>
</html>
