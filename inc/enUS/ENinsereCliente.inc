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
  if($Email == "" || $Email == null) { //Verificação já feita no HTML
    echo"<script>alert('EMAIL FIELD MUST BE FILLED');window.location.href='../enUS/signup.html';window.parent.document.title = x;</script>";
  } else {
      if($logarray == $Email) { //Verificação no servidor
 
        exit("<p uk-margin>
                <script type='text/javascript'>
                  UIkit.modal.alert('EMAIL ALREADY EXISTS, CHOOSE ANOTHER ONE !!!').then(function() {
                  window.location.replace('../enUS/signup.php');
                  })
                  blur()
                </script>
              </p>");

      } else if ($conexao->query($sql) == TRUE) { 
        ini_set('max_execution_time', 300); //Aumenta tempo de execução antes do time out
        exit("<p uk-margin>
                      <script type='text/javascript'>
                        UIkit.modal.alert('REGISTERED SUCCESSFULLY !!! REDIRECTING...').then(function() {
                        window.location.replace('../enUS/login.php');
                        })
                        blur()
                      </script>
                    </p>");

      } else { 
        exit("<p uk-margin>
                <script type='text/javascript'>
                  UIkit.modal.alert('OOPS ... SOMETHING WENT WRONG CHECK YOUR CONSOLE FOR MORE INFORMATION').then(function() {
                  window.location.replace('../enUS/signup.php');
                  })
                  blur()
                </script>
              </p>");
      }
  }
}
$conexao->close();
?>