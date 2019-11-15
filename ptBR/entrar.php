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
                <a href="inicio.php"><img src="../images/thumbnail_Logo Solitarie.png"></a>
                <input name="pesq" id="pesq" type="text" placeholder="PESQUISAR">
                <input type="submit" id="lupa" value="      ">

                <li><a href="../enUS/login.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a></li>
                <?php include '../inc/PTverificaLoginCliente.inc'; ?>
                <li><a href="formulario.php">Formulário</a></li>
            </ul>
        </form>
    </div>

    <div class="sidebar">
        <ul>
            <strong>CATEGORIAS</strong>
            <li><a href="computadores.php">Computadores</a></li>
            <li><a href="perifericos.php">Periféricos</a></li>
            <li><a href="acessorios.php">Acessórios</a></li>
            <li><a href="jogos.php">Jogos</a></li>
            <li><a href="hardware.php">Armazenamento</a></li>
            <li><a href="video.php">Vídeo</a></li>
            <li><a href="audio.php">Áudio</a></li>
            <li><a href="gabinetes.php">Gabinetes</a></li>
            <li><a href="redes.php">Redes</a></li>      
            <?php include '../inc/PTverificaLoginAdm.inc'; ?>
        </ul>
    </div>

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
                <h4><a href='cadastro.php'>Não tem um cadastro ?</a></h4>
                <h4><a href='entraradm.php'><font color='red'>Login Administrativo</font></a></h4>
            </form>";
    }
    ?>