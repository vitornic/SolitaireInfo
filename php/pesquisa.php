<?php
header("Content-type: text/html; charset=utf-8");

include '../inc/conecta_mysql.inc';
$consulta   = "SELECT * FROM `clientes`";
$con        = $conexao->query($consulta) or die($conexao->error);

?>

<!DOCTYPE>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/fav.png">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Login</title>
</head>

<body>
    <div class="nav">
        <form method="POST" action="../php/pesquisa.php">
            <ul>
                <a href="inicio.html"><img src="../images/thumbnail_Logo Solitarie.png"></a>
                <input id="pesq" type="search" placeholder="PESQUISAR" q="googlesearch">
                <input type="submit" id="lupa" value="PESQ"></input>

                <div class="dropdown">
                    <button class="dropbtn"><a href="#">Traduzir</a></button>
                    <div class="dropdown-content">
                        <a href="../enUS/login.html">EN-US</a>
                    </div>
                </div>
                <li><a href="../ptBR/entrar.html">Login</a></li>
                <li><a href="../ptBR/cadastro.html">Cadastro</a></li>
                <li><a href="../php/formulario.php">Formulário</a></li>
                <li><a href="../php/logout.php">Sair</a></li>
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

<div>
		<?php
  			@$login_cookie = $_COOKIE['Email'];
    			if(isset($login_cookie)){
    			    echo"<br>";
    			    echo"Bem-Vindo, $login_cookie <br>";
				    echo"Essas informações <font color='green'>PODEM</font> ser acessadas por você";
				    echo"
				    
				    <div>
                	".include '../inc/showpesq.inc';"
                    </div>";
                    } else {
    			    echo "<br>";
    			    echo <<<'EOD'
    			    <div class = "boxform">
    			        <?php
        				    echo"Bem-Vindo, convidado <br>
        				    Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você
        				    <br><a href='../login.html'>Faça Login</a> Para ler o conteúdo
				    </div>
EOD;
}
?>

<?php
        include '../inc/conecta_mysql.inc';

        if(count($_POST) > 0) {

            

            $desc = trim($_POST['pesq']);

            $sql = "SELECT * FROM produto WHERE nome LIKE '%".$desc."%' OR descricao LIKE '%".$desc."%'";

            $rs = mysqli_query($conexao, $sql) or die('Erro de Consulta');
            die();
            $total = mysqli_num_rows($rs);

            

            echo "<center><span style='color:#ff0000'>TOTAL DE REGISTROS: ".$total."</span></center>";

            echo "<center>";
            echo "<table border = 1>
                    <tr>
                        <td>FOTO</td>
                        <td>CODIGO</td>
                        <td>NOME</td>
                        <td>DESCRICAO</td>
                        <td>VALOR</td>
                        <td>CODIGO TIPO</td>
                    </tr>";

            while ($linha = mysqli_fetch_assoc($rs)) {
                $codProd = $linha['codigo'];
                $nomeProd = $linha['nome'];
                $descProd = $linha['descricao'];
                $P_Venda   = $linha['PVenda'];
                $fotoProd = $linha['fotoProd'];
                $codForne  = $linha['fornecedor'];
                $tipoProd = $linha['codtipo'];
                
                echo "<tr>
                        <td><img src='imagens/$fotoProd' width='100px' height='100px'></td>
                        <td>".$codProd."</td>
                        <td>".$nomeProd."</td>
                        <td>".$descProd."</td>
                        <td>".$P_Venda."</td>
                        <td>".$fotoProd."</td>
                        <td>".$codForne."</td>
                        <td>".$tipoProd."</td>
                    </tr>";
                echo "</center>";
            }

            echo "</table>";
            mysqli_free_result($rs);
            mysqli_close($conexao);
        }
    ?>

</div>
</html>
