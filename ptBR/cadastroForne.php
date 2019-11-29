<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Cadastro de Fornecedor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>

<body>

    <?php include '../inc/PTnavSuperior.inc'; ?>

    <?php include '../inc/PTnavLateral.inc'; ?>


    
    <form action="../php/verificaForne.php" method="POST" class="boxform">
    <h1>CADASTRO DE FORNECEDOR</h1>
        <label><input type="text" name="nomeForne" placeholder="Nome"></label>
        <label><input type="email" name="emailForne" placeholder="Email"></label>
        <label><input type="text" maxlength="11" pattern="[0-9]{2}[0-9]{9}$" name="foneForne" placeholder="Telefone"></label>
        <input type="submit" value="CADASTRAR">
        <input type="reset" value="LIMPAR">
    </form>
</body>

</html>