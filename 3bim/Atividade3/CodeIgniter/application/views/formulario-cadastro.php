<!DOCTYPE html>
<html lang ="pt-br">
	
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
		
			echo anchor(base_url(),"Home") . "  " .
			anchor (base_url("formulario-cadastro"), "Cadastrar Nova Referência") . "  " .
			anchor(base_url("gerar-pdf"), "Listagem das Referências Cadastradas") . "  " .
			anchor(base_url(""), "Consultar Referência") . heading("Cadastrar Nova Referência", 2) ;
			$atributos = array('name' => 'formulario_citacoes ', 'id'=>'formulario_citacoes');
			echo form_open(base_url('welcome/enviar_referencia'), $atributos) .
			form_label("Nome: " ,"txt_nome") . br() .
			form_input('txt_nome') . br() .
			form_label("Título: ","txt_titulo") . br() .
			form_input('txt_titulo') . br() .
			form_label("Autores: ","txt_autores") . br() .
			form_textarea('txt_autores') . br() .
			form_label("Citações: ","txt_citacoes") . br() .
			form_input('txt_citacoes') . br() .
			form_label("Palavras-chave: ","txt_palavrasChave") . br() .
			form_input('txt_palavrasChave') . br() .
			form_label("Referências: ","txt_referencias") . br() .
			form_input('txt_referencias') . br() .
			form_submit("btn_enviar","Enviar Dados") .
			form_close();
		?>
	</body>
</html>
