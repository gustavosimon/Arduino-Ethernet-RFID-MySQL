<?php

	include "conexao.php";

	$Peso = $_POST["peso"];
	$codvoo = $_GET["voo"];
	$RG = $_GET["rg"];
	$user = $_GET["user"];
	
	$qtdbagagem = "SELECT `passageiros`.`Qtd_Bag`, `passageiros`.`Ordenar` FROM `passageiros` WHERE RG = $RG";
	$sql2 = mysql_query($qtdbagagem);


	$inserirmala = "INSERT INTO `malas` (Peso, Voos_Codigo, Passageiro_RG) VALUES ('$Peso', '$codvoo', '$RG')";

	$sql = mysql_query($inserirmala);


	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=tag.php?rg=$RG&voo=$codvoo&user=$user'>";




?>