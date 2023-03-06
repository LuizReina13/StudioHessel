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
	$data_inicio = $_POST['dataini'];
    $data_final = $_POST['datafin'];
	$cat_treino = $_POST['categoriatreino'];
    $exercicio = $_POST['exerc'];
    $aluno = $_POST['dropdownaluno'];


	// Query para inserir os dados no banco de dados
	$sql = "INSERT INTO ficha (data_inicio, data_final, cat_treino, exercicio, alunoID) VALUES ('$data_inicio', '$data_final', '$cat_treino', '$exercicio', '$aluno')";

	if ($conn->query($sql) === TRUE) {
		echo "Dados gravados com sucesso!";

	} else {
		echo "Erro ao gravar os dados: " . $conn->error;
	}

	// Fecha a conexão com o banco de dados
	$conn->close();
?>