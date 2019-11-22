<nav class="nav">
    <form method="POST" action="search.php">
        <ul>
            <a href="home.php"><img src="../images/thumbnail_Logo Solitarie.png"></a>
            <input name="pesq" id="pesq" type="text" placeholder="SEARCH">
            <input type="submit" id="lupa" value="      ">

            <?php
            
                $pagatual = basename($_SERVER['SCRIPT_NAME']);

                switch ($pagatual) {
                    case "home.php":
                        echo '<li><a href="../ptBR/inicio.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "search.php":
                        echo '<li><a href="../ptBR/pesquisa.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "form.php":
                        echo '<li><a href="../ptBR/formulario.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "signup.php":
                        echo '<li><a href="../ptBR/cadastro.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    
                    case "signupadm.php":
                        echo '<li><a href="../ptBR/cadastroadm.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    
                    case "login.php":
                        echo '<li><a href="../ptBR/entrar.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    
                    case "loginadm.php":
                        echo '<li><a href="../ptBR/entraradm.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    
                    case "computers.php":
                        echo '<li><a href="../ptBR/computadores.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "peripherals.php":
                        echo '<li><a href="../ptBR/perifericos.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "accessories.php":
                        echo '<li><a href="../ptBR/acessorios.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "games.php":
                        echo '<li><a href="../ptBR/jogos.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "storage.php":
                        echo '<li><a href="../ptBR/hardware.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "video.php":
                        echo '<li><a href="../ptBR/video.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "audio.php":
                        echo '<li><a href="../ptBR/audio.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "cabinets.php":
                        echo '<li><a href="../ptBR/gabinetes.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "network.php":
                        echo '<li><a href="../ptBR/redes.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "registerprod.php":
                        echo '<li><a href="../ptBR/cadastrodeproduto.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "registertype.php":
                        echo '<li><a href="../ptBR/cadastrodetipo.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    default:
                        echo '<li><a href="../php/emconst.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                }
            ?>

            <?php include '../inc/enUS/ENverificaLogadoCliente.inc'; ?>
        </ul>
    </form>
</nav>