<table class="table table-responsive">
	<thead>
		<tr>
		    <td>Product Code</td>
		    <td>Product Name</td>
		    <td>Product Description</td>
		    <td>Product Price</td>
		    <td>Product Photo</td>
		    <td>Product Type</td>
		    <td>Type Description</td>
		</tr>
		<?php 
		include '../inc/conecta_mysql.inc';
		while($dado = $con->fetch_array()) { ?>
		<tr>
			<td><?php echo $dado[0]; ?></td>
			<td><?php echo $dado[1]; ?></td>
			<td><?php echo $dado[2]; ?></td>
			<td><?php echo $dado[3]; ?></td>
			<td><?php echo $dado[4]; ?></td>
			<td><?php echo $dado[5]; ?></td>
			<td><?php echo $dado[6]; ?></td>
		</tr>
	<?php } 
	mysqli_close($conexao);
	?>
	</thead>
</table>