<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Photo Gallery HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Photo Gallery HTML Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Top right elements -->
	<div class="spacial-controls">
		<div class="search-switch"><img src="img/search-icon.png" alt=""></div>
		<div class="nav-switch-warp">
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
		</div>
	</div>
	<!-- Top right elements end -->

	<div class="main-warp">
		<!-- header section -->
		<header class="header-section">
			<div class="header-close">
				<i class="fa fa-times"></i>
			</div>
			<div class="header-warp">
				<a href="" class="site-logo">
					<img src="./img/logo.png" alt="">
				</a>
				<img src="img/menu-icon.png" alt="" class="menu-icon">
				<ul class="main-menu">
					<li class="active"><a href="./home.php">Home</a></li>
					<li><a href="./gallery.php">Gallery</a></li>
					<li><a href="./gallery-single.php">Single gallery</a></li>
					<li><a href="./blog.php">Blog</a></li>
					<li><a href="./contact.php">Contact</a></li>
				</ul>
				<div class="social-links-warp">
					<div class="social-links">
						<a href=""><i class="fa fa-behance"></i></a>
						<a href=""><i class="fa fa-dribbble"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
					</div>
					<div class="social-text">Find us on</div>
				</div>
			</div>
			<div class="copyright">Colorlib 2018  @ All rights reserved</div>
		</header>
		<!-- header section end -->

		<!-- Page section -->
		<div class="page-section elements-page">
			<div class="element">
				<h2 class="el-title">Buttons</h2>
				<button class="site-btn mr-3">Send message</button>
				<button class="site-btn sb-solid-dark ">Send message</button>
			</div>
			<div class="element">
				<h2 class="el-title">Accordions & Tabs</h2>
				<div class="row">
					<div class="col-xl-6">
						<!-- Accordions -->
						<div id="accordion" class="accordion-area">
							<div class="panel">
								<div class="panel-header" id="headingOne">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1"> Quisque molestie blandit nunc, id sagittis odio</button>
								</div>
								<div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										<p>Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. </p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingTwo">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">olestie blandit nunc, id sagittis odio</button>
								</div>
								<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="panel-body">
										<p>Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui.  </p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header active" id="headingThree">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">olestie blandit nunc, id sagittis odio</button>
								</div>
								<div id="collapse3" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="panel-body">
										<p>Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="tab-element">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="false">Quisque mole?</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">nunc odio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="true">olestie blandi</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<!-- single tab content -->
								<div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
									<p>Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. </p>
								</div>
								<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
									<p>Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. </p>
								</div>
								<div class="tab-pane fade show active" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
									<p>Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="element">
				<h2 class="el-title">Loaders</h2>
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-sm-6 cp-item">
						<div class="circle-progress" data-cptitle="Photos" data-cpid="id-1" data-cpvalue="90" data-cpcolor="#323232"></div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 cp-item">
						<div class="circle-progress" data-cptitle="Love" data-cpid="id-2" data-cpvalue="100" data-cpcolor="#323232"></div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 cp-item">
						<div class="circle-progress" data-cptitle="Passion" data-cpid="id-3" data-cpvalue="50" data-cpcolor="#323232"></div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 cp-item">
						<div class="circle-progress" data-cptitle="Art" data-cpid="id-4" data-cpvalue="75" data-cpcolor="#323232"></div>
					</div>
				</div>
			</div>
			<div class="element">
				<h2 class="el-title">Milestones</h2>
				<div class="row">
					<div class="col-xl-4 col-lg-6">
						<div class="icon-box">
							<div class="ib-top">
								<div class="ib-icon">01.</div>
								<div class="ib-title">
									<span>Photography</span>
									<h2>Artistic</h2>
								</div>
							</div>
							<p>Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. </p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="icon-box">
							<div class="ib-top">
								<div class="ib-icon">02.</div>
								<div class="ib-title">
									<span>Photography</span>
									<h2>Passion</h2>
								</div>
							</div>
							<p>Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. Curabitur et mattis ex, a ultrices. Ut pellentesque auctor lorem, at maximus lacus faucibus nec.  </p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="icon-box">
							<div class="ib-top">
								<div class="ib-icon">03.</div>
								<div class="ib-title">
									<span>Photography</span>
									<h2>Love</h2>
								</div>
							</div>
							<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Page section end-->
	</div>

	<!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">x</div>
			<form class="search-moderl-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
