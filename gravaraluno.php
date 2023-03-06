<?php
	// Credenciais de conexão com o banco de dados
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "studio_hessel";

	// Cria a conexão com o banco de dados
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Checa a conexão
	if ($conn->connect_error) {
		die("Conexão falhou: " . $conn->connect_error);
	}

	// Obtém os dados do formulário
	$nome = $_POST['nome'];
    $objetivo = $_POST['objetivo'];
    $horario = $_POST['horario'];
    $data_entrada = $_POST['data_entrada'];
    


	// Query para inserir os dados no banco de dados
	$sql = "INSERT INTO aluno (nome, objetivo, horario, data_entrada) VALUES ('$nome', '$objetivo', '$horario', '$data_entrada')";

	if ($conn->query($sql) === TRUE) {
		echo "Dados gravados com sucesso!";

	} else {
		echo "Erro ao gravar os dados: " . $conn->error;
	}

	// Fecha a conexão com o banco de dados
	$conn->close();
?>