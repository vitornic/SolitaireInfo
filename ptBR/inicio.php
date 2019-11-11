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
                        <a href="../enUS/home.html">EN-US</a>
                    </div>
                </div>
                <?php
                    if(isset($_COOKIE["Nome"])) {
                        $login_cookie = $_COOKIE['Nome'];
                        echo "<li><a href='logout.php'>Sair</a></li>";
                        echo "<li><a href='#'>Olá, $login_cookie</a></li>";
                    } else {
                        echo '<li><a href="entrar.php">Login</a></li>';
                        echo '<li><a href="cadastro.html">Cadastro</a></li>';
                    }
                ?>
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

    <div class="boxi">
        <img src="../images/imgCentro.png">
    </div>

    <div class="promo">
        <div class="promo1">
            <a href="computadores.html"><img src="../images/imgPromo01.png"></a>
        </div>

        <div class="promo2">
            <a href="armazenamento.html"><img src="../images/imgPromo02.png"></a>
        </div>

        <div class="promo3">
            <a href="video.html"><img src="../images/imgPromo03.png"></a>
        </div>

        <div class="promo4">
            <a href="perifericos.html"><img src="../images/imgPromo04.png"></a>
        </div>

        <div class="promo5">
            <a href="formulario.html"><img src="../images/imgPromo.png"></a>
        </div>
    </div>
</body>
</html>