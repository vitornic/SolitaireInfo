<?php
if(isset($_COOKIE["NomeADM"]) and (isset($_COOKIE["EmailADM"]))) {
    $login_cookie = $_COOKIE['NomeADM'];
    $pagatual = basename($_SERVER['SCRIPT_NAME']);

    echo "<li><a class='notmarked'>Administrativo</a></li>";
    echo "<li><a class='notmarked'>Olá, $login_cookie</a></li>";


    if ($pagatual == 'cadastrodeproduto.php') {
        echo "<li><a id = 'ativado' href='cadastrodeproduto.php'>Cadastro de Produto</a></li>";
    } else {
        echo "<li><a href='cadastrodeproduto.php'>Cadastro de Produto</a></li>";
    }

    if ($pagatual == 'cadastrodetipo.php') {
        echo "<li><a id = 'ativado' href='cadastrodetipo.php'>Cadastro de Tipo</a></li>";
    } else {
        echo "<li><a href='cadastrodetipo.php'>Cadastro de Tipo</a></li>";
    }

    if ($pagatual == 'cadastroForne.php') {
        echo "<li><a id='ativado' href='cadastroForne.php'>Cadastro de Fornecedor</a></li>";
    } else {
        echo "<li><a href='cadastroForne.php'>Cadastro de Fornecedor</a></li>";
    }

    echo "<li><a href = PTsair.php>Sair</a></li>";
} else {
    
}
?>