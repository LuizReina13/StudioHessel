<?php
// Conectando ao banco de dados
$host = "localhost";
$username = "root";
$password = "";
$dbname = "studio_hessel";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Verificando conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Recuperando dados do formulário de login
$login = $_POST["usuarioinput"];
$senha = $_POST["senhainput"];

// Verificando se o usuário existe no banco de dados
$sql = "SELECT * FROM professor WHERE usuario='$login' AND senha='$senha'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // O usuário existe no banco de dados, então redirecionamos para a outra página HTML
    header("Location: principal.php");
    exit;
} else {
    // O usuário não existe no banco de dados, então exibimos uma mensagem de erro
    echo "Login ou senha incorretos. Por favor, tente novamente.";
}

// Fechando a conexão com o banco de dados
mysqli_close($conn);
?>