<!DOCTYPE html>
<head>
    <title>REDIRECIONANDO EM 5 SEGUNDOS...</title>
</head>

<body>
<img src="../images/emconst.png" width="100%" height="100%">

<?php
    $paginaAtual = $_SERVER['HTTP_REFERER'];

    header("refresh: 5;$paginaAtual");
?>


</body>