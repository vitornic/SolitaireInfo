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

                <div class="dropdown">
                    <button class="dropbtn"><a href="#">Traduzir</a></button>
                    <div class="dropdown-content">
                        <a href="../enUS/">EN-US</a>
                    </div>
                </div>
                <li><a href="logout.php">Sair</a></li>
                <li><a href="entrar.php">Login</a></li>
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
            <li><a id="ativado" href="cadastrodetipo.php">Cadastro de Tipo</a></li>
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