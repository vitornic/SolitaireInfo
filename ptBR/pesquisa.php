<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Login</title>
</head>

<body>
    <?php include '../inc/PTnavSuperior.inc'; ?>

    <?php include '../inc/PTnavLateral.inc'; ?>
 
</body>

<?php
header("Content-type: text/html; charset=utf-8");

include '../inc/conecta_mysql.inc';

if(isset($_GET['pesq'])) {
    @$desc = $_GET['pesq'];
} else {
    @$desc = $_POST['pesq'];
}


$consulta = "SELECT p.codigo, p.nome, p.descricao, p.P_Venda, p.fotoProd, t.nome, t.descricao FROM produtos as p join tipoprod as t on p.codTipo = t.codigo ";

    $consulta = $consulta." WHERE p.nome LIKE '%$desc%' OR t.descricao LIKE '%$desc%'";
    $con      = $conexao->query($consulta) or die($conexao->error);


echo "<script>console.log(`$consulta`)</script>";
mysqli_close($conexao);
//Exibe o SELECT SQL no console navegador (F12 Google Chrome,Ctrl+Shift+I em outros navegadores)
?>

<div>
		<?php
              @$login_cookie = $_COOKIE['Nome'];
              @$loginadm_cookie = $_COOKIE['NomeADM'];
    			if(isset($login_cookie) or isset($loginadm_cookie)) {
                    echo "<center>";
    			    echo "<br>";
                    echo "<div class='boxmensagem'>";
                    if (isset($loginadm_cookie)) {
                        echo "Bem-Vindo, $loginadm_cookie <br>";
                    } else {
                        echo "Bem-Vindo, $login_cookie <br>";
                    }
				    echo "Essas informações <font color='green'>PODEM</font> ser acessadas por você";
                    echo "</div>";
                    echo "<br>"; 
                	include '../inc/PTMostrarPesquisa.inc';
                } else {
                    echo "<br>";
                    echo '<div class = "boxform">
                    <?php
                        echo"Bem-Vindo, convidado <br>
                        Essas informações <font color="red">NÃO PODEM</font> ser acessadas por você
                        <br><a href="../ptBR/entrar.php">Faça Login</a> Para ler o conteúdo
                    </div>';
                }
?>
</div>
</html>