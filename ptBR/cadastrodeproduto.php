<!DOCTYPE>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Cadastro de Tipo</title>
</head>

<body>
    <div class="nav">
        <ul>
            <a href="inicio.html"><img src="../images/thumbnail_Logo Solitarie.png"></a>
            <input id="pesq" type="search" placeholder="PESQUISAR" q="googlesearch">
            <button id="lupa"><img src="../images/lupa.png"></button>

            <div class="dropdown">
                <button class="dropbtn"><a href="#">Traduzir</a></button>
                <div class="dropdown-content">
                    <a href="../enUS/login.html">EN-US</a>
                </div>
            </div>
            <li><a href="../php/logout.php">Sair</a></li>
            <li><a href="entrar.html">Login</a></li>
            <li><a href="cadastro.html">Cadastro</a></li>
            <li><a href="formulario.html">Formulário</a></li>
        </ul>
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
            <li><a id="ativado" href="cadastrodeproduto.html">Cadastro de Produto</a></li>
        </ul>
    </div>

    <form method="POST" action="../php/verificaProduto.php" class="boxform" accept-charset="UTF-8" autocomplete="off">
        <h1>Cadastro de Produto</h1>
        <input placeholder="Nome do Produto" type="text" name="PNome">
        <input placeholder="Descrição do Produto" type="text" name="PDesc">
        <input placeholder="Custo do Produto" type="float" name="PCusto">
        <input placeholder="Preço de Venda" type="float" name="PVenda">
        <input placeholder="Foto do Produto" type="text" name="PFoto">
        <select name="PTipo">
            <option disabled selected>TIPO</option>
            <?php
                include '../inc/conecta_mysql.inc';

                $sql = "SELECT codigo, descricao FROM tipoprod";
                $rs = mysqli_query($conexao, $sql);


                while ($row = mysqli_fetch_assoc($rs)) {
                    $cod = $row['codigo'];
                    $desc = $row['descricao'];
                    echo "<option value=$cod>$desc</option>";
                }
            mysqli_close($conexao);
            ?>;
        </select>
        <select name="PForne">
            <option disabled selected>FORNECEDOR</option>
            <?php
                include '../inc/conecta_mysql.inc';

                $sql = "SELECT codigo, nome FROM fornecedores";
                $rs = mysqli_query($conexao, $sql);


                while ($row = mysqli_fetch_assoc($rs)) {
                    $cod = $row['codigo'];
                    $nome = $row['nome'];
                    echo "<option value=$cod>$nome</option>";
                }
            mysqli_close($conexao);
            ?>;
        </select>
        <br>
        <input type="submit" value="CADASTRAR" id="enviar">
        <input type="reset" value="LIMPAR">
        <h4><a href="cadastrodetipo.html">Cadastrar um tipo de Produto</h4>
    </form>
</body>
</html>