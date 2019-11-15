<?php

include 'conecta_mysql.inc';

$Nome           = $_POST['CNome']; // Captura as informações no HTML
$Email 	        = $_POST['CEmail'];
$Senha          = $_POST['CSenha'];
$Fone           = $_POST['CTel'];

$codigomax  = "SELECT MAX(codigo) as codigo FROM `clientes`"; // Bloco responsavel pelo Auto Increment do codigo
$con        = $conexao->query($codigomax) or die($conexao->error);
$array      = $con->fetch_array();
$logarray   = $array[0] + 1;

$sql = "INSERT INTO clientes VALUES"; // Prepara o Insert no Banco de Dados
$sql .= "(".$logarray.", '".$Nome."', '".$Email."', '".$Senha."', ".$Fone.")";

$selecao  = "SELECT email FROM clientes WHERE email = '".$Email."'"; // Seleciona Email para verificação
$con      = $conexao->query($selecao) or die($conexao->error);
$array    = $con->fetch_array();
$logarray = $array['email'];

$selecaoadm = "SELECT email FROM administradores WHERE email = '".$Email."'";
$conadm     = $conexao->query($selecaoadm) or die($conexao->error);
$arrayadm   = $conadm->fetch_array();
$logarrayadm = $arrayadm['email'];

if (getenv("REQUEST_METHOD") == "POST") { 
  if($Email == "" || $Email == null){ //Verificação já feita no HTML
    echo"<script>alert('O campo Email deve ser preenchido');window.location.href='../ptBR/cadastro.html';window.parent.document.title = x;</script>";
  } else {
      if ($logarray == $Email) {
        echo"<script>alert('Esse Email já existe');window.location.href='../ptBR/cadastro.html';window.document.title = 'erro';﻿</script>";
        die();
      }

      if($logarrayadm == $Email){ //Verificação no servidor
 
        echo"<script>alert('Esse Email já existe');window.location.href='../ptBR/cadastro.html';window.document.title = 'erro';﻿</script>";
        die();
  } else if ($conexao->query($sql) == TRUE) { // Insere os dados (SQL orientado a objetos, mesma coisa q isso ->[mysli_query($conexao, $sql)])
	ini_set('max_execution_time', 300); //Aumenta tempo de execução antes do time out
	echo '<script>alert("Dados cadastrados!");
		location.href = "../ptBR/entrar.php";
	</script>'; // Cria a Tela do javascript com a mensagem

	} else { echo '<script>alert("Não foi possível cadastrar! '.$sql.'");
				location.href = "../ptBR/cadastro.html";
		</script>'; 
  }
}
}

/* LIXO \/

if($Email == "" || $Email == null){ //Verificação já feita no HTML
    echo"<script>alert('O campo Email deve ser preenchido');window.location.href='../ptBR/cadastro.html';window.parent.document.title = x;</script>";
 
    } else { //Verificação nível servidor
      if($logarray == $Email){
 
        echo"<script>alert('Esse Email já existe');window.location.href='../ptBR/cadastro.html';window.document.title = 'titulo';﻿</script>";
        die();
 
      } else {
        $conexao->query($sql);
         
        if($sql){
          echo"<script>alert('Usuário cadastrado com sucesso!');window.location.href='../ptBR/entrar.html'</script>";
        } else {
          echo"<script>alert('Não foi possível cadastrar esse usuário');window.location.href='../ptBR/cadastro.html'</script>";
        }
      }
    }

    */

$conexao->close();

?>