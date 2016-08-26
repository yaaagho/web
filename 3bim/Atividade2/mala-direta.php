<?php 
	require('fpdf/fpdf.php');
	require 'init.php';
	include 'ado/TConnection.class.php';

	spl_autoload_register(function ($class_name){
			include 'html/'.$class_name.'.class.php';
	});
	
	$pdf = new FPDF('P', 'pt', 'A4');
	$pdf->SetTitle('Mala Direta');
	$pdf->SetAuthor('Rafaela Custódio e Yagho Baldansi');
	$pdf->SetCreator('php '.phpversion());
	$pdf->SetKeywords('php', 'pdf');
	$pdf->SetSubject('Mala Direta');
	$i=0;

	$sql = "SELECT idCliente, nomeCliente, email, dataCadastro FROM clientes";
	
	try{
		$conn = TConnection::open('config/my_config.ini');
		$result = $conn->query($sql);
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
			$pdf->AddPage();
			//definir a fonte
			$pdf->SetFont('arial','',12);
			$pdf->Text(0,12,'');
			date_default_timezone_set('America/Sao_Paulo');
			$date = date('d/m/y');
			$pdf->SetY(20);
			$pdf->SetX(450);
			$titulo='Varginha, '.$date;
			$pdf->Write(30, $titulo);
			$pdf->Ln(75);
			$prezados='Prezado(a) Sr(a) '.$row['nomeCliente'].',';
			$pdf->Write(30, $prezados);
			$pdf->Ln(75);
			$texto='          Neste mês de aniversário, nossa loja está com promoções imperdíveis de selecionadas especialmente para você.';
			$texto=utf8_decode($texto);
			$pdf->Write(15, $texto);
			$pdf->Ln(15);
			$texto='          Não perca esta oportunidade de realizar bons negócios.';
			$texto=utf8_decode($texto);
			$pdf->Write(15, $texto);
			$pdf->Ln(15);
			$texto='          Faça-nos uma visita.';
			$texto=utf8_decode($texto);
			$pdf->Write(15, $texto);
			$pdf->Ln(75);
			$texto='Cordialmente,';
			$texto=utf8_decode($texto);
			$pdf->Write(15, $texto);
			$pdf->Ln(75);
			$pdf->SetY(400);
			$pdf->SetX(200);
			$texto='Yagho Baldansi e Rafaela Custoódio';
			$texto=utf8_decode($texto);
			$pdf->Write(15, $texto);
			$pdf->Ln(15);
			$pdf->SetY(420);
			$pdf->SetX(240);
			$texto='Gerentes Comerciais';
			$texto=utf8_decode($texto);
			$pdf->Write(15, $texto);			
			$i++;
		}
		$conn = null;
	}catch (Exception $e){
		print "Erro! " . $e->getMessage() . "<br/>";
	}
	$pdf->Output();	
?>
