<!DOCTYPE html>
<html lang="pt-br">

	<head>
	
		<meta charset="utf-8">
		<title>Citações</title>
		<?php
 			echo link_tag('https://fonts.googleapis.com/css?family=Roboto+Condensed');
 			echo link_tag('assets/css/estilo.css');
 		?>	
	</head>
	
	<body>
		
		<?php
		echo anchor(base_url(),"Home") . "  " . anchor(base_url("formulario-cadastro"), "Cadastrar Nova Referência") ;
		echo anchor(base_url("gerar-pdf"), "Listagem das Referências Cadastradas") ;
		echo anchor(base_url(""), "Consultar Referência") ;
		?>

	</body>
</html>
