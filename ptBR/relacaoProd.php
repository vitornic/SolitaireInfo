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

    <div id="minhaDiv" style="display:none">
        <form method="POST" class="boxform">
            <h1>EDITAR PRODUTO</h1>
            <label><input type="text" name="codigo" placeholder="CODIGO" pattern="[0-9]+$" title="Utiize apenas números"></label>
            <label><input type="text" name="descricao" placeholder="DESCRICAO"></label><br><br>
            <input type="submit" value="ENVIAR">
        </form>
    </div>

    <button class="btn-pesquisar" type="button" onclick="Mudarestado('minhaDiv')">PESQUISAR</button>

    <script>
        function Mudarestado(el) {
            var display = document.getElementById(el).style.display;
            if (display == "none")
                document.getElementById(el).style.display = 'block';
            else
                document.getElementById(el).style.display = 'none';
        }
    </script>

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
                        <td><a href='relacaoProd.php?op=E&codigo=$cod' onclick='Mudarestado('minhaDiv')'><img src='../images/icons8-editar-vários-50.png'</a></td>
                        <td><a href='relacaoProd.php?op=X&codigo=$cod'><img src='../images/icons8-lixo-50.png'</a></td>
                    </tr>";
                echo "</center>";
            }

            
        }
        ?>

        <?php  include '../inc/PTeditarProd.inc'; ?>
</body>

</html>