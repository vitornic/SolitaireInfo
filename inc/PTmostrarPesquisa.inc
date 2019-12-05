<div class="tabelas">
    <?php
    while ($dado = $con->fetch_array()) { ?>
        <div class="separar">
            <table>
                <td>
                    <tr>
                        <td><?php
                        $a = $dado['0'];
                        $foto = "../images/$a";
                        if (file_exists($foto)) {
                            echo "<img src='$foto' width='200px' height='200px'>";
                        } else {
                            echo "<img src='../images/placeholder.png'>";
                        } ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $dado['1'] ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $dado['2'] ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $dado['3'] ?></td>
                    </tr>
                    <tr>
                        <td><?php echo 'R$ '.$dado['4'] ?></td>
                    </tr>
                    <tr>
                        <td><button class="btnComprar">COMPRAR</button></td>
                    </tr>
                </td>
            </table>
        </div>
    <?php } ?>
</div>