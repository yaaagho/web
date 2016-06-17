<? php
	require_once 'init.php';
	// abre a conexão
	$PDO = db_connect();
	/* SQL para contar o total de registros */
	$sql_count = "SELECT COUNT (*) AS total FROM aluno2 ORDER BY nome ASC";
	// SQL para selecionar os registros
	$sql = "SELECT idAluno, nome, dataNasc, foto FROM aluno2 ORDER BY nome ASC";
	// conta o total de registros
	$stmt_count = $PDO->prepare($sql_count);
	$stmt_count->execute();
	$total = $stmt_count->fetchColumn();
	// seleciona os registros
	$stmt = $PDO->prepare($sql);
	$stmt->execute();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
 		<title>Cadastro de Alunos</title>
		<script type = "text/javascript" src = "jquery-2.1.1.min.js"></script>
		<script type = "text/javascript" src = "jquery.maskedinput.js"></script> 	
 	</head>
	<body>	
		<h1>Cadastro de Alunos</h1>
		<p><a href="form-add.php">Adicionar</a></p>
		<p>Total de usuários: <?php echo $total ?></p>
		<?php if($total > 0): ?>
		<table width="100%" border="1">
			<thead>
				<tr>
					<th>Foto</th>
					<th>Matrícula</th>
					<th>Nome</th>
					<th>Data de Nascimento</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php while($aluno = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
				<tr>
					<?php $caminho = $aluno['foto']; ?>
					<td><?php echo "<img src='$caminho' width='100' height='100' alt='IMAGEM' />";?></td>
					<td><?php echo $aluno ['idAluno'] ?></td>
					<td><?php echo $aluno ['nome'] ?></td>
					<td><?php echo dateConvert( $aluno ['dataNasc']) ?></td>
					<td>
					<a href="form-edit.php?id=<?php echo $aluno ['idAluno']?>"> Editar</a>
					<a href="delete.php?id=<?php echo $aluno ['idAluno']?>" onclick="return confirm('Tem certeza que deseja excluir?') ;"> Excluir</a>
					</td>
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
		<?php else: ?>
		<p> Nenhum usuário registrado.</p>
		<?php endif; ?>
	</body>
</html>
