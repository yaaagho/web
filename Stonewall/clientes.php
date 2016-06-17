<?php
	require_once 'init.php';
	$PDO = db_connect();
	$sql_count = "SELECT COUNT(*) AS total FROM clientes ORDER BY nomeCliente ASC";
	$sql = "SELECT idCliente, nomeCliente, email, dataCadastro FROM clientes ORDER BY nomeCliente ASC";
	$stmt_count = $PDO->prepare($sql_count);
	$stmt_count->execute();
	$total = $stmt_count->fetchColumn();
	$stmt = $PDO->prepare($sql);
	$stmt->execute();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
 		<title>CADASTRO DE CLIENTES</title>
		<script type = "text/javascript" src = "jquery-2.1.1.min.js"></script>
		<script type = "text/javascript" src = "jquery.maskedinput.js"></script> 	
 	</head>
	<body>	
		<h1>CADASTRO DE CLIENTES</h1>
		<p><a href="form-add.php"><input type="button" name="novo" value="Novo"></a></p>
		<?php if($total>0): ?>
		<table width="100%" border="1">
			<thead>
				<tr>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Data Cadastro</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php while($cliente = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
				<tr>
					<td><?php echo $cliente ['nomeCliente'] ?></td>
					<td><?php echo $cliente ['email'] ?></td>
					<td><?php echo dateConvert( $cliente ['dataCadastro']) ?></td>
					<td>
					<a href="form-edit.php?id=<?php echo $cliente ['idCliente']?>"> Editar</a>
					<a href="delete.php?id=<?php echo $cliente ['idCliente']?>" onclick="return confirm('Deseja realmente excluir esse cliente?') ;"> Excluir</a>
					</td>
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
		<?php else: ?>
		<p> Nenhum cliente cadastrado.</p>
		<?php endif; ?>
	</body>
</html>
