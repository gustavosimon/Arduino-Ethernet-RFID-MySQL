<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>SISLOC - Malas extraviadas</title>
		<link href="Imagens/favicon.png" rel="shortcut icon" type="image/x-icon" />
	<head/>
	<body>
		<center>
		<table width="620" border="1" cellspacing="2" cellpadding="5">
		<td><FONT FACE="Montserrat" SIZE="3" COLOR="black">TAG</FONT></td>
		<td><FONT FACE="Montserrat" SIZE="3" COLOR="black">RG</FONT></td>
		<td><FONT FACE="Montserrat" SIZE="3" COLOR="black">ORIGEM</FONT></td>
		<td><FONT FACE="Montserrat" SIZE="3" COLOR="black">DESTINO PREVISTO</FONT></td>
		<td><FONT FACE="Montserrat" SIZE="3" COLOR="black">DESTINO FINAL</FONT></td>
		<?php
			include "conexao.php"; 
			$user = $_GET["user"];
			$selec = "SELECT `malas`.`tag`, `malas`.`Passageiro_RG`, `voos`.`sigla_origem`, `voos`.`sigla_destino`, `sensor`.`aeroporto_sigla` FROM `malas` JOIN `voos` ON `malas`.`Voos_Codigo` = `voos`.`Codigo` JOIN `movimentacao` ON `malas`.`tag` = `movimentacao`.`Mala_tag` JOIN `sensor` ON `movimentacao`.`Sensor_codigo` = `Sensor`.`codigo` WHERE `movimentacao`.`Sensor_codigo`%2 = 0 AND `voos`.`sigla_destino` != `sensor`.`aeroporto_sigla`";
			$sql = mysql_query($selec);
			$tot_campo = mysql_num_fields($sql); 
			$tot_linha = mysql_num_rows($sql);
			for ($ii=0; $ii < $tot_linha; $ii++) { 	
				$linha = mysql_fetch_array($sql); 
				echo "<tr>";
					for($i = 0; $i < $tot_campo; $i++){
						if ($i%5 == 1){
							echo "<td><a href = 'passageiros.php?rg=$linha[$i]'>$linha[$i]</a></td>";
						} else {
							echo "<td>$linha[$i]</td>";
						}
					}
				echo "</tr>";
			}
		echo "
		</table>
		<br>
		<a href='malas.php?user=$user' style='text-decoration:none'><h4><FONT FACE='Montserrat' SIZE='3' COLOR='black'>Voltar</FONT></h4></a>
		<a href='index_$user.html' style='text-decoration:none'><h4><FONT FACE='Montserrat' SIZE='3' COLOR='black'>Página inicial</FONT></h4></a>";
		?>
		</center>
	</body>
</html>