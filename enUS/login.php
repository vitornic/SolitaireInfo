<html>

<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8">
    <title>Sign IN</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>

<body>
    <?php include'../inc/enUS/ENnavSuperior.inc' ?>
    <?php include'../inc/enUS/ENnavLateral.inc' ?>

    <form method="POST" action="ENlogin.php" class="boxform" accept-charset="UTF-8">
        <h1>LOGIN</h1>
        <input placeholder="Email" type="Email" name="Email" required="true" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="exemple@exemple.com">
        <input placeholder="Passowrd" type="password" size="20" name="Senha" required = "true">
        <input type="submit" value="ENTER" name="entrar">
        <input type="reset" value="CLEAR">
        <h4><a href="signup.html">Don't have an account?</h4>
    </form>
</body>

</html>