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

                <li><a href="../enUS/form.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a></li>
            
                <?php include '../inc/PTverificaLoginCliente.inc'; ?>
                <li><a id="ativado" href="formulario.php">Formulário</a></li>
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

    <?php
    @$login_cookie = $_COOKIE['Email'];
    if(!isset($login_cookie)) {
        echo "<br>";
        echo "<div class = 'boxform'>
        Bem-Vindo, convidado <br>
        Essas informações <font color='red'>NÃO PODEM</font> <br> ser acessadas por você
        <br><a href='entrar.php'>Faça Login</a>para ver o conteúdo
        </div>"; } else {
            include '../inc/form.inc';
        }
    ?>
</div>
</body>
</html>