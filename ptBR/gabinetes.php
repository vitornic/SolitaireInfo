<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Gabinetes</title>
</head>

<body>
    <div class="nav">
        <form method="POST" action="pesquisa.php">
            <ul>
                <a href="inicio.php"><img src="../images/thumbnail_Logo Solitarie.png"></a>
                <input name="pesq" id="pesq" type="text" placeholder="PESQUISAR">
                <input type="submit" id="lupa" value="      ">

                <li><a href="../enUS/cabinets.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a></li>
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
            <li><a id="ativado" href="gabinetes.php">Gabinetes</a></li>
            <li><a href="redes.php">Redes</a></li>
            <?php include '../inc/PTverificaLoginAdm.inc'; ?>
        </ul>
    </div>

    <div class="container">
        <div class="pricing-table table1">
            <div class="pricing-header">
                <div class="title">gabinetes</div>
            </div>
            <div class="price"><img src="../images/gabinete.png" width="233" height="200">
                <ul class="pricing-list">
                    <li><strong>gabinete</strong> Gamer One Power C07</li>
                    <div class="border"></div>
                    <li><strong>tipo</strong> mid tower</li>
                    <div class="border"></div>
                    <li><strong>tamanho</strong> 46CM(A) x 41,9CM(C) x 20,4CM(L)</li>
                    <div class="border"></div>
                    <li><strong>cor</strong> preta com tampas de vidro</li>
                </ul>
                <a href="#">Adquira Já</a>
            </div>
        </div>
    </div>
</body>
</html>