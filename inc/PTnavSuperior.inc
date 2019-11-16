<nav class="nav">
    <form method="POST" action="pesquisa.php">
        <ul>
            <a href="inicio.php"><img src="../images/thumbnail_Logo Solitarie.png"></a>
            <input name="pesq" id="pesq" type="text" placeholder="PESQUISAR">
            <input type="submit" id="lupa" value="      ">

            <li><a href="../enUS/computers.php" id="translate"><img src="../images/traducao.png" width="35px" height="35px"></a></li>
                
            <?php include '../inc/PTverificaLogadoCliente.inc'; ?>
            <li><a href="formulario.php">Formulário</a></li>
        </ul>
    </form>
</nav>