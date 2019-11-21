<nav class="nav">
    <form method="POST" action="pesquisa.php">
        <ul>
            <a href="inicio.php"><img src="../images/thumbnail_Logo Solitarie.png"></a>
            <input name="pesq" id="pesq" type="text" placeholder="SEARCH">
            <input type="submit" id="lupa" value="      ">

            <?php
            
                $pagatual = basename($_SERVER['SCRIPT_NAME']);

                switch ($pagatual) {
                    case "inicio.php":
                        echo '<li><a href="../ptBR/inicio.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "pesquisa.php":
                        echo '<li><a href="../ptBR/pesqusa.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "formulario.php":
                        echo '<li><a href="../ptBR/formulario.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "cadastro.php":
                        echo '<li><a href="../ptBR/cadastrar.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    
                    case "cadastroadm.php":
                        echo '<li><a href="../ptBR/cadastraradm.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    
                    case "entrar.php":
                        echo '<li><a href="../ptBR/entrar.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    
                    case "entraradm.php":
                        echo '<li><a href="../ptBR/entraradm.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    
                    case "computadores.php":
                        echo '<li><a href="../ptBR/computadores.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "perifericos.php":
                        echo '<li><a href="../ptBR/perifericos.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "acessorios.php":
                        echo '<li><a href="../ptBR/accessorios.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "jogos.php":
                        echo '<li><a href="../ptBR/jogos.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "hardware.php":
                        echo '<li><a href="../ptBR/hardware.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "video.php":
                        echo '<li><a href="../ptBR/video.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "audio.php":
                        echo '<li><a href="../ptBR/audio.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "gabinetes.php":
                        echo '<li><a href="../ptBR/gabinetes.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "redes.php":
                        echo '<li><a href="../ptBR/rede.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "cadastrodeproduto.php":
                        echo '<li><a href="../ptBR/cadastrodeproduto.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    case "cadastrodetipo.php":
                        echo '<li><a href="../ptBR/cadastrodetipo.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                        break;
                    default:
                        echo '<li><a href="../php/emconst.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a><li>';
                }
            ?>

            <?php include '../inc/PTverificaLogadoCliente.inc'; ?>
        </ul>
    </form>
</nav>