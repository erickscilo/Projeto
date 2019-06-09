<html>
	<head>
		<title>Cadastrado</title>
		<link rel="stylesheet" type="text/css" href="../css/estiloform.css">
	</head>
<body>

<?php

//criar variáveis
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



//////////////////////////////////////////////////////////////
//Conenctando no MYSQL

//echo "Conectando no MYSQL...<br>";
$con = mysqli_connect("localhost","root","");
$banco = "projeto";
$servidor = "localhost";
$usuario = "root";	
$senha = "";

$con = mysqli_connect($servidor,$usuario,$senha);

//echo "OK - MySQL conectado<br><br>";

//Selecionar/abrir o banco de dados db_clinica
mysqli_select_db($con,$banco) or
die(""
. mysqli_error($con));
//echo "OK - Banco aberto. <br><br>";

//Criando a variavel e inserindo o registro novo
//echo "Inserindo o registro no banco/tabela...<br>";
if(isset($_POST['integral']))
{
	$comandoSQL = "INSERT INTO inf 
	(nomeMae,cpfMae,nome,cpf,sexo,dataNasc,telFixo,cel,cidade,bairro,endereco,dataInsc)
	VALUES
	('$nomeMae','$cpfMae','$nome','$cpf','$sexo','$dataNasc','$telFixo','$cel','$cidade','$bairro','$endereco','$dataInsc')";


mysqli_query($con,$comandoSQL) or
die("Erro na inserção de registro: "
. mysqli_error($con));
}

if(isset($_POST['bateria']))
{
	$comandoSQL = "INSERT INTO bateria 
	(nomeMae,cpfMae,nome,cpf,sexo,dataNasc,telFixo,cel,cidade,bairro,endereco,dataInsc)
	VALUES
	('$nomeMae','$cpfMae','$nome','$cpf','$sexo','$dataNasc','$telFixo','$cel','$cidade','$bairro','$endereco','$dataInsc')";


mysqli_query($con,$comandoSQL) or
die("Erro na inserção de registro: "
. mysqli_error($con));
}

if(isset($_POST['futebol']))
{
	$comandoSQL = "INSERT INTO futebol 
	(nomeMae,cpfMae,nome,cpf,sexo,dataNasc,telFixo,cel,cidade,bairro,endereco,dataInsc)
	VALUES
	('$nomeMae','$cpfMae','$nome','$cpf','$sexo','$dataNasc','$telFixo','$cel','$cidade','$bairro','$endereco','$dataInsc')";


mysqli_query($con,$comandoSQL) or
die("Erro na inserção de registro: "
. mysqli_error($con));
}

if(isset($_POST['violao']))
{
	$comandoSQL = "INSERT INTO violao 
	(nomeMae,cpfMae,nome,cpf,sexo,dataNasc,telFixo,cel,cidade,bairro,endereco,dataInsc)
	VALUES
	('$nomeMae','$cpfMae','$nome','$cpf','$sexo','$dataNasc','$telFixo','$cel','$cidade','$bairro','$endereco','$dataInsc')";


mysqli_query($con,$comandoSQL) or
die("Erro na inserção de registro: "
. mysqli_error($con));
}

if(isset($_POST['ballet']))
{
	$comandoSQL = "INSERT INTO ballet 
	(nomeMae,cpfMae,nome,cpf,sexo,dataNasc,telFixo,cel,cidade,bairro,endereco,dataInsc)
	VALUES
	('$nomeMae','$cpfMae','$nome','$cpf','$sexo','$dataNasc','$telFixo','$cel','$cidade','$bairro','$endereco','$dataInsc')";


mysqli_query($con,$comandoSQL) or
die("Erro na inserção de registro: "
. mysqli_error($con));
}

if(isset($_POST['artesanato']))
{
	$comandoSQL = "INSERT INTO artesanato 
	(nomeMae,cpfMae,nome,cpf,sexo,dataNasc,telFixo,cel,cidade,bairro,endereco,dataInsc)
	VALUES
	('$nomeMae','$cpfMae','$nome','$cpf','$sexo','$dataNasc','$telFixo','$cel','$cidade','$bairro','$endereco','$dataInsc')";


mysqli_query($con,$comandoSQL) or
die("Erro na inserção de registro: "
. mysqli_error($con));
}

?>
<script>
	alert("Cadastrado com sucesso!");
	window.location.href="../cadastro.html";
</script>
</body>
</html>
