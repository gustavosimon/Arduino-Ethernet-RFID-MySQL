<?php  
	include "conexao.php";
	$nome = $_POST["n"];
	$nacionalidade = $_POST["nacio"];
	$nascimento = $_POST["nasc"];
	$telefone = $_POST["tel"];
	$RG = $_POST["rg"];
	$qtdbag = $_POST["QtdBag"];
	$origem = $_POST["origem"];
	$destino = $_POST["destino"];
	$email= $_POST["email"];
	$user = $_GET["user"];
	$codvoo = $origem.$destino;
	if (empty($nome) || empty($nacionalidade) || empty($nascimento) || empty($telefone) || empty($RG) || empty($qtdbag) ||  empty($codvoo) || empty($origem) || empty($destino) || empty($email)) {
		echo "Preencha todos os campos para cadastrar!";
		echo "<br/><a href='cadastro1.php?user=$user'>Voltar</a>";
	}
	else {
		function geraSenha($tamanho = 15, $maiusculas = true, $numeros = true, $simbolos = true)
		{
			$lmin = 'abcdefghijklmnopqrstuvwxyz';
			$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$num = '1234567890';
			$simb = '!@#$%*-';
			$retorno = '';
			$caracteres = '';
			$caracteres .= $lmin;
			if ($maiusculas) $caracteres .= $lmai;
			if ($numeros) $caracteres .= $num;
			if ($simbolos) $caracteres .= $simb;
			$len = strlen($caracteres);
			for ($n = 1; $n <= $tamanho; $n++) {
				$rand = mt_rand(1, $len);
				$retorno .= $caracteres[$rand-1];
			}
			return $retorno;
		}
		
		$senha = geraSenha();
		$inserirpassageiro = "INSERT INTO `passageiros` (Nome, Nacionalidade, Nascimento, RG, Telefone, Qtd_Bag, Email, Senha) VALUES ('$nome', '$nacionalidade', '$nascimento', '$RG', '$telefone', '$qtdbag', '$email', '$senha')";
		$sql2 = mysql_query($inserirpassageiro);
		echo "<meta http-equiv='refresh' content=0;url='cadastro-bagagens.php?rg=$RG&voo=$codvoo&user=$user'>";
	}
?>