<?php
$banco = "projeto";
$servidor = "localhost";
$usuario = "root";
$senha = "";
$con = mysqli_connect($servidor, $usuario, $senha);
$con->set_charset("utf8");

$resultado = mysqli_select_db($con, $banco);
?>
<html>
	<head>
		<title>violao - Listagem</title>
		<link rel="stylesheet" type="text/css" href="../css/listagem.css">
	</head>
	<body background="../image/download.png">
<?php
//Mudar o nome da tabela selecionada
$sql = "SELECT * FROM violao";

$registros = mysqli_query($con, $sql) or die
	("Erro na execução do comando de seleção de dados no MySQL: " .
	mysqli_error($con));
	
$linhas = mysqli_num_rows($registros);

echo "<center> ";
echo "Todos registros encontrados: <b>$linhas</b><br>";

echo "<div style='overflow-x:auto;'>";
echo "<table id='listagem'>";
echo "	<tr>";
//Oq está dentro dos <th> é o nome do campo da tabela
echo "		<th>Código</th>";
echo "		<th>Nome</th>";
echo "		<th>RG</th>";
echo "		<th>Sexo</th>";
echo "		<th>Data de Nascimento</th>";
echo "		<th>Tel Fixo</th>";
echo "		<th>Celular</th>";
echo "		<th>Cidade</th>";
echo "		<th>Bairro</th>";
echo "		<th>Endereço</th>";
echo "		<th>Data inscrição</th>";
echo "		<th>Nome Mãe</th>";
echo "		<th>RG Mae</th>";
echo "		<th colspan=2>Ações</th>";
echo "	</tr>";


for($n = 0; $n<$linhas; $n++){
	$dados = mysqli_fetch_array($registros);
	$codigo = $dados['codFunc'];
	echo "	<tr>";
	//Oq está dentro dos '' é o nome do campo da tabela
		echo "<td>" . $dados['codFunc'] . "</td>";
		echo "<td>" . $dados['nome'] . "</td>";
		echo "<td>" . $dados['cpf'] . "</td>";;
		echo "<td>" . $dados['sexo'] . "</td>";
		echo "<td>" . $dados['dataNasc'] . "</td>";
		echo "<td>" . $dados['telFixo'] . "</td>";
		echo "<td>" . $dados['cel'] . "</td>";
		echo "<td>" . $dados['cidade'] . "</td>";
		echo "<td>" . $dados['bairro'] . "</td>";
		echo "<td>" . $dados['endereco'] . "</td>";
		echo "<td>" . $dados['dataInsc'] . "</td>";
		echo "<td>" . $dados['nomeMae'] . "</td>";
		echo "<td>" . $dados['cpfMae'] . "</td>";
		?><script>
			function funcao1(){
		
		var res = confirm("Quer excluir esse aluno?");
			if(res == true){
			window.location.href = "violao.excluir.php?c=<?php echo $codigo;?>";
			} else {
			window.location.href = "violao.listagem.php";
			}
			}
		</script><?php
		echo "<td> <a href='violao.alterar.php?c=$codigo'>Alterar</a></td>";
		echo "<td><input type='button' onclick='funcao1()' value='Excluir' /></td>";
		
	echo "	</tr>";	
}
echo "</table>";
echo "</div> <br>";
echo "<a href='../index.html'><div class='voltar'>Ir para o menu</div></a>";
echo "<a href='../cadastro.html'><div class='voltar'>Voltar à tela de cadastro</div></a><br></center>";?>
</body>
</html>