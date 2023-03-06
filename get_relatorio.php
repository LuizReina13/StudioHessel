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
$sql = "SELECT * FROM medida WHERE alunoID = $alunoid";
$result = mysqli_query($conn, $sql);

// Cria o HTML com os dados da medida
$html = '';
if (mysqli_num_rows($result) > 0) {
    $html .= "<div class='row'>";
    while($row = mysqli_fetch_assoc($result)) {
        $html .= "<div class='col-md-4'>";
        $html .= "<div class='card'>";
        $html .= "<div class='card-body'>";
        $html .= "<h5 class='card-title'>Avaliação " . $row["data_avaliacao"] . "</h5>";
        $html .= "<p class='card-text'>Peso: " . $row["peso"] . "</p>";
        $html .= "<p class='card-text'>Altura: " . $row["altura"] . "</p>";
        $html .= "<p class='card-text'>IMC: " . $row["imc"] . "</p>";
        $html .= "<p class='card-text'>Braço direito: " . $row["braco_d"] . "</p>";
        $html .= "<p class='card-text'>Braço esquerdo: " . $row["braco_e"] . "</p>";
        $html .= "<p class='card-text'>Perna direita: " . $row["perna_d"] . "</p>";
        $html .= "<p class='card-text'>Perna esquerda: " . $row["perna_e"] . "</p>";
        $html .= "<p class='card-text'>Panturrilha: " . $row["panturrilha"] . "</p>";
        $html .= "<p class='card-text'>Tórax: " . $row["torax"] . "</p>";
        $html .= "<p class='card-text'>Cintura: " . $row["cintura"] . "</p>";
        $html .= "<p class='card-text'>Abdômen: " . $row["abdomen"] . "</p>";
        $html .= "<p class='card-text'>Quadril: " . $row["quadril"] . "</p>";
        $html .= "</div>";
        $html .= "</div>";
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