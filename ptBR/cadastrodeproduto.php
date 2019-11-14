<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Cadastro de Tipo</title>
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
            <li><a href="hardware.php">Armazenamento</a></li>
            <li><a href="video.php">Vídeo</a></li>
            <li><a href="audio.php">Áudio</a></li>
            <li><a href="gabinetes.php">Gabinetes</a></li>
            <li><a href="redes.php">Redes</a></li>
            <?php
                    if(isset($_COOKIE["Nome"]) and (isset($_COOKIE["Email"]))) {
                        $login_cookie = $_COOKIE['Nome'];
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

    <form method="POST" action="../php/verificaProduto.php" class="boxform" accept-charset="UTF-8">
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
        <h4><a href="cadastrodetipo.php">Cadastrar um tipo de Produto</h4>
    </form>
</body>
</html>