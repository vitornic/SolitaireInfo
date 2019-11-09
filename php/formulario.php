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
        <ul>
            <a href="inicio.html"><img src="../images/thumbnail_Logo Solitarie.png"></a>
            <input id="pesq" type="search" placeholder="PESQUISAR" q="googlesearch">
            <button id="lupa"><img src="../images/lupa.png"></button>

            <div class="dropdown">
                <button class="dropbtn"><a href="#">Traduzir</a></button>
                <div class="dropdown-content">
                    <a href="../enUS/form.html">EN-US</a>
                </div>
            </div>
            <li><a href="../ptBR/entrar.html">Login</a></li>
            <li><a href="../ptBR/cadastro.html">Cadastro</a></li>
            <li><a id="ativado" href="formulario.php">Formulário</a></li>
        </ul>
    </div>

    <div class="sidebar">
        <ul>
            <strong>CATEGORIAS</strong>
            <li><a href="../ptBR/Computadores.html">Computadores</a></li>
            <li><a href="../ptBR/Perifericos.html">Periféricos</a></li>
            <li><a href="../ptBR/Acessorios.html">Acessórios</a></li>
            <li><a href="../ptBR/Jogos.html">Jogos</a></li>
            <li><a href="../ptBR/Hardware.html">Armazenamento</a></li>
            <li><a href="../ptBR/Vídeo.html">Vídeo</a></li>
            <li><a href="../ptBR/Áudio.html">Áudio</a></li>
            <li><a href="../ptBR/Gabinetes.html">Gabinetes</a></li>
            <li><a href="../ptBR/Redes.html">Redes</a></li>
        </ul>
    </div>

<?php
    @$login_cookie = $_COOKIE['Email'];
        if(isset($login_cookie)){
            echo"<br>";
            echo"Bem-Vindo, ".$login_cookie." <br>";
            echo"Essas informações <font color='green'>PODEM</font> ser acessadas por você";
            echo"
                    
            <div>
            ".include '../inc/form.inc';"
            </div>";
            } else {
            echo "<br>";
            echo "<div class = 'boxform'>
                    Bem-Vindo, convidado <br>
                    Essas informações <font color='red'>NÃO PODEM</font> <br> ser acessadas por você
                    <br><a href='entrar.html'>Faça Login</a>para ver o conteúdo
            </div>"; }
        ?>
</div>
    
</body>


</html>

