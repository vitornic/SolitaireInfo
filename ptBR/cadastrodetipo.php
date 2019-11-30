<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Cadastro de Produto</title>
</head>

<body>
    <?php include '../inc/PTnavSuperior.inc'; ?>

    <?php include '../inc/PTnavLateral.inc'; ?>

    <form method="POST" action="../php/verificaTipoProd.php" class="boxform" accept-charset="UTF-8">
        <h1>Cadastro de Tipo</h1>
        <input placeholder="Nome do Tipo de Produto" type="text" name="nome">
        <input placeholder="Descrição do Tipo de Produto" type="text" name="descricao">
        <input type="submit" value="CADASTRAR">
        <input type="reset" value="LIMPAR">
        <h4><a href="cadastrodeproduto.php">Cadastrar um Produto</a></h4>
        <span><a href="relacaoProd.php"><strong>Relação de Produtos</strong></span>
        <span><a href="relacaoTipo.php"><strong>Relação de Tipos</strong></span>
    </form>
</body>
</html>