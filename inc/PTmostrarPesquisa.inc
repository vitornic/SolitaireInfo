<table class="table table-responsive">
	<thead>
		<tr>
		    <td>#</td>
		    <td>Nome</td>
		    <td>Descricao</td>
		    <td>Preço</td>
		    <td>Foto</td>
		    <td>Tipo</td>
		</tr>
		<?php 
		include '../inc/conecta_mysql.inc';
		while($dado = $con->fetch_array()) { ?>
		<tr>
			<td><?php echo $dado[0]; ?></td>
			<td><?php echo $dado[1]; ?></td>
			<td><?php echo $dado[2]; ?></td>
			<td>R$ <?php echo $dado[3]; ?></td>
			<td><?php echo $dado[4]; ?></td>
			<td><?php echo $dado[5]; ?></td>
		</tr>
	<?php } 
	mysqli_close($conexao);
	?>
	</thead>
</table>