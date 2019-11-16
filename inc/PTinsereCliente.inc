<?php

include 'PTcabecalho.inc';
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

if (getenv("REQUEST_METHOD") == "POST") { 
  if($Email == "" || $Email == null){ //Verificação já feita no HTML
    echo"<script>alert('O campo Email deve ser preenchido');window.location.href='../ptBR/cadastro.html';window.parent.document.title = x;</script>";
  } else {
      if($logarray == $Email){ //Verificação no servidor
 
        exit("<p uk-margin>
                <script type='text/javascript'>
                  UIkit.modal.alert('EMAIL JA EXISTE, ESCOLHA OUTRO !!!').then(function() {
                  window.location.replace('../ptBR/cadastro.php');
                  })
                  blur()
                </script>
              </p>");

  } else if ($conexao->query($sql) == TRUE) { 
	ini_set('max_execution_time', 300); //Aumenta tempo de execução antes do time out
	exit("<p uk-margin>
                <script type='text/javascript'>
                  UIkit.modal.alert('CADASTRADO COM SUCESSO !!! REDIRECIONANDO...').then(function() {
                  window.location.replace('../ptBR/entrar.php');
                  })
                  blur()
                </script>
              </p>");

	} else { 
    exit("<p uk-margin>
                <script type='text/javascript'>
                  UIkit.modal.alert('OOPS... ALGO DEU ERRADO').then(function() {
                  window.location.replace('../ptBR/cadastro.php');
                  })
                  blur()
                </script>
              </p>");
  }
}
}
$conexao->close();
?>