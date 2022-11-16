<?php include_once "./conexao.php"; ?>
<?php include_once "./cabecalho.php"; ?>
		
<?php
if(!empty($_GET['cpf'])){
   $cpf =  $_GET['cpf'];
   $sql = "SELECT * from clientes where cpf = '$cpf' LIMIT 1";
   $result = $conn->query($sql);

   if($result->num_rows > 0){
      while($user_data =  mysqli_fetch_assoc($result)){
         $nome = $user_data['nome'];
         $endereco = $user_data['endereco'];
         $cep = $user_data['cep'];
         $bairro = $user_data['bairro'];
         $cidade = $user_data['cidade'];
         $uf = $user_data['uf'];
         $email = $user_data['email'];
         $telefone = $user_data['telefone'];
         $ativo = $user_data['ativo'];
      }
   }

}
   
?>

<form action="salvar_inscricao.php" method="post">
 <input type=text placeholder="Digite seu CPF" id="cpf" name="cpf" value="<?php echo $cpf ?>" required><br>
 <input type=text placeholder="Digite seu nome" id="nome" name="nome" value="<?php echo $nome ?>" required><br>
 <input type=text placeholder="Digite seu CEP" id="cep" name="cep" value="<?php echo $cep ?>" required><br>
 <input type=text placeholder="Digite seu endereço" id="endereco" name="endereco" value="<?php echo $endereco ?>" required><br>
 <input type=text placeholder="Digite seu bairro" id="bairro" name="bairro" value="<?php echo $bairro ?>" required><br>
 <input type=text placeholder="Digite sua cidade" id="cidade" name="cidade" value="<?php echo $cidade ?>" required><br>
 <input type=text placeholder="Digite seu telefone" id="telefone" name="telefone" value="<?php echo $telefone ?>" required><br>
 <input type=text placeholder="Digite sua UF" id="uf" name="uf" value="<?php echo $uf ?>" required><br>
 <input type=email placeholder="Digite seu email" id="email" name="email" value="<?php echo $email ?>" required><br>
 <select name="ativo" id="ativo">
    <option value="SIM" <?php $ativo == "SIM" ? 'selected' : '' ?> required>SIM</option>
    <option value="NÃO" <?php $ativo == "NÃO" ? 'selected' : '' ?> required>NÃO</option>
  </select>
<input type=submit value="ENVIAR">
</form>


<br>
<br>
<br>
<span><a class="botao" href="index.php">VOLTAR </a></span>