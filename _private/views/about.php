<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="shortcut icon" type="image" href="../../images/TC logo.png">
	<link rel="stylesheet" type="text/css" href="../../css/about.css">
	<link rel="stylesheet" type="text/css" href="../../css/nav.css">
</head>	
<body>
	<div class="wrapper">
		<header>
			<a href="" class="logo">Logo</a>
			<div class="menu-toggle"></div>
				<nav>
					<ul>
						<li><a href="<?php echo url('home') ?>" class="active">Home</a></li>
						<li><a href="<?php echo url('corona.index') ?>">Corona</a></li>
						<li><a href="<?php echo url('contact.form') ?>">Contact</a></li>
						<li><a href="<?php echo url('register.form') ?>">Aanmelden</a></li>
						<li><a href="<?php echo url('login.form') ?>">Inloggen</a></li>
					</ul>
				</nav>
				<div class="clearfix"></div>
		</header>
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
			<script type="text/javascript">
			$(document).ready(function(){
				$(document).ready(function(){
					$('.menu-toggle').click(function(){
						$('.menu-toggle').toggleClass('active')
						$('nav').toggleClass('active')
					})
				})
			})
		</script>
	</div>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>Over ons</h1>
				</div>
				<div class="content">
					<h3>Praat over dingen die je eerder nergens kwijt kon.</h3>
					<p>In onze online community kan je binnen een veilige omgeving (anoniem) jouw ervaringen en 
						gevoelens delen. Hier helpen en steunen we elkaar. Ook worden er wekelijks praktische tips
						gedeeld die jou helpen om zelfverzekerd te zijn en om te gaan met moeilijke situaties.</p>
				</div>
				<div class="social">
					<a href="https://instagram.com/transformer.community?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
					<a href="https://www.linkedin.com/company/transformerscommunity"><i class="fab fa-linkedin"></i></a>
					<a href="https://www.facebook.com/transformers.community/"><i class="fab fa-facebook-f"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="../../Transformers community/Transformers/Afbeeldingen/Lisa.png">
			</div>
		</div>
	</div>

	
</body>
</html>