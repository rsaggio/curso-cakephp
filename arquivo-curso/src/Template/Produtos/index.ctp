<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Preço com desconto</th>
			<th>Descrição</th>
			<th>Ação</th>
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
			<td>
				<?= $this->Html->link('Editar',['controller' => 'Produtos', 'action' => 'edit',$prod['id']]);?>
				<?= $this->Form->postLink('Deletar',['controller' => 'Produtos','action' => 'delete',$prod['id']],['confirm' => 'tem certeza que deseja deletar ?']); ?>
			</td>
		</tr>
		<?php 
			}
		?>
	</tbody>
</table>
<?php
	echo $this->Html->link('Novo produto',['controller' => 'Produtos', 'action' => 'novo']);
	echo $this->Html->link('Logout',['controller' => 'Users', 'action' => 'logout']);
?>