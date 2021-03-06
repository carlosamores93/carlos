<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Carlos Salvador Amores Martínez </title>
		<meta name="DC.title" content="Carlos Salvador Amores Martínez">
		<link rel="icon" href="images/carlos.png">
		<link rel="canonical" href="http://www.carlosamores.hol.es">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Web CV de Carlos S. Amores M, trabajador de iAhorro.com como Programador Back End, tengo 25 años y vivo en Moratalaz (28030), Madrid." />
		<meta name="DC.description" content="Web CV de Carlos S. Amores M, trabajador de iAhorro.com como Programador Back End, tengo 25 años y vivo en Moratalaz (28030), Madrid.">

		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

		<link href="css/all.min.css" rel="stylesheet">
		<!--
		<link rel="stylesheet" href="css/swipebox.css" type="text/css" media="all">
		<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="css/index.css">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/font-awesome.css" rel="stylesheet">
		-->


		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116495935-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-116495935-1');
		</script>

	</head>



<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">



	<?php
    	require("banner.php");
    ?>


    <div itemscope itemtype="http://schema.org/Person">
    	<?php
	
    	require("aboutmeModal.php");

	    ?>

		<?php
		
	    	require("aboutme.php");
	    
	    ?>
    </div>
	

    <?php
    
    	require("skills.php");
    
    ?>

    <?php
    
    	require("education.php");
    
    ?>

    <?php
    
    	require("experiencia.php");
    
    ?>

 	<?php
 	
    	require("contact.php");
    
    ?>

    <?php
 	
    	require("mensajeModal.php");
    
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
