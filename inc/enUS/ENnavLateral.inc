<nav class="sidebar">
    <ul>
        <strong>CATEGORIES</strong>
        <?php
            $pagatual = basename($_SERVER['SCRIPT_NAME']);

            if ($pagatual == 'computers.php') {
                echo "<li><a id = 'ativado' href='computers.php'>Computers</a></li>";
            } else {
                echo "<li><a href='computers.php'>Computers</a></li>";
            }

            if ($pagatual == 'peripherals.php') {
                echo "<li><a id = 'ativado' href='peripherals.php'>Peripherals</a></li>";
            } else {
                echo "<li><a href='peripherals.php'>Peripherals</a></li>";
            }

            if ($pagatual == 'accessories.php') {
                echo "<li><a id = 'ativado' href='accessories.php'>Acessories</a></li>";
            } else {
                echo "<li><a href='accessories.php'>Acessories</a></li>";
            }

            if ($pagatual == 'games.php') {
                echo "<li><a id = 'ativado' href='games.php'>Games</a></li>";
            } else {
                echo "<li><a href='games.php'>Games</a></li>";
            }

            if ($pagatual == 'storage.php') {
                echo "<li><a id = 'ativado' href='storage.php'>Storage</a></li>";
            } else {
                echo "<li><a href='storage.php'>Storage</a></li>";
            }

            if ($pagatual == 'video.php') {
                echo "<li><a id = 'ativado' href='video.php'>Video</a></li>";
            } else {
                echo "<li><a href='video.php'>Video</a></li>";
            }

            if ($pagatual == 'audio.php') {
                echo "<li><a id = 'ativado' href='audio.php'>Audio</a></li>";
            } else {
                echo "<li><a href='audio.php'>Audio</a></li>";
            }

            if ($pagatual == 'cabinets.php') {
                echo "<li><a id = 'ativado' href='cabinets.php'>Cabinets</a></li>";
            } else {
                echo "<li><a href='cabinets.php'>Cabinets</a></li>";
            }

            if ($pagatual == 'network.php') {
                echo "<li><a id = 'ativado' href='network.php'>Network</a></li>";
            } else {
                echo "<li><a href='network.php'>Network</a></li>";
            }

            include '../inc/enUS/ENverificaLogadoAdm.inc';
        ?>
    </ul>
</nav>