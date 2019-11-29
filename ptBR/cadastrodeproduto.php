<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Cadastro de Tipo</title>
</head>

<body>
    <?php include '../inc/PTnavSuperior.inc'; ?>

    <?php include '../inc/PTnavLateral.inc'; ?>

    <form method="POST" action="../php/verificaProduto.php" class="boxform" accept-charset="UTF-8">
        <h1>Cadastro de Produto</h1>
        <input placeholder="Nome do Produto" type="text" name="PNome">
        <input placeholder="Descrição do Produto" type="text" name="PDesc">
        <input placeholder="Custo do Produto" type="float" name="PCusto">
        <input placeholder="Preço de Venda" type="float" name="PVenda">
        <input placeholder="Foto do Produto" type="text" name="PFoto">
        <select name="PTipo">
            <option disabled selected>TIPO</option>
            <?php
                include '../inc/conecta_mysql.inc';

                $sql = "SELECT codigo, descricao FROM tipoprod";
                $rs = mysqli_query($conexao, $sql);


                while ($row = mysqli_fetch_assoc($rs)) {
                    $cod = $row['codigo'];
                    $desc = $row['descricao'];
                    echo "<option value=$cod>$desc</option>";
                }
            mysqli_close($conexao);
            ?>;
        </select>
        <select name="PForne">
            <option disabled selected>FORNECEDOR</option>
            <?php
                include '../inc/conecta_mysql.inc';

                $sql = "SELECT codigo, nome FROM fornecedores";
                $rs = mysqli_query($conexao, $sql);


                while ($row = mysqli_fetch_assoc($rs)) {
                    $cod = $row['codigo'];
                    $nome = $row['nome'];
                    echo "<option value=$cod>$nome</option>";
                }
            mysqli_close($conexao);
            ?>;
        </select>
        <br>
        <input type="submit" value="CADASTRAR" id="enviar">
        <input type="reset" value="LIMPAR">
        <span><a href="cadastrodetipo.php"><strong>Cadastrar um tipo de Produto</strong></span><br><br>
        <span><a href="relacaoProd.php"><strong>Relação de Produtos</strong></span>
        <span><a href="relacaoTipo.php"><strong>Relação de Tipos</strong></span>
    </form>
</body>
</html>