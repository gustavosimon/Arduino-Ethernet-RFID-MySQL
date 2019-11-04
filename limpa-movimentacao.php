<?php
	include "conexao.php";
	$limpamov = "TRUNCATE TABLE movimentacao";
	$sql = mysql_query($limpamov);
	echo "<meta http-equiv='refresh' content=0;url='index_admin.html'>";
?>