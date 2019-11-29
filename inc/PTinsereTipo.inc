<?php

include 'conecta_mysql.inc';
include 'PTcabecalho.inc';

$nome    = $_POST['nome'];
$desc    = $_POST['descricao'];

$codigomax  = "SELECT MAX(codigo) as codigo FROM `tipoprod`"; // Bloco responsavel pelo Auto Increment do codigo
$con        = $conexao->query($codigomax) or die($conexao->error);
$array      = $con->fetch_array();
$logarray   = $array[0] + 1;

$sql = "INSERT INTO tipoprod VALUES"; // Prepara o Insert no Banco de Dados
$sql .= "(".$logarray.", '".$nome."', '".$desc."')";

  if ($conexao->query($sql) == TRUE) { 
      ini_set('max_execution_time', 300); //Aumenta tempo de execução antes do time out
      exit("<p uk-margin>
                    <script type='text/javascript'>
                      UIkit.modal.alert('CADASTRADO COM SUCESSO !!! REDIRECIONANDO...').then(function() {
                      window.location.replace('../ptBR/cadastrodetipo.php');
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

?>