<?php
	require 'init.php';
?>
<div class="conteudo">
		<div class="estilo">
			<h1>RELATÓRIO DE FORNECEDORES</h1>
				  <?php
				  // inclui classes necessárias
				  spl_autoload_register(function ($class_name)
				  {
					include 'html/'.$class_name.'.class.php';
				  });

				  include 'ado/TConnection.class.php';

				  // *********************************************************
				  // corrigir caracteres
				  $html = new TElement('html');
				  $html->lang = 'pt-br';
				  //instancia seção head
				  $head = new TElement('head');
				  $html->add($head); //adiciona ao html
				  $meta = new TElement('meta');
				  $meta->charset = 'utf-8';
				  $head->add($meta);

				  $body = new TElement('body');
				  $body->bgcolor = '#ffffdd';
				  $html->add($body);

				  // *********************************************************
				  //instancia objeto-tabela
				  $tabela = new TTable;
				  //define algumas propriedades
				  $tabela->width = 500;
				  $tabela->border = 1;
				  $tabela->align = 'center';
				  //instancia uma linha para o cabeçalho
				  $cabecalho = $tabela->addRow();
				  //define a cor de fundo
				  $cabecalho->bgcolor = '#a0a0a0';
				  //adiciona células
				  $cabecalho->addCell('ID');
				  $cabecalho->addCell('Nome');
				  $cabecalho->addCell('E-Mail');
				  $cabecalho->addCell('Data de Cadastro');
				  $cabecalho->align = 'center';
				  $i = 0;

				  // define a consulta SQL
				  $sql = "SELECT idFornecedores, nomeFornecedor, email, dataFundacao FROM fornecedores";
				  try
				  {
					// abre a conexão com a base BD_CEFETMG
					$conn = TConnection::open('config/my_config.ini');
					// executa a instrução SQL
					$result = $conn->query($sql);
		
					while($row = $result->fetch(PDO::FETCH_ASSOC)) // Exibe todos os registros
					{

					// verifica qual cor utilizará para o fundo
					$bgcolor = ($i % 2) == 0 ? '#d0d0d0' : '#ffffff';
					// adiciona uma linha para os dados
					$linha = $tabela->addRow();
					$linha->bgcolor = $bgcolor;
					// adiciona as células
					$linha->addCell($row['idFornecedores']);
					$linha->addCell($row['nomeFornecedor']);
					$linha->addCell($row['email']);
					$linha->addCell(dateConvert( $row['dataFundacao']));
					$linha->align = 'center';
					$i++;

					}
					//fecha a conexão
					$conn = null;
				  } catch (Exception $e) {
					// exibe a mensagem de erro
					print "Erro! " . $e->getMessage() . "<br/>";
				  }

				  // exibe a tabela
				  //$tabela->show();
				  $body->add($tabela);
				  $html->show();
				?>
		</div>
</div>
<br>
