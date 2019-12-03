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

    <?php
    @$login_cookie = $_COOKIE['Email'];
    if(isset($login_cookie)){
        echo"<br>";
        echo "<div class='boxform'>";
        echo"Bem-Vindo, ".$login_cookie." <br>";
        echo"You're already<font color='green'>LOGGED</font>";
        echo "</div>";
    } else {
        echo "<br>";
        echo "<form method='POST' action='ENlogin.php' class='boxform' accept-charset='UTF-8'>
                <h1>CLIENT LOGIN</h1>
                <input placeholder='Email' type='Email' name='email' required='true' maxlength='100' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' title='exemple@exemple.com'>
                <input placeholder='Password' type='password' size='20' name='senha' required = 'true'>
                <input type='submit' value='SUBMIT' name='entrar'>
                <input type='reset' value='ClEAR'>
                <h4><a href='signup.php'>Aren't registered?</a></h4>
                <h4><a href='signupadm.php'><font color='red'>Administrative Login</font></a></h4>
            </form>";
    }
    ?>

</body>

</html>