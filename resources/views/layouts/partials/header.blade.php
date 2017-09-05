<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Fares Shawa - Personal Portfolio</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="/img/favicon.png" type="image/gif" sizes="32x32">
	<!-- Place favicon.ico in the root directory -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--  Preloader -->
    <div id="loading">
        <div id="loading-center">
		    <div id="loading-center-absolute">
		        <div class="object" id="object_four"></div>
		        <div class="object" id="object_three"></div>
		        <div class="object" id="object_two"></div>
		        <div class="object" id="object_one"></div>
			</div>
		</div>
	</div>
	<!-- start header area -->
	<header class="header-middle scroll-nav">
		<div class="main-menu-area">
			<div class="full-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-xs-12">
							<div class="logo-area">
								<a href="index-2.html">
									<h5>Fares Shawa</h5>
								</a>
							</div>
						</div>
						<div class="col-sm-9 hidden-xs">
							<div class="main-menu">
								<nav class="navigation">
									<ul>
										<li><a href="#home">Home</a></li>
										<li><a href="#about">About</a></li>
										<li><a href="#workflow">WorkFlow</a></li>
										<li><a href="#portfolio">Portfolio</a></li>
										<li><a href="#blog">Blog</a></li>
										<li><a href="#contact">Contact Me</a></li>
										@guest
											<li><a href="{{ route('login') }}">Login</a></li>
										@else
											 <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                        @endif
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="mobile-menu-area visible-xs"> 
						<div class="mobile-menu"> 
							<nav class="navigation" id="mobile-menu">
								<ul>
									<li><a href="#home">Home</a></li>
									<li><a href="#about">About</a></li>
									<li><a href="#workflow">WorkFlow</a></li>
									<li><a href="#portfolio">Portfolio</a></li>
									<li><a href="#blog">Blog</a></li>
									<li><a href="#contact">Contact Me</a></li>
								</ul>
							</nav>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</header>
	<!-- / end header area -->