<!DOCTYPE html>
<html lang ="pt-br" >
	<head>
			
		<meta charset="utf-8">
		<title>Meu Blog</title>
		<?php
 			echo link_tag('https://fonts.googleapis.com/css?family=Roboto+Condensed');
 			echo link_tag('assets/css/estilo.css');
 		?>
	</head>
	
	<body>
		
		<?php
			echo anchor(base_url(), "Home") . "  " . anchor(base_url("formulario-cadastro"), "Cadastrar Nova Referência") . heading("Citações", 2);
		?>
		<h3>A página que você está tentando acessar não existe ou seu endereço foi modificado </h3>
		<a href =" javascript: history. go ( -1)"> Voltar </a>
	</body>
</html>
