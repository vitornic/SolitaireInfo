<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Relação de Produtos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>

<body>
    <?php include '../inc/PTnavSuperior.inc'; ?>

    <?php include '../inc/PTnavLateral.inc'; ?>

    <?php include '../inc/PTcabecalho.inc'; ?>

    <form method="POST" class="boxform">
        <h1>EDITAR/ALTERAR</h1>
        <label><input type="text" name="codigo" placeholder="CODIGO" pattern="[0-9]+$" title="Utiize apenas números"></label>
        <label><input type="text" name="descricao" placeholder="DESCRICAO"></label><br><br>
        <input type="submit" value="ENVIAR">
    </form>

    <?php
        if (count($_POST) > 0) {
            include '../inc/conecta_mysql.inc';

            @$cod = trim($_POST['codigo']);
            @$desc = trim($_POST['descricao']);

            $sql = "SELECT * FROM produtos ";
            if (!empty($cod)) {
                $sql = $sql."WHERE codigo = ".$cod;
            } else if (!empty($desc)) {
                $sql = $sql."WHERE descricao LIKE '%.'$desc.'%'";
            }

            echo "<script>console.log(`$sql`)</script>";

            $rs = mysqli_query($conexao, $sql) or die('ERRO AO CONSULTAR');
            $total = mysqli_num_rows($rs);
            echo "<center><span style='color:#d35400'>TOTAL DE REGISTROS: ".$total."</span></center>";

            echo "<center>";

            if ($total > 0) {
                echo "<table>
                        <tr>
                            <td>CODIGO</td>
                            <td>DESCRICAO</td>
                            <td>EDITAR</td>
                            <td>EXCLUIR</td>
                        </tr>";
            }

            while ($linha = mysqli_fetch_assoc($rs)) {
                $cod = $linha['codigo'];
                $desc = $linha['descricao'];

                echo "<tr id='idTabela'>
                        <td>$cod</td>
                        <td>$desc</td>
                        <td><a href='../php/editarprod.php?op=E&codigo=$cod'><img src='../images/icons8-editar-vários-50.png'</a></td>
                        <td><a href='relacaoProd.php?op=X&codigo=$cod'><img src='../images/icons8-lixo-50.png'</a></td>
                    </tr>";
                echo "</center>";
            }

            
        }
        ?>

        <?php

        if (count($_GET) > 0) {

            include '../inc/conecta_mysql.inc';

            @$oper = $_GET['op'];
            @$cod = $_GET['codigo'];

            echo '<script>console.log("Operacao '.$oper.'  codigo '.$cod.'")</script>';

            if ($oper == 'X') {
                $sql = "DELETE from produtos WHERE codigo = ".$cod;
                    
                @$rs = mysqli_query($conexao, $sql) or die('<center><span style="color:#ff0000">ERRO DE EXCLUSÃO</span></center>');
                exit("<p uk-margin>
                    <script type='text/javascript'>
                      UIkit.modal.alert('EXCLUIDO COM SUCESSO !!! REDIRECIONANDO...').then(function() {
                      window.location.replace('../ptBR/relacaoProd.php');
                      })
                      blur()
                    </script>
                  </p>");
            } 
            
            if ($oper == 'E') {
                echo '<fieldset><legend>EDITAR</legend><form method="POST">
                CODIGO: '.$cod.'
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
            }

            mysqli_close($conexao);
        }

        
    ?>

    <!-- <?php include '../inc/PTrelacoes.inc'; ?> -->
<?php include '../inc/PTrodape.inc'; ?>
</body>

</html>