<html>
	<head>
		<title>voluntario - Validar Exclusão</title>
		<link rel="stylesheet" type="text/css" href="../css/estiloform.css">
		
		
	</head>
<body>
<?php
$conexao = mysqli_connect("localhost","root","");

	mysqli_select_db($conexao, "projeto") or
		die("Falha na seleção do banco de dados: ". mysqli_error($conexao));
		
	$codigo = $_GET["c"];
?>
<script>
		var res = confirm("Quer excluir esse aluno?");
			if(res == true){
			window.location.href = "voluntario.excluir.php?c=<?php echo $codigo;?>";
			} else {
			window.location.href = "voluntario.listagem.php";
			}
		</script>
</body>
</html>