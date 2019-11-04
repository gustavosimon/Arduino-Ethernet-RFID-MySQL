
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
									<a href="index.html">Home</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		
		<footer>
			<center>
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
							
							
							<?php
		
		$rg = $_GET["rg"];
		$c = "Nome, Data de nascimento, Nacionalidade, RG, Telefone, Quantidade de bagagens, E-mail";
		$colunas = explode(",", $c);
		$c2 = "Peso, TAG, Origem, Destino previsto, Destino final";
		$colunas2 = explode(",", $c2);
		$user = $_GET["user"];


		include "conexao.php";

		$selec1 = "SELECT * FROM `passageiros` WHERE `passageiros`.`RG` = $rg";

		$sql = mysql_query($selec1);
		$tot_campo = mysql_num_fields($sql); 
		$linha = mysql_fetch_array($sql); 
		unset($linha[7]);
		$nasc = explode("-", $linha[1]);

		echo "<h3 class='section-title'>Informações sobre o passageiro</h3>
			<table width='600' border='3' cellspacing='1' cellpadding='2'>";

		$selec2 = "SELECT `malas`.`Peso`, `malas`.`tag`, `voos`.`sigla_origem`, `voos`.`sigla_destino` FROM `malas` JOIN `voos` ON `malas`.`Voos_Codigo` = `voos`.`Codigo` WHERE `malas`.`Passageiro_RG` = $rg";


		$sql2 = mysql_query($selec2);
		$tot_campo2 = mysql_num_fields($sql2); 

		for ($i=0; $i < 7; $i++){
			if ($i == 1){
				echo "<tr><td>$colunas[$i]</td><td>$nasc[2]/$nasc[1]/$nasc[0]</td></tr>";
			} else {

				echo "<tr><td>$colunas[$i]</td><td>$linha[$i]</td></tr>";
			} 
		}
		
		echo "</table>";

		echo "<br>";
		echo "<br>";

		if ($linha[5] > 1){
		echo "<h3 class='section-title'>Informações sobre as bagagens</h3>";
		} else {
			echo "<h3 class='section-title'>Informações sobre a bagagem</h3>";
		}
		



		for ($k = 0; $k < $linha[5]; $k++){

			echo "<table width='600' border='3' cellspacing='2' cellpadding='2'>";

		
		$linha2 = mysql_fetch_array($sql2); 


		$selec4 = "SELECT `movimentacao`.`Datahora`, `movimentacao`.`Sensor_codigo` FROM `movimentacao` WHERE `movimentacao`.`Mala_tag` = '$linha2[1]'";
		$sql4 = mysql_query($selec4);
		$linha4 = mysql_fetch_array($sql4);
		

		for ($ii = 0; $ii < 4; $ii++){
			if($ii==0){
				echo "<tr><td>$colunas2[$ii]</td><td>$linha2[$ii] kg</td></tr>";
			} else {
			echo "<tr><td>$colunas2[$ii]</td><td>$linha2[$ii]</td></tr>";
			}
		}


		$selec3 = "SELECT `sensor`.`aeroporto_sigla`, `voos`.`sigla_destino` FROM `malas` JOIN `voos` ON `malas`.`Voos_Codigo` = `voos`.`Codigo` JOIN `movimentacao` ON `malas`.`tag` = `movimentacao`.`Mala_tag` JOIN `sensor` ON `movimentacao`.`Sensor_codigo` = `Sensor`.`codigo` WHERE `malas`.`Passageiro_RG` = $rg AND `movimentacao`.`Sensor_codigo`%2 = 0 AND `movimentacao`.`Mala_tag` = '$linha2[1]'";
		
		$sql3 = mysql_query($selec3);
		
		
		$linha3 = mysql_fetch_array($sql3);
		unset($linha3[1]);


		$datahora = explode(" ", $linha4[0]);
		$data = explode("-", $datahora[0]);
		$hora = explode(":", $datahora[1]);

		echo "<tr><td>$colunas2[4]</td><td>$linha3[0]</td></tr>";
		echo "<tr><td>Data - Destino final</td><td>$data[2]/$data[1]/$data[0]</td></tr>";
		echo "<tr><td>Hora - Destino final</td><td>$hora[0]h $hora[1]min $hora[2]s</td></tr>";
		echo "</table>";

		if ($linha3 == 0){
			echo "<br>A mala ainda está em voo</br>";
		} elseif ($linha2[3] == $linha3[0]) {
			echo "<br>A mala chegou no destino correto</br>";
		} else {
			echo "<br>A mala não chegou no destino correto</br>";
		}

		
	}

	echo "<br>";
	
	echo "<a href='index_$user.html' class='form-control' id='btn-submit' value='Voltar' class='btn-send-message btn-md'>Página Inicial</a>";
						

					
					
	
		
	?>
	
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
			</center>
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

