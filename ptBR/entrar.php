<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Login</title>
</head>

<body>
    <div class="nav">
        <form method="POST" action="pesquisa.php">
            <ul>
                <a href="inicio.html"><img src="../images/thumbnail_Logo Solitarie.png"></a>
                <input name="pesq" id="pesq" type="text" placeholder="PESQUISAR">
                <input type="submit" id="lupa" value="      ">

                <div class="dropdown">
                    <button class="dropbtn"><a href="#">Traduzir</a></button>
                    <div class="dropdown-content">
                        <a href="../enUS/login.html">EN-US</a>
                    </div>
                </div>
                <li><a href="logout.php">Sair</a></li>
                <li><a id="ativado" href="entrar.php">Login</a></li>
                <li><a href="cadastro.html">Cadastro</a></li>
                <li><a href="formulario.php">Formulário</a></li>
            </ul>
        </form>
    </div>

    <div class="sidebar">
        <ul>
            <strong>CATEGORIAS</strong>
            <li><a href="computadores.html">Computadores</a></li>
            <li><a href="perifericos.html">Periféricos</a></li>
            <li><a href="acessorios.html">Acessórios</a></li>
            <li><a href="jogos.html">Jogos</a></li>
            <li><a href="hardware.html">Armazenamento</a></li>
            <li><a href="video.html">Vídeo</a></li>
            <li><a href="audio.html">Áudio</a></li>
            <li><a href="gabinetes.html">Gabinetes</a></li>
            <li><a href="redes.html">Redes</a></li>
            <li id="nSel"><br><br></li>
            <li><a href="cadastrodeproduto.php">Cadastro de Produto</a></li>
        </ul>
    </div>

    
    <!--
    <form method="POST" action="../php/login.php" class="boxform" accept-charset="UTF-8">
        <h1>login cliente</h1>
        <input placeholder="Email" type="Email" name="email" required="true" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="exemple@exemple.com">
        <input placeholder="Senha" type="password" size="20" name="senha" required = "true">
        <input type="submit" value="ENTRAR" name="entrar">
        <input type="reset" value="LIMPAR">
        <h4><a href="#">Esqueceu a senha ?</a></h4>
        <h4><a href="cadastro.html">Não tem um cadastro ?</h4>
    </form> -->
    </body>
</html>

<?php
    @$login_cookie = $_COOKIE['Email'];
    if(isset($login_cookie)){
        echo"<br>";
        echo "<div class='boxform'>";
        echo"Bem-Vindo, ".$login_cookie." <br>";
        echo"Você já está <font color='green'>LOGADO</font>";
        echo "</div>";
    } else {
        echo "<br>";
        echo "<form method='POST' action='login.php' class='boxform' accept-charset='UTF-8'>
                <h1>login cliente</h1>
                <input placeholder='Email' type='Email' name='email' required='true' maxlength='100' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' title='exemple@exemple.com'>
                <input placeholder='Senha' type='password' size='20' name='senha' required = 'true'>
                <input type='submit' value='ENTRAR' name='entrar'>
                <input type='reset' value='LIMPAR'>
                <h4><a href='#'>Esqueceu a senha ?</a></h4>
                <h4><a href='cadastro.html'>Não tem um cadastro ?</h4>
            </form>";
    }
    ?>