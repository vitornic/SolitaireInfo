<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Login</title>
</head>

<body>
    <?php include '../inc/PTnavSuperior.inc'; ?>

    <?php include '../inc/PTnavLateral.inc'; ?>

    <?php
    @$login_cookie = $_COOKIE['EmailADM'] and @$_COOKIE['SenhaADM'];
    @$nome_cookie  = $_COOKIE['NomeADM'];
    if(isset($login_cookie)){
        echo"<br>";
        echo "<div class='boxform'>";
        echo"Bem-Vindo, ".$nome_cookie." <br>";
        echo"Você já está <font color='green'>LOGADO</font>";
        echo "</div>";
    } else {
        echo "<br>";
        echo "<form method='POST' action='loginadm.php' class='boxform' accept-charset='UTF-8'>
                <h1>login Administrativo</h1>
                <input placeholder='Email' type='Email' name='emailADM' required='true' maxlength='100' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' title='exemple@exemple.com'>
                <input placeholder='Senha' type='password' size='20' name='senhaADM' required = 'true'>
                <input type='submit' value='ENTRAR' name='entrar'>
                <input type='reset' value='LIMPAR'>
                <h4><a href='cadastro.php'>Não tem um cadastro ?</h4>
            </form>";
    }
    ?>

<?php include '../inc/PTrodape.inc'; ?>
</body>
</html>