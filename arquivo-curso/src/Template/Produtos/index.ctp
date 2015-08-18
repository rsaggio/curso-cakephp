<table>
	<thead>
		<tr>
			<th>Id</th>
			<th><?= __("Nome"); ?></th>
			<th><?= __("Preço"); ?></th>
			<th><?= __("Preço com desconto"); ?></th>
			<th><?= __("Descrição"); ?></th>
			<th><?= __("Ação"); ?></th>
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
				<?= $this->Form->postLink('Deletar',['controller' => 'Produtos','action' => 'delete',$prod['id']],['confirm' => __('tem certeza que deseja deletar ?')]); ?>
			</td>
		</tr>
		<?php 
			}
		?>
	</tbody>
</table>
<div class="paginator">
	<ul class="pagination">
	<?php 
		echo $this->Paginator->prev(__("Anterior"));
		echo $this->Paginator->numbers();
		echo $this->Paginator->next(__("Proximo"));
	 ?>
	 </ul>
</div>
<?php
	echo $this->Html->link('Novo produto',['controller' => 'Produtos', 'action' => 'novo']);
	echo $this->Html->link('Logout',['controller' => 'Users', 'action' => 'logout']);
?>