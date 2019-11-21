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

    <form method="POST" action="" class="boxform" accept-charset="UTF-8">
        <h1>Cadastro de Tipo</h1>
        <input placeholder="Código do Produto" type="number" name="codigo">
        <input placeholder="Descrição do Produto" type="text" name="descricao">
        <input type="submit" value="CADASTRAR">
        <input type="reset" value="LIMPAR">
        <h4><a href="cadastrodeproduto.php">Cadastrar um Produto</a></h4>
    </form>
    <?php
    @$login_cookie = $_COOKIE['Email'];
    if(!isset($login_cookie)) {
        echo "<br>";
        echo "<div class = 'boxform'>
        Bem-Vindo, convidado <br>
        Essas informações <font color='red'>NÃO PODEM</font> <br> ser acessadas por você
        <br><a href='entrar.php'>Faça Login</a>para ver o conteúdo
        </div>"; } else {
            include '../inc/PTformulario.inc';
        }
    ?>
</body>
</html>