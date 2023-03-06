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
    $data_avaliacao = $_POST['dataAvaliacao'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $_POST['imc'];
    $braco_d = $_POST['bracoDireito'];
    $braco_e = $_POST['bracoEsquerdo'];
    $perna_d = $_POST['pernaDireita'];
    $perna_e = $_POST['pernaEsquerda'];
    $panturrilha = $_POST['panturrilha'];
    $torax = $_POST['torax'];
    $cintura = $_POST['cintura'];
    $abdomen = $_POST['abdomen'];
    $quadril = $_POST['quadril'];
    $alunoID = $_POST['dropdownalunoavaliacao'];


	// Query para inserir os dados no banco de dados
	$sql = "INSERT INTO medida (data_avaliacao, peso, altura, imc, braco_d, braco_e, perna_d, perna_e, panturrilha, torax, cintura, abdomen, quadril, alunoID) VALUES ('$data_avaliacao', '$peso', '$altura', '$imc', '$braco_d', '$braco_e', '$perna_d', '$perna_e', '$panturrilha', '$torax', '$cintura', '$abdomen', '$quadril', '$alunoID')";

	if ($conn->query($sql) === TRUE) {
		echo "Dados gravados com sucesso!";

	} else {
		echo "Erro ao gravar os dados: " . $conn->error;
	}

	// Fecha a conexão com o banco de dados
	$conn->close();
?>