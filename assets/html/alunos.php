<h2 class='fs-5'> Alunos</h2> 
    <div class='container mt-5'>
        <div class='form-group'>
            <input type='text' class='form-control' placeholder='Pesquisar...'>
        </div>

    <table class='table' id='aluno-table'>
    <thead>
    <tr>
        <th>Aluno</th>
        <th>Objetivo</th>
        <th>Horario</th>
        <th>Data de Entrada</th>
        <th>Relatorio</th>
        <th>Treino</th>
		<th></th>
    </tr>
    </thead>
    <tbody>

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

$sql = "SELECT * FROM aluno";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["nome"]. "</td>";
        echo "<td>" . $row["objetivo"]. "</td>";
        echo "<td>" . $row["horario"]. "</td>";
        echo "<td>" . $row["data_entrada"]. "</td>";
		echo "<td> <img src='assets/img/relatorio.png' onclick='abrerelatorio(" . $row["alunoID"] . ")' data-toggle='modal' data-target='#relatorio-modal'data-alunoid='" . $row["alunoID"] . "'/> </td>";
		echo "<td> <img src='assets/img/weights.png'  onclick='abretreino(" . $row["alunoID"] . ")' data-toggle='modal' data-target='#treino-modal' data-alunoid='" . $row["alunoID"] . "'/> </td>";
		echo "<td> <img src='assets/img/edit.png'  onclick='abreeditar(" . $row["alunoID"] . ")' data-toggle='modal' data-target='#editarModal' data-alunoid='" . $row["alunoID"] . "'/> </td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

// Fecha a conexão
mysqli_close($conn);
?>
</table>

        <div class="text-center">
			<button class="btn btn-success" data-toggle="modal" data-target="#addModal">Adicionar</button>
		</div>


<!-- Modal para adicionar um aluno-->
<form method="post" action="gravaraluno.php">
	<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Adicionar Aluno</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- Conteúdo do modal -->
        <form>
			<div class="form-group row">
				<label for="nome" class="col-sm-2 col-form-label">Nome do Aluno:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do aluno">
				</div>
			</div>
			<div class="form-group row">
				<label for="objetivo" class="col-sm-2 col-form-label">Objetivo com os Treinos:</label>
				<div class="col-sm-10">
					<textarea class="form-control" id="objetivo" name="objetivo" rows="3" placeholder="Digite o objetivo do aluno"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="horario" class="col-sm-2 col-form-label">Horário:</label>
				<div class="col-sm-4">
					<input type="time" class="form-control" id="horario" name="horario">
				</div>
				<label for="data" class="col-sm-2 col-form-label">Data de Entrada:</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="data_entrada" name="data_entrada">
				</div>
			</div>
		</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="submit" class="btn btn-primary">Salvar Aluno</button>
				</div>
			</div>
		</div>
	</div>
</form>	

	<!-- Modal para exibir o relatorio-->
	<div class="modal fade" id="relatorioModal" role="dialog">
	  <div class="modal-dialog">
	  
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Relatorio do aluno</h4>
	      </div>
	      <div class="modal-body">
	        <p>Modal Body</p>
	      </div>
	      	<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-primary">Enviar Relatorio</button>
			</div>
	    </div>
	    
	  </div>
	</div>

	<!-- Modal para exibir o treino-->
	<div class="modal fade" id="treinoModal" role="dialog">
	  <div class="modal-dialog">
	  
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Treino do Aluno </h4>
	      </div>
	      <div class="modal-body">
	        <p>Modal Body</p>
	      </div>
	      <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-primary">Enviar Treino</button>
			</div>
	    </div>
	    
	  </div>
	</div>

	<!-- Modal para exibir o treino-->
	<div class="modal fade" id="editarModal" role="dialog">
	  <div class="modal-dialog">
	  
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Editar Aluno </h4>
	      </div>
	      <div class="modal-body">
	        <p>Modal Body</p>
	      </div>
	      <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-primary">Salvar Mudanças</button>
			</div>
	    </div>
	    
	  </div>
	</div>


	<!-- Incluir jQuery e Bootstrap JS -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<!-- Script para ordenar a tabela em ordem alfabetica a coluna clicada -->
	<script>
		$(document).ready(function(){
		$("th").click(function(){
			var table = $(this).parents("table").eq(0);
			var rows = table.find("tr:gt(0)").toArray().sort(comparer($(this).index()));
			this.asc = !this.asc;
			if (!this.asc){rows = rows.reverse()}
			for (var i = 0; i < rows.length; i++){table.append(rows[i])}
		});
		function comparer(index) {
			return function(a, b) {
			var valA = getCellValue(a, index), valB = getCellValue(b, index);
			return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB);
			};
		}
		function getCellValue(row, index){ return $(row).children("td").eq(index).text(); }
		});
    </script>

	<!-- Script para criar os eventos onclick das imagens de relatorio, treino e editar -->
	<script>
    	function abrerelatorio(id) {
		var alunoid = $(event.target).data('alunoid');
    	$.ajax({
        url: 'get_relatorio.php',
        type: 'POST',
        data: { alunoid: alunoid },
        success: function(response) {
            $("#relatorioModal .modal-body").html(response);
            $("#relatorioModal").modal();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}

		function abretreino(id) {
    	var alunoid = $(event.target).data('alunoid');
    	$.ajax({
        url: 'get_treino.php',
        type: 'POST',
        data: { alunoid: alunoid },
        success: function(response) {
            $("#treinoModal .modal-body").html(response);
            $("#treinoModal").modal();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}


		function abreeditar(id) {
    	var alunoid = $(event.target).data('alunoid');
    	$.ajax({
        url: 'editaraluno.php',
        type: 'POST',
        data: { alunoid: alunoid },
        success: function(response) {
            $("#editarModal .modal-body").html(response);
            $("#editarModal").modal();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}
	</script>


	