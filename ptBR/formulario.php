<?php
header("Content-type: text/html; charset=utf-8");

include '../inc/conecta_mysql.inc';
$consulta   = "SELECT * FROM `clientes`";
$con        = $conexao->query($consulta) or die($conexao->error);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Formulário</title>
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
                        <a href="../enUS/form.php">EN-US</a>
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
                <li><a id="ativado" href="formulario.php">Formulário</a></li>
            </ul>
        </form>
    </div>

    <div class="sidebar">
        <ul>
            <strong>CATEGORIAS</strong>
            <li><a href="../ptBR/computadores.php">Computadores</a></li>
            <li><a href="../ptBR/perifericos.php">Periféricos</a></li>
            <li><a href="../ptBR/acessorios.php">Acessórios</a></li>
            <li><a href="../ptBR/jogos.php">Jogos</a></li>
            <li><a href="../ptBR/hardware.php">Armazenamento</a></li>
            <li><a href="../ptBR/video.php">Vídeo</a></li>
            <li><a href="../ptBR/audio.php">Áudio</a></li>
            <li><a href="../ptBR/gabinetes.php">Gabinetes</a></li>
            <li><a href="../ptBR/redes.php">Redes</a></li>
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

    <?php
    @$login_cookie = $_COOKIE['Email'];
    if(isset($login_cookie)){
        echo"<br>";
        echo "<div class='boxmensagem'>";
        echo"Bem-Vindo, ".$login_cookie." <br>";
        echo"Essas informações <font color='green'>PODEM</font> ser acessadas por você";
        echo "</div>";
        echo"

        <div>
        ".include '../inc/form.inc';"
        </div>";
    } else {
        echo "<br>";
        echo "<div class = 'boxform'>
        Bem-Vindo, convidado <br>
        Essas informações <font color='red'>NÃO PODEM</font> <br> ser acessadas por você
        <br><a href='entrar.php'>Faça Login</a>para ver o conteúdo
        </div>"; }
    ?>
</div>
</body>
</html>