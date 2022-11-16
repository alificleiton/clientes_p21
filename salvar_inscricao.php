<?php include_once "./conexao.php"; ?>
<?php include_once "./cabecalho.php"; ?>


<?php
   
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $ativo = $_POST['ativo'];

    $sql = "SELECT cpf from clientes where cpf = '$cpf' LIMIT 1";
    $result = $conn->query($sql);

    if($result->num_rows > 0){

        $sql = "UPDATE clientes SET nome='$nome', cep = '$cep', endereco='$endereco', bairro ='$bairro', cidade='$cidade', uf='$uf', telefone = '$telefone', email = '$email' , ativo ='$ativo' WHERE cpf='$cpf'";
                
    if($conn->query($sql)){
        echo "<p style='color:white;'>Dados do Cliente atualizado com sucesso!</p>";
    }else{
        echo "<p style='color:black;'>Cliente não atualizado com sucesso!</p>";
    }

                    //echo "<hr>";

    }else{

        $sql = "INSERT INTO clientes (cpf, nome, cep, endereco, bairro, cidade, uf,telefone, email, ativo) VALUES ('$cpf', '$nome', '$cep', '$endereco', '$bairro', '$cidade', '$uf', '$telefone', '$email', '$ativo')";
        //echo $sql;
    					
    	if($conn->query($sql)){
    		echo "<p style='color:white;'>Novo Cliente cadastrado com sucesso!</p>";

    	}else{
    		echo "<p style='color:black;'>Cliente não cadastrado com sucesso!</p>";
    	}

    }
     


?>

<br>
<br>
<br>
<span><a class="botao" href="index.php">VOLTAR </a></span>