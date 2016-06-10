<!DOCTYPE html>
	<html lang="en">

	<head>
 		<meta charset="utf-8" />
 		<title>Titulo da pagina</title>
		<script type = "text/javascript" src = "jquery-2.1.1.min.js"></script>
		<script type = "text/javascript" src = "jquery.maskedinput.js"></script> 	
 	</head>

	<body>	
		<h1>Envio de Dados MySQL</h1>
		<p><a href="form-add.php">Adicionar Usuário</a></p>
		<h2>Lista de Alunos</h2>
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
		<td><?php	
		</tr>
					
		
		
		</tbody>

		</table>

		<script language = "JavaScript" type="text/javascript">
			$("#dtNasc").mask("99/99/9999");		
		</script>	

		</form>

	</body>

</html>
