<?php
// Programa para fazer o cadastro de operadores
	include "conexao.php";
	$user = $_POST["user"];
	$senha = $_POST["senha"];
	$inserir = "INSERT INTO `operadores` (Nome, Senha) VALUES ('$user', '$senha')";
	if (empty($user) || empty($senha)){
			$user = $senha = 0;
			echo "Preencha todos os campos";
			echo "<meta http-equiv='refresh' content=2;url='cadastro_operador.html'>";
		} else {
			$sql = mysql_query($inserir);
			if ($sql){
				echo "<meta http-equiv='refresh' content=0;url='index_admin.html'>";
			} else {
				echo "<meta http-equiv='refresh' content=0;url='cadastro_operador.html'>";
			}
	}
	mysql_close($ligacao);

?>