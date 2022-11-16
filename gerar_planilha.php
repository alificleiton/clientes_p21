<?php include_once "./conexao.php"; ?>
<?php include_once "./cabecalho.php"; ?>

<?php

$arquivo = "clientes.xls";

$html = '';
$html .= '<table border="1"';
$html .= '<tr>';
$html .= '<td colspan="10"> Planilha de Clientes</tr>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td><b>CPF</b></td>';
$html .= '<td><b>NOME</b></td>';
$html .= '<td><b>CEP</b></td>';
$html .= '<td><b>ENDEREÇO</b></td>';
$html .= '<td><b>BAIRRO</b></td>';
$html .= '<td><b>CIDADE</b></td>';
$html .= '<td><b>UF</b></td>';
$html .= '<td><b>TELEFONE</b></td>';
$html .= '<td><b>EMAIL</b></td>';
$html .= '<td><b>ATIVO</b></td>';
$html .= '</tr>';


	$sql = "SELECT * FROM clientes";
	$result = $conn->query($sql);

	while($dados = mysqli_fetch_assoc($result)){
		$html .= "<tr>";
		$html .= "<td>".$dados['cpf']."</td>";
		$html .= "<td>".$dados['nome']."</td>";
		$html .= "<td>".$dados['cep']."</td>";
		$html .= "<td>".$dados['endereco']."</td>";
		$html .= "<td>".$dados['bairro']."</td>";
		$html .= "<td>".$dados['cidade']."</td>";
		$html .= "<td>".$dados['uf']."</td>";
		$html .= "<td>".$dados['telefone']."</td>";
		$html .= "<td>".$dados['email']."</td>";
		$html .= "<td>".$dados['ativo']."</td>";
		$html .= "</tr>";
	}
	

header("Content-type: application/vnd.ms-excel");
header("Content-type: application/force-download");
header("Content-Disposition: attachment; filename=clientes.xls");
header("Pragma: no-cache");

echo $html;

exit;

?>
