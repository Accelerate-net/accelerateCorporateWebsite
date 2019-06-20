<?php
session_start();
echo'
<!DOCTYPE HTML>
<html>
	<head>
		<title>Accelerate</title>
<link rel="shortcut icon" href="images/favicon.ico">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">


				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"></div>
							<img src="images/logo_shaded.png" width="60%">
							<p style="text-transform: none; font-size: 21px;">Smart Technology. Smart People. Get Accelerate.</p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- Three -->
							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a href="#" class="image"><img src="images/team.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">About Us</h2>
										<p>Accelerate is a light-weight and modern framework to develop scalable and responsive web and mobile applications. We help schools and small scale local businesses to go online, by developing customised websites and mobile applications. Accelerate is built using the latest technology stack.<br><br>We are a team of three tech-enthusiastic students from IIT Madras. Accelerate has been developed by Abhijith C S (Alumnus of 2015 Batch), Anas Jafry and Hamdan M Ridwan of IIT Madras, aiming to help institutions and organisation go smart who can not afford costly ERP Softwares.</p>
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="four" class="wrapper alt style2">
								<div class="inner">
									<h2 class="major">Our Products</h2>
									<section class="features">
										<article>
											<a href="/dash" class="image"><img src="images/dash.jpg" alt="" /></a>
											<h3 class="major">For Schools</h3>
											<p>A smart way for the schools to communicate with parents. <pro>Dash</pro> is a platform for parents to analyze their kids academic performance.</p>
											<a href="/dash" class="special">More Details</a>
										</article>
										<article>
											<a href="/vega" class="image"><img src="images/vega.jpg" alt="" /></a>
											<h3 class="major">For E-Commerce</h3>
											<p><pro>Vega</pro> helps the small scale local businesses to go online. It comes with online ordering, inventory management and delivery management.</p>
											<a href="/vega" class="special">More Details</a>
										</article>
									</section>
								</div>
							</section>

					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Get in touch</h2>
							<p style="font-size: 21px;">Drop us a mail at <cs>support@accelerate.net.in</cs>.</br>Alternatively, give us your mobile number below, we will call you back soon.</p>
							<form method="post" action="process.php">							
								<div class="field">
									<input type="text" name="mobile" placeholder="Mobile Number" id="name" />
								</div>
								<ul class="actions">
									<li><input type="submit" value="Get a Call" /></li>
								</ul>
							</form>
							<ul class="copyright">
								<li>&copy; Accelerate. All rights reserved.</li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
';
?>