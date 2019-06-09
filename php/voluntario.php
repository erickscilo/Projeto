<html>
	<head>
		<title>Voluntario - Cadastrado</title>
		<link rel="stylesheet" type="text/css" href="../css/estiloform.css">
	</head>
<body>
<?php

//criar variáveis
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

//////////////////////////////////////////////////////////////
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

$comandoSQL = "INSERT INTO voluntario 
(nome,cpf,sexo,dataNasc,telFixo,cel,cidade,bairro,endereco,dataInsc, setor)
VALUES
('$nome','$cpf','$sexo','$dataNasc','$telFixo','$cel','$cidade','$bairro','$endereco','$dataInsc','$setor')";


mysqli_query($con,$comandoSQL) or
die("Erro na inserção de registro: "
. mysqli_error($con));
?>

<script>
	alert("Cadastrado com sucesso!");
	window.location.href="../voluntario.html";
</script>

</body>
</html>