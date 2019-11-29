<?php
    include '../inc/PTcabecalho.inc';
    include '../inc/conecta_mysql.inc';

    echo '<fieldset><legend>EDITAR</legend><form method="POST">
    CODIGO: '.@$cod.'
    <br>DESCRICAO: <input type="text" name="txtDesc"><br>
    <br><input type="submit" value="ATUALIZAR"><br>
    </form></fieldset>';
    
    @$newdesc = $_POST['txtDesc'];
    @$sql = "SELECT produtos SET descricao='$newdesc' WHERE codigo = $cod";
    
    
    $rs = mysqli_query($conexao, $sql) or die('<center><span style="color:#ff0000">ERRO AO EDITAR</span></center>');
    exit("<p uk-margin>
        <script type='text/javascript'>
          UIkit.modal.alert('EDITADO COM SUCESSO !!! REDIRECIONANDO...').then(function() {
          window.location.replace('../ptBR/relacaoProd.php');
          })
          blur()
        </script>
      </p>");



?>