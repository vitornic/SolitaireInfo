<?php
if(isset($_COOKIE["NomeADM"]) and (isset($_COOKIE["EmailADM"]))) {
    $login_cookie = $_COOKIE['NomeADM'];
    $pagatual = basename($_SERVER['SCRIPT_NAME']);

    echo "<li><a class='notmarked'>Administrative</a></li>";
    echo "<li><a class='notmarked'>Hello, $login_cookie</a></li>";


    if ($pagatual == 'registerprod.php') {
        echo "<li><a id = 'ativado' href='redisterprod.php'>Register a Product</a></li>";
    } else {
        echo "<li><a href='registerprod.php'>Register a Product</a></li>";
    }

    if ($pagatual == 'registertype.php') {
        echo "<li><a id = 'ativado' href='registertype.php'>Register a Type</a></li>";
    } else {
        echo "<li><a href='registertype.php'>Register a Type</a></li>";
    }

    echo "<li><a href = ENlogout.php>Logout</a></li>";
} else {
    
}
?>