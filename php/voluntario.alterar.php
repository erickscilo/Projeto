<html>
	<head>
		<title>Voluntário - Alterar</title>
		<link rel="stylesheet" type="text/css" href="../css/estiloform.css">
	</head>
<body>
<?php
if ( ! isset($_GET["c"]))
die("Programa chamado de forma incorreta.");

$codigo = $_GET["c"];

$conexao=mysqli_connect("localhost","root","") or die("Erro na conexão com o MYSQL.") ;

mysqli_select_db($conexao,"projeto") or die("Falha na seleção do banco de dados:" . mysqli_error($conn) );

$comandoSQL = "SELECT * FROM voluntario WHERE codFunc=$codigo";

$registro=mysqli_query($conexao,$comandoSQL) or die("Erro na seleção do Funcionario: " . mysqli_error($conexao));

$linhas = mysqli_num_rows($registro);
			
if($linhas<1)
die("Código $codFunc não encontrado. Aluno foi excluído?");

$dados = mysqli_fetch_array($registro);
////////////
$codFunc 		= 	$dados["codFunc"];

$nome 			= 	$dados["nome"];
$cpf 			= 	$dados["cpf"];
$sexo 			= 	$dados["sexo"];
$dataNasc 		= 	$dados["dataNasc"];
$telFixo 		= 	$dados["telFixo"];
$cel 			= 	$dados["cel"];
$cidade 		= 	$dados["cidade"];
$bairro 		= 	$dados["bairro"];
$endereco 		= 	$dados["endereco"];
$dataInsc 		= 	$dados["dataInsc"];
$setor			=   $dados["setor"];

?>
<div class="voltarmenu">
	<a href="voluntario.listagem.php">
		<center><div class="voltar">Voltar para a tela de listagem</div></center>
	</a>
</div>
<form action="voluntario.gravar.php" method="post" enctype="multipart/form-data">

	<input type="hidden" name="codFunc" value="<?php echo $codFunc;?>">
	<br>
	<h1> Formulário de alteração: </h1>
	<hr>
	<fieldset>
		<legend>Dados Pessoais</legend>
		Nome: <input type="text" name="nome" value="<?php echo $nome;?>" maxlength="70" size="50" required>
		RG: <input type="text" name="cpf" value="<?php echo $cpf;?>" maxlength="11" size="11" required>
		<br>
		Sexo:
		<select name="sexo" required value="<?php echo $sexo;?>">
			<option value="" <?php if($sexo=='') echo 'selected';?>>Escolha</option>
			<option value="H" <?php if($sexo=='H') echo 'selected';?>>Homem</option>
			<option value="M" <?php if($sexo=='M') echo 'selected';?>>Mulher</option>
			<option value="O" <?php if($sexo=='O') echo 'selected';?>>Outro</option>
		</select>
		Data de Nascimento: <input type="date" name="dataNasc" value="<?php echo $dataNasc;?>" required>
		<br>
		Telefone Fixo: <input type="text" name="telFixo" value="<?php echo $telFixo;?>" maxlength="13" size="13">
		Celular: <input type="text" name="cel" value="<?php echo $cel;?>" maxlength="14" size="14" required>
		
		Cidade: <input type="text" name="cidade" value="<?php echo $cidade;?>" maxlength="20" size="20" required>
		<br>
		Bairro: <input type="text" name="bairro" value="<?php echo $bairro;?>" maxlength="20" size="20">
		Endereço: <input type="text" name="endereco" value="<?php echo $endereco;?>" maxlength="50" size="50" required>
	</fieldset>
	<br>
	<fieldset>
		Data de inscrição: <input type="date" name="dataInsc" value="<?php echo $dataInsc;?>" min="1980-01-01" max="2020-01-01">
		Setor: <input type="text" name="setor" maxlength="20" size="20" value="<?php echo $setor; ?>" required>
	</fieldset>
	<br>
	<hr>
	<center>
		<input class="enviar" id="enviarFunc" type="submit" value="Enviar">
		<input class="enviar" id="enviarFunc" type="reset" value="Apagar">
	</center>
	<br>	
</form>	
</body>
</html>