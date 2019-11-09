<table class="table table-responsive">
	<thead>
		<tr>
		    <td>E-mail</td>
		    <td>Senha</td>
		</tr>
		<?php while($dado = $con->fetch_array()) { ?>
		<tr>
			<td><?php echo $dado['email']; ?></td>
			<td><?php echo $dado['senha']; ?></td>
		</tr>
	<?php } ?>
	</thead>
</table>