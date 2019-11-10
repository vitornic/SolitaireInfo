<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produto</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/css/uikit.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit-icons.min.js"></script>
</head>
<body>

	<?php 

	include '../inc/conecta_mysql.inc';

	$PNome           = $_POST['PNome'];
	$PDesc           = $_POST['PDesc'];
	$PCusto         = $_POST['PCusto'];
	$PVenda         = $_POST['PVenda'];
	$Foto           = $_POST['PFoto'];
	$PTipo          = $_POST['PTipo'];
	$PForne         = $_POST['PForne'];

//$erro			= 0;

	$cod_valid = md5(uniqid(rand()));

	$codigomax  = "SELECT MAX(codigo) as codigo FROM `produtos`"; // Bloco responsavel pelo Auto Increment do codigo
	$con        = $conexao->query($codigomax) or die($conexao->error);
	$array      = $con->fetch_array();
	$codProd    = $array[0] + 1;

	if (empty($PNome) or empty($PDesc) or empty($PCusto) or empty($PVenda) or empty($Foto) or empty($PTipo) or empty($PForne)) {
		echo "<center><span style='color:#c0392b;'><img src='imagens/erro.png'>FAVOR DIGITAR TODOS OS CAMPOS !!!</span></center><br>";
		echo $sql;
	} else {
		$sql = "INSERT INTO produtos VALUES (".$codProd.", '".$PNome."', '".$PDesc."', '".$PCusto."', '".$PVenda."', '".$Foto."', ".$PTipo.", ".$PForne.")";
		$sr = $conexao->query($sql) or die("<p uk-margin>
	    <script type='text/javascript'>
	           UIkit.modal.alert('ERRO DE INCLUSÃO !!!').then(function() {
				    history.go(-1)
				})
	           blur()
	    </script>
	</p>");
		//$voltar = header("location:../ptBR/cadastrodeproduto.php");
		echo "<p uk-margin>
	    <script type='text/javascript'>
	        	UIkit.modal.alert('DADOS INSERIDOS COM SUCESSO !!!').then(function() {
	        		history.go(-1)
				})
	           blur()
	    </script>
	</p>";

	}

	

/*
if ($erro == 0) {
	echo ".<br>";
	include '../inc/insereCliente.inc';
}
*/
?>


</body>
</html>

