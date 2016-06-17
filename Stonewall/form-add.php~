<?php
	require 'init.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
 		<meta charset="utf-8" />
 		<title>CADASTRAR CLIENTE</title>
		<script type = "text/javascript" src = "jquery-2.1.1.min.js"></script>
		<script type = "text/javascript" src = "jquery.maskedinput.js"></script> 		
 	</head>
	<body>	
		<form method="post" name="formCadastro" action="add.php" enctype="multipart/form-data">
		<h1>CADASTRAR CLIENTE</h1>
		<table width="100%">
			<tr>
				<th width="10%">Nome</th>
				<td width="82%"><input type="text" name="txtNome"></td>
			</tr>
			<tr>
				<th width="10%">E-mail</th>
				<td width="82%"><input type="text" name="txtEmail"></td>
			</tr>
			<tr>
				<th>Data de Cadastro</th>
				<td><input type="text" name="txtData" id="data"></td>	
			</tr>
			<tr>
				<td><input type="submit" name="btnEnviar" value="Cadastrar"></td>
				<td><input type="reset" name="btnLimpar" value="Limpar"></td>	
			</tr>
		</table>
		<script language = "JavaScript" type="text/javascript">
		$("#data").mask("99/99/9999");		
		</script>
		</form>
	</body>
</html>
