<?php include_once "./conexao.php"; ?>
<?php include_once "./cabecalho.php"; ?>


<?php

if(!empty($_GET['cpf'])){
   $cpf =  $_GET['cpf'];
    

    $sql = "SELECT cpf from clientes where cpf = '$cpf' LIMIT 1";
    $result = $conn->query($sql);

    if($result->num_rows > 0){

        $sql = "DELETE from clientes WHERE cpf='$cpf'";
                
        if($conn->query($sql)){
            echo "<p style='color:white;'>CLIENTE EXCLUÍDO COM SUCESSO!</p>";
        }else{
            echo "<p style='color:black;'>ERRO AO EXCLUIR CLIENTE</p>";
        }

                    //echo "<hr>";

    }else{

        echo "<p style='color:black;'>CLIENTE NÃO ENCONTRADO</p>";
    }

}

?>

<br>
<br>
<br>
<span><a class="botao" href="index.php">VOLTAR </a></span>