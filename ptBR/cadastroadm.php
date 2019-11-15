<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Cadastro Administrativo</title>
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
                    if(isset($_COOKIE["NomeADM"]) and (isset($_COOKIE["EmailADM"]))) {
                        $login_cookie = $_COOKIE['NomeADM'];
                        echo "<li><hr></li>";
                        echo "<li><a class='notmarked'>Administrativos</a></li>";
                        echo "<li><a href='perfil.php'>Olá, $login_cookie</a></li>";
                        echo "<li><a href='cadastrodeproduto.php'>Cadastro de Produto</a></li>";
                        echo "<li><a id='ativado' href='cadastrodetipo.php'>Cadastro de Tipo</a></li>";
                        echo "<li><a href='logout.php'>Sair</a></li>";
                    }    
                ?> 
        </ul>
    </div>

    <form method="POST" action="../php/verificaadm.php" class="boxform" accept-charset="UTF-8">
        <h1>cadastro Administrativo</h1>
        <label for="nome">
                            <input id="idNome" name="ADMNome" type="text" placeholder="Nome" maxlength="100" required="true"></label>
        <input placeholder="Email" type="Email" name="ADMEmail" required="true" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="exemple@exemple.com">
        <input placeholder="Senha" type="password" size="20" name="ADMSenha" required = "true">
        <input placeholder="Telefone" name="ADMTel" maxlength="11" type="text" pattern="[0-9]{2}[0-9]{9}$" required="true">
        <input type="submit" value="CADASTRAR" name="entrar">
        <input type="reset" value="LIMPAR">
        <h4><a href="entrar.php">Já possui tem um cadastro ?</a></h4>
    </form>
</body>


</html>
