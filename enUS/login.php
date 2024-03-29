<html>

<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8">
    <title>Sign IN</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>

<body>
    <div class="nav">
        <ul>
            <a href="home.html"><img src="../images/thumbnail_Logo Solitarie.png"></a>
            <input id="pesq" type="search" placeholder="SEARCH" q="googlesearch">
            <button id="lupa"><img src="../images/lupa.png"></button>

            <div class="dropdown">
                <button class="dropbtn"><a href="#">Translate</a></button>
                <div class="dropdown-content">
                    <a href="../ptBR/entrar.html">PT-BR</a>
                </div>
            </div>
            <li><a id="ativado" href="login.html">Sign IN</a></li>
            <li><a href="signup.html">Sign UP</a></li>
            <li><a href="form.html">Form</a></li>
        </ul>
    </div>

    <div class="sidebar">
        <ul>
            <strong>CATEGORIES</strong>
            <li><a href="computers.html">Computers</a></li>
            <li><a href="peripherals.html">Peripherals</a></li>
            <li><a href="accessories.html">Accessories</a></li>
            <li><a href="games.html">Games</a></li>
            <li><a href="storage.html">Storage</a></li>
            <li><a href="video.html">Video</a></li>
            <li><a href="audio.html">Audio</a></li>
            <li><a href="cabinets.html">Cabinets</a></li>
            <li><a href="network.html">Network</a></li>
        </ul>
    </div>

   <!-- <div class="divlogin">
        <fieldset class="login">
            <legend class="legends" style="text-align:center">Sign IN</legend>
            <form method="post" action="login">
                <br><input type="email" name="email" size="30" maxlength="45"
                    placeholder="Type your email address:"><br>
                <input type="password" name="senha" size="30" maxlength="45" placeholder="Type your password"><br>
                <input type="SUBMIT" value="Sign IN">
                <input type="RESET" name="Cancelar" value="Clear"><br>
            </form>
        </fieldset>
    </div>
-->
    <form method="POST" action="php/login.php" class="boxform" accept-charset="UTF-8">
        <h1>LOGIN</h1>
        <input placeholder="Email" type="Email" name="Email" required="true" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="exemple@exemple.com">
        <input placeholder="Passowrd" type="password" size="20" name="Senha" required = "true">
        <input type="submit" value="ENTER" name="entrar">
        <input type="reset" value="CLEAR">
        <h4><a href="home.html">Forgot your password?</a></h4>
        <h4><a href="signup.html">Don't have an account?</h4>
    </form>
</body>

</html>