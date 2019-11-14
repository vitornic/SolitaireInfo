<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Jogos</title>
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
                        <a href="../enUS/games.php">EN-US</a>
                    </div>
                </div>
                <li><a href="logout.php">Sair</a></li>
                <li><a href="entrar.php">Login</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
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
            <li><a id="ativado" href="jogos.php">Jogos</a></li>
            <li><a href="hardware.php">Armazenamento</a></li>
            <li><a href="video.php">Vídeo</a></li>
            <li><a href="audio.php">Áudio</a></li>
            <li><a href="gabinetes.php">Gabinetes</a></li>
            <li><a href="redes.php">Redes</a></li>
            <li id="nSel"><br><br></li>
            <li><a href="cadastrodeproduto.php">Cadastro de Produto</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="pricing-table table1">
            <div class="pricing-header">
                <div class="title">Jogos</div>
            </div>
            <div class="price"><img src="../images/jogos.png" width="233" height="200">
                <ul class="pricing-list">
                    <li><strong>The Last Of US</strong> Remasterizado</li>
                    <div class="border"></div>
                    <li><strong>Plataforma</strong> PS4/PS4 PRO</li>
                </ul>
                <a href="#">Adquira Já</a>
            </div>
        </div>
    </div>
</body>

</html>