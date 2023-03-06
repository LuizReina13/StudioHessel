<h2 class='fs-5'> Ficha</h2> 
	<form method="post" action="gravarficha.php">
		<div class="row">
			<div class="col">
				<label for="data1">Data Inicio: </label>
				<input type="date" class="form-control" id="dataini" name="dataini">
			</div>
			<div class="col">
				<label for="data2">Data Final: </label>
				<input type="date" class="form-control" id="datafin" name="datafin">
			</div>
			<div class="col">
				<label for="dropdown">Aluno: </label>
				<select class="form-control" id="dropdownaluno" name="dropdownaluno">
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

						// Query para selecionar as opções do banco de dados
						$sql = "SELECT alunoID, nome FROM aluno ORDER BY nome asc";
						$result = $conn->query($sql);

						// Loop pelas opções e cria cada uma como uma tag <option>
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<option value='" . $row["alunoID"] . "'>" . $row["nome"] . "</option>";
							}
						}

						// Fecha a conexão com o banco de dados
						$conn->close();
					?>
				</select>
			</div>
		</div>
		<div class="row mt-3">
				<label for="dropdown">Letra Treino: </label>
				<select class="form-control1" id="categoriatreino" name="categoriatreino">
				<option value="A"> A </option>
				<option value="B"> B </option>
				<option value="C"> C </option>
				<option value="D"> D </option>
				<option value="E"> E </option>
				</select>
		</div>
		<div class="row mt-3">
			<div class="col">
				<label for="texto">Treino / Exercicios:</label>
				<textarea class="form-control" id="exerc" name="exerc" rows="3"></textarea>
			</div>
			</div>
		</div>
		<div >
		<button type="submit" class="btn btn-primary" style="margin-top: 2%;">Gravar</button>
		</div>
	</form>
<!--	<div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Treino A</h5>
          <p class="card-text">

          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Treino B</h5>
          <p class="card-text">

          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Treino C</h5>
          <p class="card-text">

          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Treino D</h5>
          <p class="card-text">

          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Treino E</h5>
          <p class="card-text">

          </p>
        </div>
      </div>
    </div>
  </div> -->