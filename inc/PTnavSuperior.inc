<nav class="nav">
    <form method="POST" action="pesquisa.php">
        <ul>
            <a href="inicio.php"><img src="../images/thumbnail_Logo Solitarie.png"></a>
            <input name="pesq" id="pesq" type="text" placeholder="PESQUISAR">
            <input type="submit" id="lupa" value="      ">

            <?php
            
                $pagatual = basename($_SERVER['SCRIPT_NAME']);

                switch ($pagatual) {
                    case "inicio.php":
                        echo '<li><a href="../enUS/home.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "pesquisa.php":
                        echo '<li><a href="../enUS/search.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "formulario.php":
                        echo '<li><a href="../enUS/form.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "cadastro.php":
                        echo '<li><a href="../enUS/signup.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "cadastroadm.php":
                        echo '<li><a href="../enUS/signupadm.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "entrar.php":
                        echo '<li><a href="../enUS/login.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "entraradm.php":
                        echo '<li><a href="../enUS/loginadm.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "computadores.php":
                        echo '<li><a href="../enUS/computers.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "perifericos.php":
                        echo '<li><a href="../enUS/peripherals.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "acessorios.php":
                        echo '<li><a href="../enUS/accessories.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "jogos.php":
                        echo '<li><a href="../enUS/games.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "hardware.php":
                        echo '<li><a href="../enUS/storage.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "video.php":
                        echo '<li><a href="../enUS/video.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "audio.php":
                        echo '<li><a href="../enUS/audio.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "gabinetes.php":
                        echo '<li><a href="../enUS/cabinets.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "redes.php":
                        echo '<li><a href="../enUS/network.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "cadastrodeproduto.php":
                        echo '<li><a href="../enUS/signprod.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "cadastrodetipo.php":
                        echo '<li><a href="../enUS/signprodtype.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    default:
                        echo '<li><a href="../php/emconst.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                }
            ?>

            <?php include '../inc/PTverificaLogadoCliente.inc'; ?>
            <li><a href="formulario.php">Formulário</a></li>
        </ul>
    </form>
</nav>