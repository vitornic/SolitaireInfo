<?php

include 'conecta_mysql.inc';

$Nome           = $_POST['CNome'];
$Email 	        = $_POST['CEmail'];
$Senha          = md5($_POST['CSenha']);
$Fone           = $_POST['CTel'];

$sql = "INSERT INTO `clientes` VALUES";
$sql .= "('".$Nome."', '".$Email."', '".$Senha."', '".$Fone."'')";

$selecao  = "SELECT email FROM clientes WHERE Email = '$Email'";
$con      = $conexao->query($selecao) or die($conexao->error);
$array    = $con->fetch_array();
$logarray = $array['email'];

/*
if (getenv("REQUEST_METHOD") == "POST") {
    if ($conexao->query($sql) == TRUE) {
	ini_set('max_execution_time', 300);
	echo '<script>alert("Dados cadastrados!");
		location.href = "../cadastro.html";
	</script>';

	} else { echo '<script>alert("Não foi possível cadastrar!");
				location.href = "../cadastro.html";
		</script>'; }
}
*/

if($Email == "" || $Email == null){ //Verificação já feita no HTML
    echo"<script language='javascript' type='text/javascript'>alert('O campo Email deve ser preenchido');window.location.href='../ptBR/cadastro.html';window.parent.document.title = x;</script>";
 
    }else{ //Verificação nível servidor
      if($logarray == $Email){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse Email já existe');window.location.href='../ptBR/cadastro.html';window.document.title = 'titulo';﻿</script>";
        die();
 
      }else{
        $conexao->query($sql);
         
        if($sql){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../ptBR/entrar.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='../ptBR/cadastro.html'</script>";
        }
      }
    }

$conexao->close();

?>