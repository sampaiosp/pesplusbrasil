<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>PES Plus Brasil - Master League, registro de resultado dos jogos</title>

	<link type="text/css" rel="stylesheet" media="screen" href="estilos.css" />
	
 
</head>
	<body>
	<div id="site">
		<form method="post" id="insere_jgfeito" align="center" enctype="multipart/form-data">
			
			<td>
			<tr>
				<span name="rotulo"><strong>Inserir Resultados<strong></span>
			</br>
			</tr>
			
			<tr>
			<td>
			<?php
				include("campeonato.php");
				echo $campeonato;
			?>
			</td></br>
			<td>
			<label for="data-atual">Realizado em...</label>
			<input type="date" name="data-atual" id="data-atual" value="<?=date('d/m/Y')?>" required>
			</td>
			</tr>
			</td></br>
			<tr>
			<td>
			<select required name="mandante"/>
				<option value="" disabled="disabled" selected="selected">Mandante</option>
				<?php
					$cst_competidor = mysql_query("SELECT `tbl_jogadores`.`tecnico` AS tecnico, `tbl_competidor`.`nome` AS nome FROM `tbl_competidor` INNER JOIN `tbl_jogadores` ON `tbl_competidor`.`id_competidor` = `tbl_jogadores`.`tecnico` WHERE `tbl_competidor`.`status` = 1 GROUP BY `tbl_jogadores`.`tecnico` ORDER BY `tbl_competidor`.`nome` ASC");
					while($tecnicos = mysql_fetch_array($cst_competidor)){ ?>
				<option value="<?php echo $tecnicos["tecnico"];?>"><tr><?php echo $tecnicos["nome"];?></tr></option>
				<?php } ?>
			<select>
			<input type="number" min="0" max="9" name="mscore" required="required">
			</td>
			<td>
			<input type="number" min="0" max="9" name="vscore" required="required">
			<select required name="visitante"/>
				<option value="" disabled="disabled" selected="selected">Visitante</option>
				<?php
					$cst_competidor = mysql_query("SELECT `tbl_jogadores`.`tecnico` AS tecnico, `tbl_competidor`.`nome` AS nome FROM `tbl_competidor` INNER JOIN `tbl_jogadores` ON `tbl_competidor`.`id_competidor` = `tbl_jogadores`.`tecnico` WHERE `tbl_competidor`.`status` = 1 GROUP BY `tbl_jogadores`.`tecnico` ORDER BY `tbl_competidor`.`nome` ASC");
					while($tecnicos = mysql_fetch_array($cst_competidor)){ ?>
				<option value="<?php echo $tecnicos["tecnico"];?>"><tr><?php echo $tecnicos["nome"];?></tr></option>
				<?php } ?>
			<select>
			</td>
			</tr>	
			<input type="hidden" value="?" name="tipo"/>
			<input type="hidden" value="?" name="resultado"/>
		</br>
			<input type="hidden" name="acao" value="enviado" />
			<button type="submit">Gravar</button>
		</form>
	</div>
	</body>
</html>