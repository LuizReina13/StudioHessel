<h2 class='fs-5'> Dashboard</h2> 

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

// Consulta a tabela "aluno" e conta a quantidade de registros
$sql_alunos = "SELECT COUNT(*) AS total_alunos FROM aluno";
$resultado_alunos = mysqli_query($conn, $sql_alunos);

// Verifica se a consulta retornou algum resultado
if (mysqli_num_rows($resultado_alunos) > 0) {
    // Armazena o número de registros encontrados na variável $qtd_alunos
    $row_alunos = mysqli_fetch_assoc($resultado_alunos);
    $qtd_alunos = $row_alunos["total_alunos"];
} else {
    $qtd_alunos = 0;
}

// Consulta a tabela "ficha" e conta a quantidade de registros
$sql_fichas = "SELECT COUNT(*) AS total_fichas FROM ficha";
$resultado_fichas = mysqli_query($conn, $sql_fichas);

// Verifica se a consulta retornou algum resultado
if (mysqli_num_rows($resultado_fichas) > 0) {
    // Armazena o número de registros encontrados na variável $qtd_fichas
    $row_fichas = mysqli_fetch_assoc($resultado_fichas);
    $qtd_fichas = $row_fichas["total_fichas"];
} else {
    $qtd_fichas = 0;
}

// Consulta a tabela "medida" e conta a quantidade de registros
$sql_medidas = "SELECT COUNT(*) AS total_medidas FROM medida";
$resultado_medidas = mysqli_query($conn, $sql_medidas);

// Verifica se a consulta retornou algum resultado
if (mysqli_num_rows($resultado_medidas) > 0) {
    // Armazena o número de registros encontrados na variável $qtd_medidas
    $row_medidas = mysqli_fetch_assoc($resultado_medidas);
    $qtd_medidas = $row_medidas["total_medidas"];
} else {
    $qtd_medidas = 0;
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>


<div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total de Alunos: </h5>
          <p class="card-text">
              <?php echo $qtd_alunos; ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total de Fichas: </h5>
          <p class="card-text">
              <?php echo $qtd_fichas; ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total de Avaliações: </h5>
          <p class="card-text">
              <?php echo $qtd_medidas; ?>
          </p>
        </div>
      </div>
    </div>
  </div>