<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "studio_hessel";

// Cria a conexão
$conn = mysqli_connect($host, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Recebe o ID do aluno como parâmetro POST
$alunoid = $_POST['alunoid'];

// Faz a consulta no banco de dados
$sql = "SELECT * FROM aluno WHERE alunoID = $alunoid";
$result = mysqli_query($conn, $sql);

// Cria o HTML com os dados da medida
$html = '';
if (mysqli_num_rows($result) > 0) {
    $html .= "<div class='row'>";
    while($row = mysqli_fetch_assoc($result)) {
        $html .= "<div class='modal-body'>";
        $html .= "<form>";
		$html .= "<div class='form-group row'>";
		$html .= "<label for='nome' class='col-sm-2 col-form-label'>Nome do Aluno:</label>";
		$html .= "<div class='col-sm-10'>";
		$html .= "<input type='text' class='form-control' id='nome' name='nome' value='" . $row["nome"] ."'>";
		$html .= "</div>";
		$html .= "</div>";
		$html .= "<div class='form-group row'>";
		$html .= "<label for='objetivo' class='col-sm-2 col-form-label'>Objetivo com os Treinos:</label>";
		$html .= "<div class='col-sm-10'>";
		$html .= "<input class='form-control' id='objetivo' name='objetivo' rows='3' value='" . $row["objetivo"] ."'></input>";
		$html .= "</div>";
		$html .= "</div>";
		$html .= "<div class='form-group row'>";
		$html .= "<label for='horario' class='col-sm-2 col-form-label'>Horário:</label>";
		$html .= "<div class='col-sm-4'>";
		$html .= "<input type='time' class='form-control' id='horario' name='horario' value='" . $row["horario"] ."'>";
		$html .= "</div>";
		$html .= "<label for='data' class='col-sm-2 col-form-label'>Data de Entrada:</label>";
		$html .= "<div class='col-sm-4'>";
		$html .= "<input type='date' class='form-control' id='data_entrada' name='data_entrada' value='" . $row["data_entrada"] ."'>";
		$html .= "</div>";
		$html .= "</div>";
		$html .= "</form>";
		$html .= "</div>";
    }
    $html .= "</div>";
} else {
    $html = "<p>Nenhuma medida cadastrada para este aluno.</p>";
}

// Fecha a conexão
mysqli_close($conn);

// Exibe o HTML com os dados do treino
echo $html;
?>