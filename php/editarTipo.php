<?php
if (count($_POST) > 0) {

    if (!isset($_SESSION)) { //Verificar se a sessão não já está aberta.
        session_start();
    }

    include '../inc/PTcabecalho.inc';
    include '../inc/conecta_mysql.inc';


    $newdesc = $_POST['txtDesc'];
    $cod = $_SESSION['codigotipo'];
    $sql = "UPDATE tipoprod SET descricao=\"$newdesc\" WHERE codigo = \"$cod\"";

    $rs = mysqli_query($conexao, $sql) or die("<p uk-margin>
                                            <script type='text/javascript'>
                                              UIkit.modal.alert('Oops Algo deu errado ...').then(function() {
                                              window.location.replace('../ptBR/relacaoTipo.php');
                                              })
                                              blur()
                                            </script>
                                            </p>");
    session_destroy();
    exit("<p uk-margin>
        <script type='text/javascript'>
          UIkit.modal.alert('EDITADO COM SUCESSO !!! REDIRECIONANDO...').then(function() {
          window.location.replace('../ptBR/relacaoTipo.php');
          })
          blur()
        </script>
      </p>");
}
