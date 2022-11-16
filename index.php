<?php include_once "./conexao.php"; ?>
<?php include_once "./cabecalho.php"; ?>

	
		
		<span><a class="botao" href="atualiza_xml.php">Atualizar VIA XML </a></span>
		<span><a class="botao" href="tela_cadastro.php"> Cadastrar NOVO </a></span>
		<span><a class="botao" href="gerar_planilha.php">Baixar Excel </a></span>
		<br>
		<br>
		<br>
		<br>
		<br>
		<?php
			$sql = "SELECT * FROM clientes ORDER BY nome ASC";
			$result = $conn->query($sql);
		?>

		<table class="table">
			<thead>
				<th>CPF</th>
				<th>Nome</th>
				<th>CEP</th>
				<th>Endereço</th>
				<th>Bairro</th>
				<th>Cidade</th>
				<th>UF</th>
				<th>Telefone</th>
				<th>Email</th>
				<th>Ativo</th>
				<th>Ações</th>
			</thead>
			<tbody>

				<?php
					while($dados = mysqli_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>".$dados['cpf']."</td>";
						echo "<td>".$dados['nome']."</td>";
						echo "<td>".$dados['cep']."</td>";
						echo "<td>".$dados['endereco']."</td>";
						echo "<td>".$dados['bairro']."</td>";
						echo "<td>".$dados['cidade']."</td>";
						echo "<td>".$dados['uf']."</td>";
						echo "<td>".$dados['telefone']."</td>";
						echo "<td>".$dados['email']."</td>";
						echo "<td>".$dados['ativo']."</td>";
						echo "<td>
								<a class='alterar' href='crud.php?cpf=$dados[cpf]'>Alterar</a>
								<a class='excluir' href='delete.php?cpf=$dados[cpf]'>Excluir</a>
								<a class='enviar_email' href='enviar_email.php'>Enviar Email</a>
							  </td>";
						echo "</tr>";
					}

				?>

			</tbody>
		</table>



	</body>
</html>