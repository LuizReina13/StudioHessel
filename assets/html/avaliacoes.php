<h2 class='fs-5'> Avaliação</h2> 
<form method="post" action="gravaravaliacao.php">
<div class="container">
        <form>
            <div class="form-group">
                <label for="dataAvaliacao">Data da avaliação:</label>
                <input type="date" id="dataAvaliacao" name="dataAvaliacao" class="form-control">
            </div>
            <div class="form-group">
            <label for="dropdown">Aluno: </label>
				<select class="form-control" id="dropdownalunoavaliacao" name="dropdownalunoavaliacao">
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
            <div class="form-group">
                <label for="peso">Peso (kg):</label>
                <input type="number" id="peso" name="peso" step="0.01" class="form-control">
            </div>
            <div class="form-group">
                <label for="altura">Altura (m):</label>
                <input type="number" id="altura" name="altura" step="0.01" class="form-control">
            </div>
            <div class="form-group">
                <label for="imc">IMC:</label>
                <input type="number" id="imc" name="imc" step="0.01" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="bracoDireito">Braço direito (cm):</label>
                <input type="number" id="bracoDireito" name="bracoDireito" step="0.01" class="form-control">
            </div>
            <div class="form-group">
                <label for="bracoEsquerdo">Braço esquerdo (cm):</label>
                <input type="number" id="bracoEsquerdo" name="bracoEsquerdo" step="0.01" class="form-control">
            </div>
            <div class="form-group">
                <label for="pernaDireita">Perna direita (cm):</label>
                <input type="number" id="pernaDireita" name="pernaDireita" step="0.01" class="form-control">
            </div>
            <div class="form-group">
                <label for="pernaEsquerda">Perna esquerda (cm):</label>
                <input type="number" id="pernaEsquerda" name="pernaEsquerda" step="0.01" class="form-control">
            </div>
            <div class="form-group">
                <label for="panturrilha">Panturrilha (cm):</label>
                <input type="number" id="panturrilha" name="panturrilha" step="0.01" class="form-control">
            </div>
            <div class="form-group">
                <label for="torax">Tórax (cm):</label>
                  <input type="number" id="torax" name="torax" step="0.01" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cintura">Cintura (cm):</label>
                    <input type="number" id="cintura" name="cintura" step="0.01" class="form-control">
                </div>
                <div class="form-group">
                    <label for="abdomen">Abdômen (cm):</label>
                    <input type="number" id="abdomen" name="abdomen" step="0.01" class="form-control">
                </div>
                <div class="form-group">
                    <label for="quadril">Quadril (cm):</label>
                    <input type="number" id="quadril" name="quadril" step="0.01" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        
        <script>
            // Função para calcular o IMC a partir do peso e altura informados
            function calcularIMC() {
                var peso = parseFloat($("#peso").val());
                var altura = parseFloat($("#altura").val());
                var imc = peso / (altura * altura);
                $("#imc").val(imc.toFixed(2));
            }
            
            // Chamando a função calcularIMC ao alterar o peso ou altura
            $("#peso, #altura").on("change", calcularIMC);
        </script>