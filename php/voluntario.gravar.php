<html>
	<head>
		<title>Voluntário - Alterar</title>
		<link rel="stylesheet" type="text/css" href="../css/estiloform.css">
	</head>
<body>
<?php
$conexao=mysqli_connect("localhost","root","") or
		die("Erro na conexão com o MYSQL.") ;

mysqli_select_db($conexao , "projeto") or
	die("Falha na seleção do banco de dados:" . mysqli_error($conn));

$codFunc = $_POST["codFunc"];

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];

$sexo = $_POST["sexo"];
$dataNasc = $_POST["dataNasc"];
$telFixo = $_POST["telFixo"];
$cel = $_POST["cel"];

$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$endereco = $_POST["endereco"];
$dataInsc = $_POST["dataInsc"];
$setor = $_POST["setor"];

$sql = "UPDATE voluntario SET  nome='$nome', 
							 cpf='$cpf', sexo='$sexo', dataNasc='$dataNasc', telFixo='$telFixo', cel='$cel',
							cidade='$cidade', bairro='$bairro', endereco='$endereco',
								dataInsc='$dataInsc', setor='$setor' ";	

	$sql = $sql . " WHERE codFunc=".$codFunc;
	
	//die($sql);
	
	mysqli_query ( $conexao, $sql) or 
		die("Erro na atualização do 
		    Aluno $codFunc:" . mysqli_error($conexao));
?>
<script>
	alert("Voluntario(a) alterado(a) com sucesso!");
	window.location.href="voluntario.listagem.php";
</script>
</body>
</html>