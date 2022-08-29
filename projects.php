<?php

require_once 'core/init.php';
$data = DB::getInstance()->query("SELECT * FROM projects WHERE pdate < ? ORDER BY pdate", array(date('Y-m-d H:i:s')));

?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Projects | GREAT OAK</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="keywords" content=""/>
	<!-- //Meta Tags -->
	<!-- Style-sheets -->
	<link rel="shortcut icon" href="favicon.png">

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css?tyh" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!--// Style-sheets -->
	<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
	<!--web-fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
	<!--//web-fonts-->
</head>

<body>
	<!-- banner -->
	<section class="banner1">
		<!-- header -->
		<header>
		<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="../"><img src="images/logo.png?jhguhiug" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: unset;">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="../">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html#services">Services</a>	
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="projects.php">Projects</a>	
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
			</div>
		</nav>
		
		</header>
		<!-- //header -->
	</section>
	<!-- //banner -->
		<!--Gallery-->
	<section class="gallery py-md-2">
		<div class="container py-2 mt-2">
		<h3 class="tittle text-center mb-1">Projects</h3>
			<p class="tit text-center mx-auto">Over the years, our firm has grown tremendously from increased demand of our expertise. Some of our recent projects are highlighted below.</p>
			<div class="video">
			    <div class="video-cont">
					<video src="images/fishcutter.mp4" class="" title="Fish cutter" controls=""></video>
					<p class="py-2" style="text-align: center; color: black;">Stainless fish/chicken cutting machine</p>
				</div>
				<div class="video-cont">
					<video src="images/pounder.mp4" class="" title="Yam pounder" controls=""></video>
					<p class="py-2" style="text-align: center; color: black;">Machine for pounding of yam</p>
				</div>
			</div>
			<!--<p class="py-2" style="text-align: center; color: black;">Stainless fish/chicken cutting machine</p>-->
			<div class="row agile_gallery_grids demo pt-4 mt-md-3">
			<?php if ($data->count()) {
				$results = $data->results();
				foreach ($results as $key) { echo '
					<div class="col-sm-4">
						<div class="gallery-grid1">
							<img src="images/'.$key->banner.'" alt=" " class="img-responsive" />
							<div class="p-desc">
								<h3>'.$key->title.'</h3>
								<p>'.$key->description.'</p>
							</div>
						</div>
					</div>';}
			}
			?>
			</div>
		</div>
	</section>
	<!--//Gallery-->


	<!-- Footer -->
	<footer class="footer-section py-5">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 footer-grids">
					<h3>Get in touch</h3>
					<p>69, Obafemi Awolowo Way, Ikeja, </p>
					<p class="my-2"> Lagos, Nigeria</p>
				<p class="phone">
					    <a href="tel:08038462052">Phone: +234 803 846 2052</a>
					</p>
					<p class="phone my-2">
					    <a href="tel:07068499885">Tel: +234 706 849 9885</a>
					 </p>
					<p class="phone">Mail:
						<a href="mailto:info@greatoak.com.ng">info@greatoak.com.ng</a>
					</p>
				</div>
				<div class="col-lg-6 footer-grids">
					<h2>Latest Works</h2>
					<div class="d-flex justify-content-around">
						<a href="projects.php" class="col-4">
							<img src="images/g3.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="projects.php" class="col-4">
							<img src="images/g2.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="projects.php" class="col-4">
							<img src="images/g1.jpg" class="img-fluid" alt="Responsive image">
						</a>
					</div>
					<div class="d-flex justify-content-around">
						<a href="projects.php" class="col-4">
							<img src="images/g2.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="projects.php" class="col-4">
							<img src="images/g1.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="projects.php" class="col-4">
							<img src="images/g3.jpg" class="img-fluid" alt="Responsive image">
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //Footer -->
	<!-- copyright -->
	<section class="copyright">
		<div class="container">
			<p class="py-xl-4 py-3 text-center">© 2022 Great Oak Quality Engineering Solutions ltd.
			</p>
		</div>
	</section>
	<!-- //copyright -->

    <!-- Required common Js -->
    <script src="js/jquery.min.js"></script>
    <!-- //Required common Js -->
<!--gallery -->
	<script src="js/jquery.chocolat.js"></script>
	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.gallery-grid1 a').Chocolat();
		});
	</script>
	<!-- //gallery -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Js for bootstrap working-->
	<script src="js/bootstrap.min.js"></script>
	<!-- //Js for bootstrap working -->
</body>

</html>