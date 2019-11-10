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
        $sr = $conexao->query($sql) or die("".$sql."<center><span style='color:#ff0000'>ERRO DE INCLUSÃO !!!</span></center>");
        echo "<center><span style='color:#008000'>DADOS INSERIDOS COM SUCESSO !!!</span></center>";
        header("location:../ptBR/cadastrodeproduto.php");
    }
   
/*
if ($erro == 0) {
	echo ".<br>";
	include '../inc/insereCliente.inc';
}
*/
?>