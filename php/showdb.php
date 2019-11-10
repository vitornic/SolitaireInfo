<?php
header("Content-type: text/html; charset=utf-8");

include '../inc/conecta_mysql.inc';
$consulta   = "SELECT * FROM `normalusers`";
$con        = $conexao->query($consulta) or die($conexao->error);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="https://i.imgur.com/DbvWhVy.png">
  <meta charset="UTF-8">
  <title>Visualizar</title>
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <div  class="custom-padding">
		<nav>
			<div href="index.html" class="logo"><a href="../index.html">Solitarie</a></div>
			<div>
				<ul class="menu-area">
				<li>
					<a href="../index.html">Início</a>
				</li>
				<li>
					<a href="../login.html">Login</a>
				</li>
				<li>
					<a href="../cadastro.html">Cadastro</a>
				</li>
				<li class="active">
					<a href="#">Visualizar</a>
				</li>
				<li>
					<a href="logout.php">Sair</a>
				</li>
				</ul>
			</div>
		</nav>
	</div>
</head>

<body>
	<div>
		<?php
  			@$login_cookie = $_COOKIE['Email'];
    			if(isset($login_cookie)){
    			    echo"<br>";
    			    echo"Bem-Vindo, $login_cookie <br>";
				    echo"Essas informações <font color='green'>PODEM</font> ser acessadas por você";
				    echo"
				    
				    <div>
                	".include '../inc/showdb.inc';"
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

	</div>
</body>
</html>