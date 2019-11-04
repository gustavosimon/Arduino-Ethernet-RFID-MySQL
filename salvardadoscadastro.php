<?php
	include("conexao.php");
	echo "<h1>CÓDIGO DA TAG DE IDENTIFICAÇÃO DA BAGAGEM</h1>";
	$selecrg = "SELECT `Nome`, `RG` FROM `passageiros` ORDER BY Ordenar DESC LIMIT 1";
	$sql = mysql_query($selecrg);
	$rg = mysql_fetch_array($sql);
	$setor = $_GET['setor'];
	$tag = $_GET['tag'];
	$sql_insert = "UPDATE `sisloc`.`malas` SET `tag` = '$tag' WHERE `malas`.`tag` = 0 AND `malas`.`Passageiro_RG` = '$rg[1]'";
	$sql = mysql_query($sql_insert);
?>