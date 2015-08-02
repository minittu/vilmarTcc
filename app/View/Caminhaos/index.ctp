<div class="caminhaos index">
	<h2><?php echo utf8_decode('Caminhões'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('placa'); ?></th>
			<th><?php echo $this->Paginator->sort('chassi'); ?></th>
			<th><?php echo $this->Paginator->sort('cor'); ?></th>
			<th><?php echo $this->Paginator->sort('consumo'); ?></th>
			<th><?php echo $this->Paginator->sort('ano'); ?></th>
			<th><?php echo $this->Paginator->sort('marca_id','marca'); ?></th>
			<th><?php echo $this->Paginator->sort('modelo_id','modelo'); ?></th>
			<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($caminhaos as $caminhao): ?>
	<tr>
		<td><?php echo h($caminhao['Caminhao']['id']); ?>&nbsp;</td>
		<td><?php echo h($caminhao['Caminhao']['placa']); ?>&nbsp;</td>
		<td><?php echo h($caminhao['Caminhao']['chassi']); ?>&nbsp;</td>
		<td><?php echo h($caminhao['Caminhao']['cor']); ?>&nbsp;</td>
		<td><?php echo h($caminhao['Caminhao']['consumo']); ?>&nbsp;</td>
		<td><?php echo h($caminhao['Caminhao']['ano']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($caminhao['Marca']['descricao'], array('controller' => 'marcas', 'action' => 'view', $caminhao['Marca']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($caminhao['Modelo']['descricao'], array('controller' => 'modelos', 'action' => 'view', $caminhao['Modelo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $caminhao['Caminhao']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $caminhao['Caminhao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $caminhao['Caminhao']['id']), array('confirm' => __('Deseja realmente deletar o id # %s?', $caminhao['Caminhao']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Caminhao'), array('action' => 'add')); ?></li>
		
	</ul>
</div>
