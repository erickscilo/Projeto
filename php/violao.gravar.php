<html>
	<head>
		<title>violao - Alterar</title>
		<link rel="stylesheet" type="text/css" href="../css/estiloform.css">
	</head>
<body>
<?php
$conexao=mysqli_connect("localhost","root","") or
		die("Erro na conexão com o MYSQL.") ;

mysqli_select_db($conexao , "projeto") or
	die("Falha na seleção do banco de dados:" . mysqli_error($conn));

$codFunc = $_POST["codFunc"];
$nomeMae = $_POST["nomeMae"];
$cpfMae = $_POST["cpfMae"];

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


$sql = "UPDATE violao SET nomeMae='$nomeMae', cpfMae='$cpfMae', nome='$nome', 
							 cpf='$cpf',sexo='$sexo', dataNasc='$dataNasc', telFixo='$telFixo', cel='$cel',
							cidade='$cidade', bairro='$bairro', endereco='$endereco',
								dataInsc='$dataInsc'
								";	

	$sql = $sql . " WHERE codFunc=".$codFunc;
	
	//die($sql);
	
	mysqli_query ( $conexao, $sql) or 
		die("Erro na atualização do 
		    Aluno $codFunc:" . mysqli_error($conexao));				
		?>
		 <script>
			alert("Aluno(a) Atualizado(a) com sucesso!");
			window.location.href = "violao.listagem.php";
		 </script>
	

</body>
</html><html>
	<head>
		<title>violao - Alterar</title>
		<link rel="stylesheet" type="text/css" href="../css/estiloform.css">
	</head>
<body>
<?php
$conexao=mysqli_connect("localhost","root","") or
		die("Erro na conexão com o MYSQL.") ;

mysqli_select_db($conexao , "projeto") or
	die("Falha na seleção do banco de dados:" . mysqli_error($conn));

$codFunc = $_POST["codFunc"];
$nomeMae = $_POST["nomeMae"];
$cpfMae = $_POST["cpfMae"];

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


$sql = "UPDATE violao SET nomeMae='$nomeMae', cpfMae='$cpfMae', nome='$nome', 
							 cpf='$cpf',sexo='$sexo', dataNasc='$dataNasc', telFixo='$telFixo', cel='$cel',
							cidade='$cidade', bairro='$bairro', endereco='$endereco',
								dataInsc='$dataInsc'
								";	

	$sql = $sql . " WHERE codFunc=".$codFunc;
	
	//die($sql);
	
	mysqli_query ( $conexao, $sql) or 
		die("Erro na atualização do 
		    Aluno $codFunc:" . mysqli_error($conexao));				
		?>
		 <script>
			alert("Aluno(a) Atualizado(a) com sucesso!");
			window.location.href = "violao.listagem.php";
		 </script>
	

</body>
</html><html>
	<head>
		<title>violao - Alterar</title>
		<link rel="stylesheet" type="text/css" href="../css/estiloform.css">
	</head>
<body>
<?php
$conexao=mysqli_connect("localhost","root","") or
		die("Erro na conexão com o MYSQL.") ;

mysqli_select_db($conexao , "projeto") or
	die("Falha na seleção do banco de dados:" . mysqli_error($conn));

$codFunc = $_POST["codFunc"];
$nomeMae = $_POST["nomeMae"];
$cpfMae = $_POST["cpfMae"];

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


$sql = "UPDATE violao SET nomeMae='$nomeMae', cpfMae='$cpfMae', nome='$nome', 
							 cpf='$cpf',sexo='$sexo', dataNasc='$dataNasc', telFixo='$telFixo', cel='$cel',
							cidade='$cidade', bairro='$bairro', endereco='$endereco',
								dataInsc='$dataInsc'
								";	

	$sql = $sql . " WHERE codFunc=".$codFunc;
	
	//die($sql);
	
	mysqli_query ( $conexao, $sql) or 
		die("Erro na atualização do 
		    Aluno $codFunc:" . mysqli_error($conexao));				
		?>
		 <script>
			alert("Aluno(a) Atualizado(a) com sucesso!");
			window.location.href = "violao.listagem.php";
		 </script>
	

</body>
</html>