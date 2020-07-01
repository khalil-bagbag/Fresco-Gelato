<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>FRESCO GELATO | Contact Us </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Ice Cream Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- header -->
	<div class="header">
		<!-- navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<h1>
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt=" " class="img-fluid">
				</a>
			</h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item ">
						<a class="nav-link" href="index.html">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item  mx-lg-3">
						<a class="nav-link" href="about.html">About Us</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						    aria-expanded="false">
							Menu
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class=" dropdown-item  " href="menu.html">Glaces</a>
							<a class="dropdown-item " href="yaourt.html">Yaourt et Drinks</a>
							<a class=" dropdown-item " href="crepe.html">Créperie</a>
						</div>
					</li>
					
					<li class="nav-item  mx-lg-3">
						<a class="nav-link" href="boutiques.html">Nos Boutiques</a>
					</li>
					<li class="nav-item mr-lg-3">
						<a class="nav-link" href="specials.html">Specials</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="contact.html">Contact Us</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- //navigation -->
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="banner-2">

	</div>
	<!-- //banner -->

	<!-- contact -->
	<div class="contact-main  w3layouts-section py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-heading text-center mb-sm-5 mb-4">
				<h3 class="title text-capitalize text-dark">contact us</h3>
				<p class="title-text font-weight-light font-italic mt-2">Ut enim ad minim veniam</p>
			</div>
			<div class="inner_contact">
				<div class=" contact-leftgrid">
					<h4>let's Get In Touch</h4>
					<div class="address">
						<div class="row wthree-address-grid">
							<div class="col-2 address-left">
								<span class="fa fa-phone" aria-hidden="true"></span>
							</div>
							<div class="col-10 address-right">
								<p>+1 234 567 8901</p>
								<p>+1 234 567 8901</p>
							</div>
						</div>
						<div class="row wthree-address-grid">
							<div class="col-2 address-left">
								<span class="fa fa-envelope" aria-hidden="true"></span>
							</div>
							<div class="col-10 address-right">
								<a href="mailto:example@email.com"> mail@example.com</a>
								<a href="mailto:example@email.com"> mail@example.com</a>
							</div>
						</div>
						<div class="row wthree-address-grid">
							<div class="col-2 address-left">
								<span class="fa fa-map-marker" aria-hidden="true"></span>
							</div>
							<div class="col-10 address-right">
								<p>1234k Avenue, #5432 Nashville
									<br>33 Broome St,california.
								</p>
								<p>234k Avenue, 4th block,3FB,
									<br>california.
								</p>
							</div>
						</div>
					</div>
				</div>
				<?php

                        $errors = ”;

                        $myemail = ‘khalilbagbag@gmail.com’;//<—–Put Your email address here. if(empty($_POST[‘name’]) ||

                        empty($_POST[’email’]) ||

                        empty($_POST[‘message’]))

                        {

                        $errors .= “\n Error: all fields are required”;

                        }

                        $name = $_POST[‘name’];

                        $email_address = $_POST[’email’];

                        $message = $_POST[‘message’];

                        if (!preg_match(

                        “/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i”, $email_address))

                        {

                        $errors .= “\n Error: Invalid email address”;

                        }

                        if( empty($errors))

                        {

                        $to = khalilbagbag@gmail.com;

                        $email_subject = “Contact form submission: $name”;

                        $email_body = “You have received a new message. “.

                        ” Here are the details:\n Name: $name \n “.

                        “Email: $email_address\n Message \n $message”;

                        $headers = “From: $myemail\n”;

                        $headers .= “Reply-To: $email_address”;

                        mail($to,$email_subject,$email_body,$headers);

                        //redirect to the ‘thank you’ page

                        header(‘Location: contact-form-thank-you.html’);

                        }

                        ?>
				<div class="contact-right-grid">
					<div class="wthree-contact-form">
						<form action="contact-form-handler.php" method="post" name ="contact_form">
							<input type="text" name="name" placeholder="Name" required="">
							<input type="email" class="email" name="Email" placeholder="Email" required="">
							<input type="text" name="Name" placeholder="Subject" required="">
							<textarea name="message" placeholder="Message" required=""></textarea>
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container py-xl-5 py-lg-3">
	<div class="contact-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.4174411441827!2d11.029716915209164!3d33.82734378066777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13aa978c6fd3c763%3A0xa860c1587a5d0b38!2sDar%20Jerba%20Hotels!5e0!3m2!1sfr!2stn!4v1590577370687!5m2!1sfr!2stn"
			class="map" style="border:0" allowfullscreen=""></iframe>
		
	</div>
	</div>
	<!-- //contact -->

	<!-- newsletter -->
	<div class="footer-top py-4 text-center">
		<div class="container py-xl-5 py-lg-3">
			<!-- newsletter  -->
			<div class="agile-newsletter">
				<p class="text-white">Get the latest posts delivery directly to your inbox!</p>
				<form action="#" method="post" class="my-4">
					<input type="email" placeholder="E-mail" name="email" required="">
					<input type="submit" value="Subscribe">
				</form>
			</div>
			<!-- //newsletter -->
			<!-- social icons -->
			<div class="footercopy-social py-3">
				<ul>
					<li>
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fas fa-rss"></span>
						</a>
					</li>
					<li class="ml-2">
						<a href="#">
							<span class="fab fa-vk"></span>
						</a>
					</li>
				</ul>
			</div>
			<!-- //social icons -->
		</div>
	</div>
	<!-- //newsletter -->

	<!-- footer -->
	<div class="mkl_footer text-center py-4">
		<div class="container py-xl-5 py-4">
			<div class="mkls_footer_grid">
				<h2 class="text-white text-capitalize mb-5">Nos </h2>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
					doloremque laudantium, totam rem aperiam</p>
				<!-- footer logo -->
				<div class="logo2 my-sm-5 my-4">
					<a class="" href="index.html">
						<img src="images/logo.pdf" alt=" " class="img-fluid">
					</a>
				</div>
				<!-- //footer logo -->
			</div>
			<!-- address -->
			<div class="contact-left-footer border-bottom pb-sm-5 pb-4">
				<ul>
					<li>
						<p class="text-white">
							<i class="fas fa-location-arrow mr-2"></i>Houmet Souk , Jerba</p>
					</li>
					<li class="mx-4">
						<p class="text-white">
							<i class="fas fa-phone mr-2"></i>+216 55 286000</p>
					</li>
					<li>
						<p class="text-white">
							<i class="far fa-envelope-open mr-2"></i>
							<a href="mailto:info@example.com" class="text-white">example@gmail.com</a>
						</p>
					</li>
				</ul>
			</div>
			<!-- //address -->
		</div>
	</div>
	<!-- //footer -->

	<!-- copyright -->
	<div class="w3l-copy text-center py-4">
		<p class="text-white">© 2020 Fresco Gelatto. All rights reserved | Design by
			<a href="http://w3layouts.com/">Bagbag Khalil</a>
		</p>
	</div>
	<!-- //copyright -->

	<!-- Js files -->

	<!-- JavaScript -->
	<script language = ”JavaScript”>

		var frmvalidator = new Validator ("contactform"); 
		frmvalidator.addValidation ("nom", "demande", "Veuillez indiquer votre nom"); 
		frmvalidator.addValidation ("email", "req", "Veuillez fournir votre email"); 
		frmvalidator.addValidation ("e-mail", "e-mail", "Veuillez saisir une adresse e-mail valide"); 
	</script>
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
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

	<!-- smooth scrolling-bottom-to-top -->
	<script>
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
	<!-- //smooth scrolling-bottom-to-top -->

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>