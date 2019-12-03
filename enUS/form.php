<html>

<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>

<body>
    <?php include'../inc/enUS/ENnavSuperior.inc' ?>
    <?php include'../inc/enUS/ENnavLateral.inc' ?>
    
    <?php
    @$login_cookie = $_COOKIE['Email'];
    if(!isset($login_cookie)) {
        echo "<br>";
        echo "<div class = 'boxform'>
        Welcome, guest <br>
        these informations <font color='red'>CANNOT BE</font> <br> access by you
        <br><a href='entrar.php'>Login</a>to see the content of this page
        </div>"; } else {
         echo'   <form method="POST" action="../php/verifica.php" class="boxform" accept-charset="UTF-8">
        <h1>Form</h1>
        <label for="nome">
                            <input id="idNome" name="FNome" type="text" placeholder="Name" maxlength="100" required="true"></label>
        <input placeholder="Email" type="Email" name="FEmail" required="true" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="exemple@exemple.com">
        <input placeholder="Phone" name="FTel" maxlength="11" type="text" pattern="[0-9]{2}[0-9]{9}$" required="true">
        <input type="submit" value="SEND" name="entrar">
        <input type="reset" value="CLEAR">
    </form> ';
        }
    ?>

</body>

</footer>

</html>