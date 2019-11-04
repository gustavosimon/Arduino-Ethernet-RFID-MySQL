<?php
// faz a conexão com o banco de dados	
	$ligacao = mysql_connect("localhost", "root", "");
	$selec_banco = mysql_select_db("sisloc", $ligacao);
?>