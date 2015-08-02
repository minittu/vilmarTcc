<div class="modelos index">
	<h2><?php echo __('Modelos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('marca_id','Marca'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao',utf8_decode('Descrição')); ?></th>
			<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($modelos as $modelo): ?>
	<tr>
		<td><?php echo h($modelo['Modelo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($modelo['Marca']['descricao'], array('controller' => 'marcas', 'action' => 'view', $modelo['Marca']['id'])); ?>
		</td>
		<td><?php echo h($modelo['Modelo']['descricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $modelo['Modelo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $modelo['Modelo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $modelo['Modelo']['id']), array('confirm' => __('Deseja realmente deletar o id # %s?', $modelo['Modelo']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Novo Modelo'), array('action' => 'add')); ?></li>
		
	</ul>
</div>
