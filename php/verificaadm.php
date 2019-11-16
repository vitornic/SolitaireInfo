<?php 
include '../inc/conecta_mysql.inc';
$Nome           = $_POST['ADMNome'];
$Email 	        = $_POST['ADMEmail'];
$Senha          = md5($_POST['ADMSenha']);
$Fone           = $_POST['ADMTel'];
$erro			= 0;

$cod_valid = md5(uniqid(rand()));

if ($erro == 0) {
	echo ".<br>";
	include '../inc/PTinsereADM.inc';
}
?>