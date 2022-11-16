
<?php include_once "./cabecalho.php"; ?>
		
<?php
	
	include_once "./conexao.php";

	$carac_espe = array("''", "'");


	if(!empty($_FILES['arquivo']['tmp_name'])){
		
		$xml = simplexml_load_file($_FILES['arquivo']['tmp_name']);

		foreach($xml->torcedor as $torcedor){
			foreach($torcedor->attributes() as $key => $value){
				//echo "$key=>$value<br>\n";
				switch($key){
					case 'nome':
						$nome = str_replace($carac_espe, "", $value);
						break;
					case 'documento':
						$cpf = $value;
						break;
					case 'cep':
						$cep = $value;
						break;
					case 'endereco':
						$endereco = $value;
						break;
					case 'bairro':
						$bairro = str_replace($carac_espe, "", $value);
						break;
					case 'cidade':
						$cidade = str_replace($carac_espe, "", $value);
						break;
					case 'uf':
						$uf = $value;
						break;
					case 'telefone':
						$telefone = $value;
						break;
					case 'ativo':
						if($value == "")
							$value = "NÃO";
						else
							$value = "SIM";
						
						$ativo = $value;
						break;
					case 'email':
						$email = $value;
						break;
				}
				
				
			}

				$sql = "SELECT cpf from clientes where cpf = '$cpf' LIMIT 1";
				$result = $conn->query($sql);

				if($result->num_rows > 0){

					$sql = "UPDATE clientes SET nome='$nome', cep = '$cep', endereco='$endereco', bairro ='$bairro', cidade='$cidade', uf='$uf', telefone = '$telefone', email = '$email' , ativo ='$ativo' WHERE cpf='$cpf'";
				
					if($conn->query($sql)){
						echo "<p style='color:white;'>Cliente atualizado com sucesso!</p>";

					}else{
						echo "<p style='color:black;'>Cliente não atualizado com sucesso!</p>";
					}

				}else{

					
					$sql = "INSERT INTO clientes (cpf, nome, cep, endereco, bairro, cidade, uf,telefone, email, ativo) VALUES ('$cpf', '$nome', '$cep', '$endereco', '$bairro', '$cidade', '$uf', '$telefone', '$email', '$ativo')";
					
					if($conn->query($sql)){
						echo "<p style='color:white;'>Cliente cadastrado com sucesso!</p>";

					}else{
						echo "<p style='color:black;'>Cliente não cadastrado com sucesso!</p>";
					}

					
				}				
		}
	}
	
?>
<br>
<br>
<br>
<span><a class="botao" href="index.php">VOLTAR </a></span>



	</body>
</html>


