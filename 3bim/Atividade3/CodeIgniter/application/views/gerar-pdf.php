<?php
	require('assets/fpdf/fpdf.php');
	$pdf = new FPDF('P', 'pt', 'A4');
	$pdf->SetTitle('Relação das Referências Bibliográficas');
	$pdf->SetAuthor('Rafaela Custódio e Yagho Baldansi');
	$pdf->SetCreator('php '.phpversion());
	$pdf->SetKeywords('php', 'pdf');
	$pdf->AddPage();
				$pdf->SetFont('arial','',14);
			$pdf->Text(0,14,'');
	$pdf->SetY(20);
	$pdf->SetX(150);
	$titulo='Relação das Referências Bibliográficas';
	$texto=utf8_decode($titulo);
	$pdf->Write(30, $texto);
	$pdf->Ln(100);	
	$pdf->SetY(50);
	$pdf->SetX(25);	

		foreach( $citacoes as $post ) {
			$nome='Nome do arquivo: '.$post->nomeArquivo;
			$texto=utf8_decode($nome);
			$pdf->Write(30, $texto);
			$pdf->Ln(30);
			$titulo='Título: '.$post->titulo;
			$texto=utf8_decode($titulo);
			$pdf->Write(30, $texto);
			$pdf->Ln(30);
			$autor='Autores: '.$post->autores;
			$texto=utf8_decode($autor);
			$pdf->Write(30, $texto);
			$pdf->Ln(30);
			$citacao='Citações: '.$post->citacoes;
			$texto=utf8_decode($citacao);
			$pdf->Write(30, $texto);
			$pdf->Ln(30);
			$referencia='Referências: '.$post->referencias;
			$texto=utf8_decode($referencia);
			$pdf->Write(30, $texto);
			$pdf->Ln(30);
			$palavras='Palavras-chave: '.$post->palavrasChave;
			$texto=utf8_decode($palavras);
			$pdf->Write(30, $texto);
			$pdf->Ln(30);
			$data='Data de Inclusão: '.$post->dataCadastro;
			$texto=utf8_decode($data);
			$pdf->Write(30, $texto);
			$pdf->Ln(30);
			$nome='------------------------------------------------------------------------------------------------------------------';
			$pdf->Write(30, $nome);
			$pdf->Ln(30);
	}	
	$pdf->Output();
?>