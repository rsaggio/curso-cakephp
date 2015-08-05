<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Descrição</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach($produtos as $prod) {
		 ?>
		<tr>
			<td><?= $prod['id']; ?></td>
			<td><?= $prod['nome']; ?></td>
			<td><?= $prod['preco']; ?></td>
			<td><?= $prod['desc']; ?></td>
		</tr>
		<?php 
			}
		?>
	</tbody>
</table>