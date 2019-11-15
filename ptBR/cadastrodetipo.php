<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Cadastro de Produto</title>
</head>

<body>
    <div class="nav">
        <form method="POST" action="pesquisa.php">
            <ul>
                <a href="inicio.php"><img src="../images/thumbnail_Logo Solitarie.png"></a>
                <input name="pesq" id="pesq" type="text" placeholder="PESQUISAR">
                <input type="submit" id="lupa" value="      ">

                <li><a href="../enUS/#.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a></li>
                
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

    <form method="POST" action="" class="boxform" accept-charset="UTF-8">
        <h1>Cadastro de Tipo</h1>
        <input placeholder="Código do Produto" type="number" name="codigo">
        <input placeholder="Descrição do Produto" type="text" name="descricao">
        <input type="submit" value="CADASTRAR">
        <input type="reset" value="LIMPAR">
        <h4><a href="cadastrodeproduto.php">Cadastrar um Produto</a></h4>
    </form>
</body>
</html>