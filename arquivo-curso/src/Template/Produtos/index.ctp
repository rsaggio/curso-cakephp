<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Preço com desconto</th>
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
			<td><?= $this->Money->format($prod['preco']); ?></td>
			<td><?= $this->Money->format($prod->calculaDesconto()); ?></td>
			<td><?= $prod['descricao']; ?></td>
		</tr>
		<?php 
			}
		?>
	</tbody>
</table>
<?php
	echo $this->Html->link('Novo produto',['controller' => 'Produtos', 'action' => 'novo']);
?>