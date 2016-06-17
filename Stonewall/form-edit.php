<?php
	require'init.php';
	// pega o ID da URL
	$id = isset($_GET ['id']) ? (int) $_GET['id'] : null;
	// valida o ID
	if(empty($id))
	{
		echo "ID para alteração não definido";
		exit;
	}
	// busca os dados do usuário a ser editado
	$PDO = db_connect();
	$sql = "SELECT nomeCliente, email, dataCadastro FROM clientes WHERE idCliente = :id";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);
	$stmt->execute();
	$cliente = $stmt->fetch(PDO::FETCH_ASSOC);
	/* se o método fetch()não retornar um array
	significa que o ID não corresponde a um usuário válido */
	if(!is_array($cliente))
	{
		echo "Nenhum cliente encontrado.";
		exit;
	}
	$dataOK = dateConvert($cliente['dataCadastro']);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
 		<meta charset="utf-8" />
 		<title>EDITAR CLIENTE</title>
		<script type = "text/javascript" src = "jquery-2.1.1.min.js"></script>
		<script type = "text/javascript" src = "jquery.maskedinput.js"></script> 		
 	</head>
	<body>	
		<form method="post" name="formAltera" action="edit.php" enctype="multipart/form-data">
		<h1>EDITAR CLIENTE</h1>
		<table width="100%">
			<tr>
				<th width="10%">Nome</th>
				<td width="82%"><input type="text" name="txtNome" value="<?php echo $cliente['nomeCliente']?>"></td>
			</tr>
			<tr>
				<th width="10%">E-mail</th>
				<td width="82%"><input type="text" name="txtEmail" value="<?php echo $cliente['email']?>"></td>
			</tr>
			<tr>
				<th>Data de Cadastro</th>
				<td><input type="text" name="txtData" id="data" value="<?php echo $dataOK ?>"></td>	
			</tr>
			<tr>
				<input type="hidden" name="id" value="<?php echo $id ?>">
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
