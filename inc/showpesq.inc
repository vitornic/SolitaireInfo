<table class="table table-responsive">
	<thead>
		<tr>
		    <td>Codigo do Produto</td>
		    <td>Nome do Produto</td>
		    <td>Descricao do Produto</td>
		    <td>Preço do Produto</td>
		    <td>Foto do Produto</td>
		    <td>Tipo do Produto</td>
		    <td>Descricão do Tipo</td>
		</tr>
		<?php while($dado = $con->fetch_array()) { ?>
		<tr>
			<td><?php echo $dado[0]; ?></td>
			<td><?php echo $dado[1]; ?></td>
			<td><?php echo $dado[2]; ?></td>
			<td><?php echo $dado[3]; ?></td>
			<td><?php echo $dado[4]; ?></td>
			<td><?php echo $dado[5]; ?></td>
			<td><?php echo $dado[6]; ?></td>
		</tr>
	<?php } ?>
	</thead>
</table>