<?php
	include("conexao.php");
	echo "<h1>CÓDIGO DA TAG DE IDENTIFICAÇÃO DA BAGAGEM</h1>";
	$tag = $_GET['tag'];
	$setor = $_GET['setor'];
	$sensor_tag = $setor.$tag;
	$inserirmovimentacao = "INSERT INTO `movimentacao` (Sensor_codigo, Mala_tag, sensor_tag) VALUES ('$setor' , '$tag', '$sensor_tag')";
	$sql4 = mysql_query($inserirmovimentacao);
?>