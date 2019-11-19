<nav class="sidebar">
    <ul>
        <strong>CATEGORIAS</strong>
        <?php
            $pagatual = basename($_SERVER['SCRIPT_NAME']);

            if ($pagatual == 'computadores.php') {
                echo "<li><a id = 'ativado' href='computadores.php'>Computadores</a></li>";
            } else {
                echo "<li><a href='computadores.php'>Computadores</a></li>";
            }

            if ($pagatual == 'perifericos.php') {
                echo "<li><a id = 'ativado' href='perifericos.php'>Periféricos</a></li>";
            } else {
                echo "<li><a href='perifericos.php'>Periféricos</a></li>";
            }

            if ($pagatual == 'acessorios.php') {
                echo "<li><a id = 'ativado' href='acessorios.php'>Acessórios</a></li>";
            } else {
                echo "<li><a href='acessorios.php'>Acessórios</a></li>";
            }

            if ($pagatual == 'jogos.php') {
                echo "<li><a id = 'ativado' href='jogos.php'>Jogos</a></li>";
            } else {
                echo "<li><a href='jogos.php'>Jogos</a></li>";
            }

            if ($pagatual == 'hardware.php') {
                echo "<li><a id = 'ativado' href='hardware.php'>Armazenamento</a></li>";
            } else {
                echo "<li><a href='hardware.php'>Armazenamento</a></li>";
            }

            if ($pagatual == 'video.php') {
                echo "<li><a id = 'ativado' href='video.php'>Vídeo</a></li>";
            } else {
                echo "<li><a href='video.php'>Vídeo</a></li>";
            }

            if ($pagatual == 'audio.php') {
                echo "<li><a id = 'ativado' href='audio.php'>Áudio</a></li>";
            } else {
                echo "<li><a href='audio.php'>Áudio</a></li>";
            }

            if ($pagatual == 'gabinetes.php') {
                echo "<li><a id = 'ativado' href='gabinetes.php'>Gabinetes</a></li>";
            } else {
                echo "<li><a href='gabinetes.php'>Gabinetes</a></li>";
            }

            if ($pagatual == 'redes.php') {
                echo "<li><a id = 'ativado' href='redes.php'>Redes</a></li>";
            } else {
                echo "<li><a href='redes.php'>Redes</a></li>";
            }

            include '../inc/PTverificaLogadoAdm.inc';
        ?>
    </ul>
</nav>