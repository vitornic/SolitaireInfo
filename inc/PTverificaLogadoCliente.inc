<?php
if(isset($_COOKIE["Nome"]) and (isset($_COOKIE["Email"]))) {
    $login_cookie = $_COOKIE['Nome'];

    echo "<li><a href='PTsair.php'>Sair</a></li>";
    echo "<li><a href='perfil.php'>Olá, $login_cookie</a></li>";
    } else {
        echo '<li><a href="entrar.php">Login</a></li>';
        echo '<li><a href="cadastro.php">Cadastro</a></li>';
    }
?>