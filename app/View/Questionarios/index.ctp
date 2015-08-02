<div class="questionarios index">
	<h2><?php echo __('Questionarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('historico_id'); ?></th>
			<th><?php echo $this->Paginator->sort('motivo'); ?></th>
			<th><?php echo $this->Paginator->sort('sinais_sintomas'); ?></th>
			<th><?php echo $this->Paginator->sort('ant_pessoais'); ?></th>
			<th><?php echo $this->Paginator->sort('ant_familiares'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_rx'); ?></th>
			<th><?php echo $this->Paginator->sort('ultimo_controle'); ?></th>
			<th><?php echo $this->Paginator->sort('tp_ultimo_controle'); ?></th>
			<th><?php echo $this->Paginator->sort('ultima_rx'); ?></th>
			<th><?php echo $this->Paginator->sort('tp_ultimo_rx'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($questionarios as $questionario): ?>
	<tr>
		<td><?php echo h($questionario['Questionario']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($questionario['Historico']['id'], array('controller' => 'historicos', 'action' => 'view', $questionario['Historico']['id'])); ?>
		</td>
		<td><?php echo h($questionario['Questionario']['motivo']); ?>&nbsp;</td>
		<td><?php echo h($questionario['Questionario']['sinais_sintomas']); ?>&nbsp;</td>
		<td><?php echo h($questionario['Questionario']['ant_pessoais']); ?>&nbsp;</td>
		<td><?php echo h($questionario['Questionario']['ant_familiares']); ?>&nbsp;</td>
		<td><?php echo h($questionario['Questionario']['usuario_rx']); ?>&nbsp;</td>
		<td><?php echo h($questionario['Questionario']['ultimo_controle']); ?>&nbsp;</td>
		<td><?php echo h($questionario['Questionario']['tp_ultimo_controle']); ?>&nbsp;</td>
		<td><?php echo h($questionario['Questionario']['ultima_rx']); ?>&nbsp;</td>
		<td><?php echo h($questionario['Questionario']['tp_ultimo_rx']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $questionario['Questionario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $questionario['Questionario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $questionario['Questionario']['id']), array(), __('Are you sure you want to delete # %s?', $questionario['Questionario']['id'])); ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Questionario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Historicos'), array('controller' => 'historicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historico'), array('controller' => 'historicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
