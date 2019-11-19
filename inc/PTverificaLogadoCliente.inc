<?php
if(isset($_COOKIE["Nome"]) and (isset($_COOKIE["Email"]))) {
    $login_cookie = $_COOKIE['Nome'];
    $pagatual = basename($_SERVER['SCRIPT_NAME']);

    echo "<li><a href='PTsair.php'>Sair</a></li>";
    echo "<li><a href='perfil.php'>Olá, $login_cookie</a></li>";
    } else {
        switch($pagatual) {
            case "entrar.php":
                echo '<li><a id="ativado" href="entrar.php">Login</a></li>';
                echo '<li><a href="cadastro.php">Cadastro</a></li>';
                echo '<li><a href="formulario.php">Formulário</a></li>';
                break;
            case "cadastro.php":
                echo '<li><a href="entrar.php">Login</a></li>';
                echo '<li><a id="ativado" href="cadastro.php">Cadastro</a></li>';
                echo '<li><a href="formulario.php">Formulário</a></li>';
                break;
            case "formulario.php":
                echo '<li><a href="entrar.php">Login</a></li>';
                echo '<li><a href="cadastro.php">Cadastro</a></li>';
                echo '<li><a id="ativado" href="formulario.php">Formulário</a></li>';
                break;
            default:
                echo '<li><a href="entrar.php">Login</a></li>';
                echo '<li><a href="cadastro.php">Cadastro</a></li>';
                echo '<li><a href="formulario.php">Formulário</a></li>';
        }
    }
?>