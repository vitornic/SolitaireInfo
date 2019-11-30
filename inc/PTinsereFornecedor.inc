<?php

include 'PTcabecalho.inc';
include 'conecta_mysql.inc';

$nome   = $_POST['nomeForne'];
$email  = $_POST['emailForne'];
$fone   = $_POST['foneForne'];

$codigomax  = "SELECT MAX(codigo) as codigo FROM `fornecedores`"; // Bloco responsavel pelo Auto Increment do codigo
$con        = $conexao->query($codigomax) or die($conexao->error);
$array      = $con->fetch_array();
$logarray   = $array[0] + 1;

$sql = "INSERT INTO fornecedores VALUES"; // Prepara o Insert no Banco de Dados
$sql .= "(".$logarray.", '".$nome."', '".$email."', ".$fone.")";

$selecao  = "SELECT email FROM fornecedores WHERE email = '".$email."'"; // Seleciona Email para verificação
$con      = $conexao->query($selecao) or die($conexao->error);
$array    = $con->fetch_array();
$logarray = $array['email'];

if (getenv("REQUEST_METHOD") == "POST") {
      if($logarray == $email) { //Verificação no servidor
 
        exit("<p uk-margin>
                <script type='text/javascript'>
                  UIkit.modal.alert('EMAIL JA EXISTE, ESCOLHA OUTRO !!!').then(function() {
                  window.location.replace('../ptBR/cadastroForne.php');
                  })
                  blur()
                </script>
              </p>");

      } else if ($conexao->query($sql) == TRUE) { 
        ini_set('max_execution_time', 300); //Aumenta tempo de execução antes do time out
        exit("<p uk-margin>
                      <script type='text/javascript'>
                        UIkit.modal.alert('CADASTRADO COM SUCESSO !!! REDIRECIONANDO...').then(function() {
                        window.location.replace('../ptBR/inicio.php');
                        })
                        blur()
                      </script>
                    </p>");

      } else { 
        exit("<p uk-margin>
                <script type='text/javascript'>
                  UIkit.modal.alert('OOPS... ALGO DEU ERRADO').then(function() {
                  window.location.replace('../ptBR/cadastroForne.php');
                  })
                  blur()
                </script>
              </p>");
      }
  }
$conexao->close();
?>