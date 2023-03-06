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
$sql = "SELECT * FROM ficha WHERE alunoID = $alunoid";
$result = mysqli_query($conn, $sql);

// Cria o HTML com os dados do treino
$html = '';
if (mysqli_num_rows($result) > 0) {
    $html .= "<div class='row'>";
    while($row = mysqli_fetch_assoc($result)) {
        $html .= "<div class='col-md-4'>";
        $html .= "<div class='card'>";
        $html .= "<div class='card-body'>";
        $html .= "<h5 class='card-title'>Treino " . $row["cat_treino"] . "</h5>";
        $html .= "<p class='card-text'>" . $row["exercicio"] . "</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</div>";
    }
    $html .= "</div>";
} else {
    $html = "<p>Nenhum treino cadastrado para este aluno.</p>";
}

// Fecha a conexão
mysqli_close($conn);

// Exibe o HTML com os dados do treino
echo $html;
?>