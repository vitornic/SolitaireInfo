<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    
    <title>Solitarie INFO</title>
</head>

<body>
    <div class="nav">
        <form method="POST" action="pesquisa.php">
            <ul>
                <a href="inicio.php"><img src="../images/thumbnail_Logo Solitarie.png"></a>
                <input name="pesq" id="pesq" type="text" placeholder="PESQUISAR">
                <input type="submit" id="lupa" value="      ">

                <div class="dropdown">
                    <button class="dropbtn"><a href="#">Traduzir</a></button>
                    <div class="dropdown-content">
                        <a href="../enUS/home.php">EN-US</a>
                    </div>
                </div>
                <?php
                    if(isset($_COOKIE["Nome"]) and (isset($_COOKIE["Email"]))) {
                        $login_cookie = $_COOKIE['Nome'];
                        echo "<li><a href='logout.php'>Sair</a></li>";
                        echo "<li><a href='perfil.php'>Olá, $login_cookie</a></li>";
                    } else {
                        echo '<li><a href="entrar.php">Login</a></li>';
                        echo '<li><a href="cadastro.php">Cadastro</a></li>';
                    }
                ?>
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
            <li><a href="hardware.php">Armazenamaento</a></li>
            <li><a href="video.php">Vídeo</a></li>
            <li><a href="audio.php">Áudio</a></li>
            <li><a href="gabinetes.php">Gabinetes</a></li>
            <li><a href="redes.php">Redes</a></li>      
                <?php
                    if(isset($_COOKIE["NomeADM"]) and (isset($_COOKIE["EmailADM"]))) {
                        $login_cookie = $_COOKIE['NomeADM'];
                        echo "<li><hr></li>";
                        echo "<li><a class='notmarked'>Administrativos</a></li>";
                        echo "<li><a href='perfil.php'>Olá, $login_cookie</a></li>";
                        echo "<li><a href='cadastrodeproduto.php'>Cadastro de Produto</a></li>";
                        echo "<li><a href='cadastrodetipo.php'>Cadastro de Tipo</a></li>";
                        echo "<li><a href='logout.php'>Sair</a></li>";
                    }    
                ?>      
        </ul>
    </div>

    <div class="boxi">
        <img src="../images/imgCentro.png">
    </div>

    <div class="promo">
        <div class="promo1">
            <a href="computadores.php"><img src="../images/imgPromo01.png"></a>
        </div>

        <div class="promo2">
            <a href="hardware.php"><img src="../images/imgPromo02.png"></a>
        </div>

        <div class="promo3">
            <a href="video.php"><img src="../images/imgPromo03.png"></a>
        </div>

        <div class="promo4">
            <a href="perifericos.php"><img src="../images/imgPromo04.png"></a>
        </div>

        <div class="promo5">
            <a href="formulario.php"><img src="../images/imgPromo.png"></a>
        </div>
    </div>
</body>
</html>