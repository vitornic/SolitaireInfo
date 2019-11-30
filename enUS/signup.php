<html>

<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8">
    <title>Sign UP</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>

<body>
    <?php include'../inc/enUS/ENnavSuperior.inc' ?>
    <?php include'../inc/enUS/ENnavLateral.inc' ?>

    <form method="POST" action="../php/verifica.php" class="boxform" accept-charset="UTF-8">
        <h1>Sign UP</h1>
        <label for="nome">
                            <input id="idNome" name="CNome" type="text" placeholder="Name" maxlength="100" required="true"></label>
        <input placeholder="Email" type="Email" name="CEmail" required="true" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="exemple@exemple.com">
        <input placeholder="Password" type="password" size="20" name="CSenha" required = "true">
        <input placeholder="Phone" name="CTel" maxlength="11" type="text" pattern="[0-9]{2}[0-9]{9}$" required="true">
        <input type="submit" value="Sign Up" name="entrar">
        <input type="reset" value="CLEAR">
        <h4><a href="login.php">Already registered?</h4>
         <h4><a href="signupadm.php"><font color=red>Administrator Signup</font></a></h4>
    </form>
<?php include '../inc/PTrodape.inc'; ?>
</body>

</html>