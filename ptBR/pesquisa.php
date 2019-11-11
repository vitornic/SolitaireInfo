<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Login</title>
</head>

<body>
    <div class="nav">
        <form method="GET" action="pesquisa.php">
            <ul>
                <a href="inicio.html"><img src="../images/thumbnail_Logo Solitarie.png"></a>
                <input name="pesq" id="pesq" type="text" placeholder="PESQUISAR">
                <input type="submit" id="lupa" value="      "></input>

                <div class="dropdown">
                    <button class="dropbtn"><a href="#">Traduzir</a></button>
                    <div class="dropdown-content">
                        <a href="../enUS/">EN-US</a>
                    </div>
                </div>
                <li><a href="logout.php">Sair</a></li>
                <li><a href="entrar.php">Login</a></li>
                <li><a href="cadastro.html">Cadastro</a></li>
                <li><a href="formulario.php">Formulário</a></li>
            </ul>
        </form>
    </div>

    <div class="sidebar">
        <ul>
            <strong>CATEGORIAS</strong>
            <li><a href="Computadores.html">Computadores</a></li>
            <li><a href="Perifericos.html">Periféricos</a></li>
            <li><a href="Acessorios.html">Acessórios</a></li>
            <li><a href="Jogos.html">Jogos</a></li>
            <li><a href="Hardware.html">Armazenamento</a></li>
            <li><a href="Vídeo.html">Vídeo</a></li>
            <li><a href="Áudio.html">Áudio</a></li>
            <li><a href="Gabinetes.html">Gabinetes</a></li>
            <li><a href="Redes.html">Redes</a></li>
        </ul>
    </div>
 
</body>

<?php
header("Content-type: text/html; charset=utf-8");

include '../inc/conecta_mysql.inc';

if(isset($_GET['pesq'])) {
    $desc = $_GET['pesq'];
} else {
    $desc     = $_POST['pesq'];
}


$consulta = "SELECT p.codigo, p.nome, p.descricao, p.P_Venda, p.fotoProd, t.nome, t.descricao FROM produtos as p join tipoprod as t on p.codTipo = t.codigo ";

    $consulta = $consulta." WHERE p.nome LIKE '%$desc%' OR t.descricao LIKE '%$desc%'";
            

    $con        = $conexao->query($consulta) or die($conexao->error);


echo "<script>console.log(`$consulta`)</script>"; 
//Exibe o SELECT SQL no console navegador (F12 Google Chrome,Ctrl+Shift+I em outros navegadores)
?>

<div>
		<?php
  			@$login_cookie = $_COOKIE['Email'];
    			if(isset($login_cookie)){
    			    echo"<br>";
                    echo "<div class='boxmensagem'>";
    			    echo"Bem-Vindo, $login_cookie <br>";
				    echo"Essas informações <font color='green'>PODEM</font> ser acessadas por você";
                    echo "</div>";
                    include '../inc/conecta_mysql.inc';
                	include '../inc/showpesq.inc';
                    } else {
    			    echo "<br>";
    			    echo <<<'EOD'
    			    <div class = "boxform">
    			        <?php
        				    echo"Bem-Vindo, convidado <br>
        				    Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você
        				    <br><a href='../ptBR/entrar.php'>Faça Login</a> Para ler o conteúdo
				    </div>
EOD;
}
?>
</div>
</html>