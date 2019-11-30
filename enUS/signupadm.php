<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Administrator SignUP</title>
</head>

<body>
    <?php include '../inc/enUS/ENnavSuperior.inc'; ?>

    <?php include '../inc/enUS/ENnavLateral.inc'; ?>

    <form method="POST" action="../php/verificaadm.php" class="boxform" accept-charset="UTF-8">
        <h1>Administrator SignUP</h1>
        <input id="idNome" name="ADMNome" type="text" placeholder="Nome" maxlength="100" required="true"></label>
        <input placeholder="Email" type="Email" name="ADMEmail" required="true" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="exemple@exemple.com">
        <input placeholder="Password" type="password" size="20" name="ADMSenha" required = "true">
        <input placeholder="Phone" name="ADMTel" maxlength="11" type="text" pattern="[0-9]{2}[0-9]{9}$" required="true">
        <input type="submit" value="REGISTER" name="entrar">
        <input type="reset" value="CLEAR">
        <h4><a href="loginadm.php">Already Registered?<a></h4>
    </form>
<?php include '../inc/PTrodape.inc'; ?>
</body>
</html>