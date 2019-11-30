<?php
if (count($_GET) > 0) {

  session_start();

  $paginaAtual = $_SERVER['HTTP_REFERER'];

  include '../inc/conecta_mysql.inc';

  $oper = $_GET['op'];
  $cod = $_GET['codigo'];
  $_SESSION['codigoproduto']=$cod;

  echo '<script>console.log("Operacao ' . $oper . '  codigo ' . $cod . '")</script>';

  if ($oper == 'X') {
    $sql = "DELETE from produtos WHERE codigo = " . $cod;

    $rs = mysqli_query($conexao, $sql) or die('<center><span style="color:#ff0000">ERRO DE EXCLUSÃO</span></center>');
    exit("<p uk-margin>
                    <script type='text/javascript'>
                      UIkit.modal.alert('EXCLUIDO COM SUCESSO !!! REDIRECIONANDO...').then(function() {
                      window.location.replace('$paginaAtual');
                      })
                      blur()
                    </script>
                  </p>");
  } else if ($oper == 'E') {
    echo '<form class="boxform" method="POST" action="../php/editarProd.php">
            <h1>EDITAR</h1>
            <input type="text" disabled placeholder="CODIGO '.$cod.'"</input><br>
            <input type="text" name="txtDesc" placeholder="DESCRICAO"><br>
            <br><input type="submit" value="ATUALIZAR"><br>
          </form>';
    if (count($_POST) > 0) {

      $newdesc = $_POST['txtDesc'];
      $sql = "SELECT produtos SET descricao='$newdesc' WHERE codigo = $cod";

      echo "<script>console.log($sql)</script>";


      $rs = mysqli_query($conexao, $sql) or die('<center><span style="color:#ff0000">ERRO AO EDITAR</span></center>');
      exit("<p uk-margin>
                      <script type='text/javascript'>
                        UIkit.modal.alert('EDITADO COM SUCESSO !!! REDIRECIONANDO...').then(function() {
                        window.location.replace($paginaAtual);
                        })
                        blur()
                      </script>
                    </p>");
    }
  }
  mysqli_close($conexao);
}
