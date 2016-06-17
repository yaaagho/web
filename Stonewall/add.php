<?php
	require_once 'init.php';
	include_once 'cliente.class.php';

	 // pega os dados do formulário

	 $nome = isset($_POST['txtNome']) ? $_POST['txtNome'] : null;
	 $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : null;
	 $data = isset($_POST['txtData']) ? $_POST['txtData'] : null;
	 
	 // validação simples se campos estão vazios
	 if(empty($nome) || empty($email))
	 {
		 echo "Há campos em branco.";
		 exit;
	 }
	 
	 // instancia objeto cliente
	 $cliente = new Clientes($nome, $email, $data, $file_src);

	 // insere no BD
	 $PDO = db_connect();
	 $sql ="INSERT INTO clientes(nomeCliente, email, dataCadastro) VALUES(:nome, :email, :data)";
	 $stmt = $PDO->prepare($sql);
	 $stmt->bindParam(':nome', $cliente->getNome());
	 $stmt->bindParam(':email', $cliente->getEmail());
	 $stmt->bindParam(':data', $cliente->getData());
	 
	 if($stmt->execute())
	 {
		header('Location: clientes.php');
	 }
	 else
	 {
		 echo"Erro ao cadastrar cliente.";
		 print_r($stmt->errorInfo());
	 }
?>