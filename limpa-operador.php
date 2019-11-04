<?php
	include "conexao.php";
	$operador = $_GET["operador"];
	$apagar = "DELETE FROM `operadores` WHERE `Nome` = '$operador'";
	$sql = mysql_query($apagar);
	echo "<meta http-equiv='refresh' content=0;url='selec-operador.php'>";
?>