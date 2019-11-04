
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SISLOC-Cadastro</title>
	<link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


	</head>
	<body>
			

		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<br>
						<figure>
 						<img src="logo.png" width="800"/>
						</figure>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
								
								<a class="active" href="index.html">Home</a>
								</li>
								
								<li><a href="cadastro1_admin.php?user=admin">Cadastrar passageiro</a></li>

								<li><a href="malas.php?user=admin">Consultar malas</a></li>

								<li><a href="cadastro_operador.html">Cadastrar operador</a></li>

								<li><a href="http://localhost/phpmyadmin">Acessar phpMyAdmin</a></li>
								<li>
									<a class="fh5co-sub-ddown" href="index.html">Logout</a> 
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>

		
		<footer>
			

			<div id="footer">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

			
			

				<div class="container">
				
					<div class="row">
							
						<div class="col-md-5 col-md-offset-3 text-center">

							<h3 class="section-title">Cadastro do passageiro</h3>
							<form method="post" action="cadastro.php" class="contact-form" >
								<div class="form-group" id="centro">
									
									<label for="n" class="sr-only">Nome</label>
									<input type="text" class="form-control" name="n" placeholder="Nome">

								</div>
								<div class="form-group">
									<label for="nasc" class="sr-only">Nascimento<input type="date" name="nasc"/></label>
									<input type="date" class="form-control" name="nasc" placeholder="Data:dd/mm/aaaa">
								</div>
								<div class="form-group">
									<label for="nacio" class="sr-only">Nacionalidade</label>
									<input type="text" class="form-control" name="nacio" placeholder="Nacionalidade">
								</div>
								<div class="form-group">
									<label for="rg" class="sr-only">RG</label>
									<input type="text" class="form-control" name="rg" placeholder="RG">
								</div>
								<div class="form-group">
									<label for="tel" class="sr-only">Telefone</label>
									<input type="text" class="form-control" name="tel" placeholder="Telefone">
								</div>
								<div class="form-group">
									<label for="QtdBag" class="sr-only">Quantidade de bagagens</label>
									<input type="" class="form-control" name="QtdBag" placeholder="Quantidade de bagagens">
								</div>
								<div class="form-group">
									<label for="name" class="sr-only">Origem</label>
									<input type="text" class="form-control" name="origem" placeholder="Origem">
								</div>
								<div class="form-group">
									<label for="name" class="sr-only">Destino</label>
									<input type="text" class="form-control" name="destino" placeholder="Destino">
								</div>
								<div class="form-group">
									<label for="name" class="sr-only">Email</label>
									<input type="email" class="form-control" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Cadastrar">
								</div>
								<div class="form-group">
								
									<a href="index.html"  id="btn-submit" class="btn btn-send-message btn-md">Voltar</a>
								
								</div>
							</form>
								
						</div>

					</div>


					
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>&copy; 2016 <a href="#"> SISLOC</a>. All Rights Reserved. <br></p>
						</div>
					</div>
				</div>
			</div>
			
		</footer>
			

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

