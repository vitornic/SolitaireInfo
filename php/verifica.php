<?php 
include '../inc/conecta_mysql.inc';
$Nome           = $_POST['CNome'];
$Email 	        = $_POST['CEmail'];
$Senha          = md5($_POST['CSenha']);
$Fone           = $_POST['CTel'];
$erro			= 0;

$cod_valid = md5(uniqid(rand()));

if ($erro == 0) {
	echo ".<br>";
	include '../inc/insereCliente.inc';
}
?>