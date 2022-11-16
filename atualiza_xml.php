<?php include_once "./conexao.php"; ?>

<?php include_once "./cabecalho.php"; ?>

		
		<h1> Atualizar VIA XML </h1>
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<input type="file" name="arquivo"><br><br>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>