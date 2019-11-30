<table class="table table-responsive">
	<thead>
		<tr>
            <td>Foto do Produto</td>
		    <td>Nome do Produto</td>
		    <td>Descricao do Produto</td>
            <td>Custo de Produção</td>
		    <td>Preço de Venda</td>
		    <td>Tipo do Produto</td>
		    <td>Descricão do Tipo</td>
            <td>Fornecedor</td>
		</tr>
		<?php 
		include '../inc/conecta_mysql.inc';
		while($dado = $conexao->fetch_array()) { ?>
		<tr>
			<td><img src="../images/<?php echo $dado[5]; ?>" width="100px" height="100px"></td>
			<td><?php echo $dado[1]; ?></td>
			<td><?php echo $dado[2]; ?></td>
			<td><?php echo $dado[3]; ?></td>
			<td><?php echo $dado[4]; ?></td>
			<td><?php echo $dado[6]; ?></td>
            <td><?php echo $dado[7]; ?></td>
            <td><?php echo $dado[8]; ?></td>
		</tr> 
    <?php }
	mysqli_close($conexao);
	?>
	</thead>
</table>