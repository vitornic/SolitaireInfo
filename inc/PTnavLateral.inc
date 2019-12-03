<nav class="sidebar">
    <ul>
        <strong>CATEGORIAS</strong>
        <?php

            include 'conecta_mysql.inc';

            $pagatual = basename($_SERVER['SCRIPT_NAME']);

            $consulta = "SELECT p.fotoProd, p.nome, p.descricao, t.nome, p.P_Venda FROM produtos as p join tipoprod as t on p.codTipo = t.codigo ";
            
            if ($pagatual == 'computadores.php') {
                echo "<li><a id = 'ativado' href='computadores.php'>Computadores</a></li>";
                $consulta = $consulta . "WHERE t.codigo = 1";
                $con = $conexao->query($consulta) or die($conexao->error);
            } else {
                echo "<li><a href='computadores.php'>Computadores</a></li>";
            }

            if ($pagatual == 'perifericos.php') {
                echo "<li><a id = 'ativado' href='perifericos.php'>Periféricos</a></li>";
                $consulta = $consulta . "WHERE t.codigo = 2";
                $con = $conexao->query($consulta) or die($conexao->error);
            } else {
                echo "<li><a href='perifericos.php'>Periféricos</a></li>";
            }

            if ($pagatual == 'acessorios.php') {
                echo "<li><a id = 'ativado' href='acessorios.php'>Acessórios</a></li>";
                $consulta = $consulta . "WHERE t.codigo = 3";
                $con = $conexao->query($consulta) or die($conexao->error);
            } else {
                echo "<li><a href='acessorios.php'>Acessórios</a></li>";
            }

            if ($pagatual == 'jogos.php') {
                echo "<li><a id = 'ativado' href='jogos.php'>Jogos</a></li>";
                $consulta = $consulta . "WHERE t.codigo = 4";
                $con = $conexao->query($consulta) or die($conexao->error);
            } else {
                echo "<li><a href='jogos.php'>Jogos</a></li>";
            }

            if ($pagatual == 'hardware.php') {
                echo "<li><a id = 'ativado' href='hardware.php'>Armazenamento</a></li>";
                $consulta = $consulta . "WHERE t.codigo = 5";
                $con = $conexao->query($consulta) or die($conexao->error);
            } else {
                echo "<li><a href='hardware.php'>Armazenamento</a></li>";
            }

            if ($pagatual == 'video.php') {
                echo "<li><a id = 'ativado' href='video.php'>Vídeo</a></li>";
                $consulta = $consulta . "WHERE t.codigo = 6";
                $con = $conexao->query($consulta) or die($conexao->error);
            } else {
                echo "<li><a href='video.php'>Vídeo</a></li>";
            }

            if ($pagatual == 'audio.php') {
                echo "<li><a id = 'ativado' href='audio.php'>Áudio</a></li>";
                $consulta = $consulta . "WHERE t.codigo = 7";
                $con = $conexao->query($consulta) or die($conexao->error);
            } else {
                echo "<li><a href='audio.php'>Áudio</a></li>";
            }

            if ($pagatual == 'gabinetes.php') {
                echo "<li><a id = 'ativado' href='gabinetes.php'>Gabinetes</a></li>";
                $consulta = $consulta . "WHERE t.codigo = 8";
                $con = $conexao->query($consulta) or die($conexao->error);
            } else {
                echo "<li><a href='gabinetes.php'>Gabinetes</a></li>";
            }

            if ($pagatual == 'redes.php') {
                echo "<li><a id = 'ativado' href='redes.php'>Redes</a></li>";
                $consulta = $consulta . "WHERE t.codigo = 9";
                $con = $conexao->query($consulta) or die($conexao->error);
            } else {
                echo "<li><a href='redes.php'>Redes</a></li>";
            }

            include '../inc/PTverificaLogadoAdm.inc';

            mysqli_close($conexao);
        ?>
    </ul>
</nav>