<?php include_once "./conexao.php"; ?>
<?php include_once "./cabecalho.php"; ?>

<form action="salvar_inscricao.php" method="post">
 <input type="text" placeholder="Digite seu CPF" id="cpf" name="cpf" required><br>
 <input type="text" placeholder="Digite seu nome" id="nome" name="nome" required><br>
 <input type="text" placeholder="Digite seu CEP" id="cep" name="cep" required><br>
 <input type="text" placeholder="Digite seu endereço" id="endereco" name="endereco" required><br>
 <input type="text" placeholder="Digite seu bairro" id="bairro" name="bairro" required><br>
 <input type="text" placeholder="Digite sua cidade" id="cidade" name="cidade" required><br>
 <input type="text" placeholder="Digite sua UF" id="uf" name="uf" required><br>
 <input type="text" placeholder="Digite seu Telefone" id="telefone" name="telefone" required><br>
 <input type="email" placeholder="Digite seu email" id="email" name="email" required><br>
 <label>ATIVO?</label>
 <select id="ativo" name="ativo">
    <option value="sim">SIM</option>
    <option value="nao">NÃO</option>
  </select>
<input type=submit value="ENVIAR">
</form>

<br>
<br>
<br>
<span><a class="botao" href="index.php">VOLTAR </a></span>