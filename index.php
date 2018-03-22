<!DOCTYPE html>
<html lang="en">
		<head>
		<title> Carlos Amores</title>
		<link rel="icon" href="images/carlos.png">
		<!-- custom-theme -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Pagina de Carlos Salvador Amores Martinez, trabajador de iAhorro B. S. Vivo en Madrid, tengo 24 años." />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){ window.scrollTo(0,1); } </script>




		<!-- Portfolio-CSS -->	<link rel="stylesheet" href="css/swipebox.css" type="text/css" media="all">
				
		<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->

		<link rel="stylesheet" href="css/index.css"><!-- skills bars CSS-->

		<!-- custom-theme -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- //custom-theme -->
			  
		<!-- font-awesome-icons -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome-icons -->

		

	</head>



<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- banner -->
<div class="banner" id="home">
	<div class="agileinfo-dot">
		<div class="container">
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top"> 
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Carlos Amores</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php"> Carlos Amores</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-15">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
							<li><a class="page-scroll scroll" href="#home">Home</a></li>
							<li><a class="page-scroll scroll" href="#about">About</a></li>
							<li><a class="page-scroll scroll" href="#skills">Skills</a></li>
							<li><a class="page-scroll scroll" href="#education">Education/Experience </a></li>
							<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
							<li><a class="page-scroll scroll" href="#map">Locate me</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->

			<div class="w3_banner_info">
				<div class="w3_banner_info_grid">
					<h2 data-aos="fade-right">Hola, soy </h2>
					<h2 data-aos="fade-right">Carlos Amores</h2>
					<h5>Desarrollador Web</h5>
					<p> </p>
					<ul data-aos="slide-up">
						<li><a href="#" class="w3ls_more" data-toggle="modal" data-target="#myModal">Know More</a></li>
						<!-- <li><a href="#" class="scroll w3l_contact"><i class="fa fa-download" aria-hidden="true"></i> Download CV</a></li> -->
					</ul>
				</div>
			</div>
			<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-arrows-v" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- banner -->



	<?php
    	require("aboutmeModal.php");
    ?>

	<?php
    	require("aboutme.php");
    ?>

    <?php
    	require("skills.php");
    ?>

    <?php
    	require("education.php");
    ?>

 	<?php
    	require("contact.php");
    ?>

	<?php
    	require("location.php");
    ?>

    <?php
    	require("afiliados.php");
    ?>

	<?php
    	require("footer.php");
    ?>



<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- //js -->

<!-- Gallery-Tab-JavaScript -->
			<script src="js/cbpFWTabs.js"></script>
			<script>
				(function() {
					[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
						new CBPFWTabs( el );
					});
				})();
			</script>
<!-- //Gallery-Tab-JavaScript -->
	<!-- Swipe-Box-JavaScript -->
			<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
		<!-- //Swipe-Box-JavaScript -->

<!-- Scrolling Nav JavaScript --> 
    <script src="js/scrolling-nav.js"></script>  
<!-- //fixed-scroll-nav-js --> 

<script src="js/index.js"></script><!-- skills bars JS FILE-->
	
<!-- animation effects-js files-->
	<script src="js/aos.js"></script><!-- //animation effects-js-->
	<script src="js/aos1.js"></script><!-- //animation effects-js-->
<!-- animation effects-js files-->

<!-- //here starts scrolling icon -->
<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

</body>
</html>
