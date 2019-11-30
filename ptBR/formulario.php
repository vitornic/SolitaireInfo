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
    <?php include '../inc/PTnavSuperior.inc'; ?>

    <?php include '../inc/PTnavLateral.inc'; ?>

    <?php
    @$login_cookie = $_COOKIE['Email'];
    if(!isset($login_cookie)) {
        echo "<br>";
        echo "<div class = 'boxform'>
        Bem-Vindo, convidado <br>
        Essas informações <font color='red'>NÃO PODEM</font> <br> ser acessadas por você
        <br><a href='entrar.php'>Faça Login</a>para ver o conteúdo
        </div>"; } else {
            include '../inc/PTformulario.inc';
        }
    ?>
</div>
<?php include '../inc/PTrodape.inc'; ?>
</body>
</html>