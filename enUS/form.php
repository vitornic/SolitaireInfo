<html>

<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8">
    <title>Form</title>
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
                    <a href="../ptBR/formulario.html">PT-BR</a>
                </div>
            </div>
            <li><a href="login.html">Sign IN</a></li>
            <li><a href="signup.html">Sign UP</a></li>
            <li><a id="ativado" href="form.html">Form</a></li>
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
<!--
    <div class="divformulario">
        <fieldset class="formulario">
            <legend class="legends" style="text-align:center">Form</legend>
            <form method="post" action="formulario">
                <br><input type="text" name="nome" size="30" maxlength="45" placeholder="Type your name:"><br>
                <input type="email" name="email" size="30" maxlength="45" placeholder="Type your email address:"><br>
                <input type="number" name="telefone" size="30" maxlength="45" placeholder="Type your phone:"><br>
                <input type="SUBMIT" value="Send">
                <input type="RESET" name="limpar" value="Clear"><br>
            </form>
        </fieldset>
    </div>
-->
    <form method="POST" action="../php/verifica.php" class="boxform" accept-charset="UTF-8">
        <h1>Form</h1>
        <label for="nome">
                            <input id="idNome" name="FNome" type="text" placeholder="Name" maxlength="100" required="true"></label>
        <input placeholder="Email" type="Email" name="FEmail" required="true" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="exemple@exemple.com">
        <input placeholder="Phone" name="FTel" maxlength="11" type="text" pattern="[0-9]{2}[0-9]{9}$" required="true">
        <input type="submit" value="SEND" name="entrar">
        <input type="reset" value="CLEAR">
    </form>
</body>

</footer>

</html>