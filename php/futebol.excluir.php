<html>
	<head>
		<title>futebol - Exclusão</title>
		<link rel="stylesheet" type="text/css" href="../css/estiloform.css">
		
	</head>
<body>
<?php
	$conexao = mysqli_connect("localhost","root","");

	mysqli_select_db($conexao, "projeto") or
		die("Falha na seleção do banco de dados: ". mysqli_error($conexao));
		
		if(!isset($_GET["c"]))
			die("Página chamada de forma incorreta. Use a página de listagem para selecionar
		o aluno a ser exclúido.");
		
		if ( (int) $_GET["c"] <1)
			die("Código do aluno a ser excluído inválido. Sistema Interrompido.") ;
		
		//tabela
		$comandoSQL = "DELETE FROM futebol WHERE codFunc=" . $_GET["c"];
		
		mysqli_query($conexao, $comandoSQL) or
		die("Erro na tentativa de eliminação do aluno código $c : " . mysqli_error() ) ;
		?>
	<script>
		window.location.href = "futebol.listagem.php";

	</script>

</body>
</html>