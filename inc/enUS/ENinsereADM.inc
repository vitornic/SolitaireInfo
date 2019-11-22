<?php

include 'ENcabecalho.inc';
include 'conecta_mysql.inc';

$Nome           = $_POST['ADMNome']; // Captura as informações no HTML
$Email 	        = $_POST['ADMEmail'];
$Senha          = $_POST['ADMSenha'];
$Fone           = $_POST['ADMTel'];

$codigomax  = "SELECT MAX(codigo) as codigo FROM `administradores`"; // Bloco responsavel pelo Auto Increment do codigo
$con        = $conexao->query($codigomax) or die($conexao->error);
$array      = $con->fetch_array();
$logarray   = $array[0] + 1;

$sql = "INSERT INTO administradores VALUES"; // Prepara o Insert no Banco de Dados
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
    echo"<script>alert('EMAIL FIELD MUST BE FILLED');window.location.href='../enUS/signupadm.php';window.parent.document.title = x;</script>";
  } else {
      if ($logarray == $Email) {
        exit("<p uk-margin>
                <script type='text/javascript'>
                  UIkit.modal.alert('EMAIL ALREADY EXISTS, CHOOSE ANOTHER ONE !!!').then(function() {
                  window.location.replace('../enUS/signupadm.php');
                  })
                  blur()
                </script>
              </p>");
      } else if ($logarrayadm == $Email){ //Verificação no servidor
        exit("<p uk-margin>
                <script type='text/javascript'>
                  UIkit.modal.alert('EMAIL ALREADY EXISTS, CHOOSE ANOTHER ONE !!!'then(function() {
                  window.location.replace('../enUS/signupadm.php');
                  })
                  blur()
                </script>
              </p>");
  } else if ($conexao->query($sql) == TRUE) { 
	ini_set('max_execution_time', 300); //Aumenta tempo de execução antes do time out
	exit("<p uk-margin>
                <script type='text/javascript'>
                  UIkit.modal.alert('REGISTERED SUCCESSFULLY !!! REDIRECTING...').then(function() {
                  window.location.replace('../enUS/loginadm.php');
                  })
                  blur()
                </script>
              </p>");

	} else {
    exit("<p uk-margin>
                <script type='text/javascript'>
                  UIkit.modal.alert('OOPS ... SOMETHING WENT WRONG CHECK YOUR CONSOLE FOR MORE INFORMATION $sql').then(function() {
                  window.location.replace('../enUS/signupadm.php');
                  })
                  blur()
                </script>
              </p>");
  }
}
}

$conexao->close();

?>