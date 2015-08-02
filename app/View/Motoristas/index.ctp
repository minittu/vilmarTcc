<div class="motoristas index">
	<h2><?php echo __('Motoristas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf'); ?></th>
			<th><?php echo $this->Paginator->sort('rg'); ?></th>
			<th><?php echo $this->Paginator->sort('cnh'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('cidade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cnpj'); ?></th>
			<th><?php echo $this->Paginator->sort('fl_proprietario',utf8_decode('Proprietário')); ?></th>
			<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($motoristas as $motorista): ?>
	<tr>
		<td><?php echo h($motorista['Motorista']['id']); ?>&nbsp;</td>
		<td><?php echo h($motorista['Motorista']['nome']); ?>&nbsp;</td>
		<td><?php echo h($motorista['Motorista']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($motorista['Motorista']['rg']); ?>&nbsp;</td>
		<td><?php echo h($motorista['Motorista']['cnh']); ?>&nbsp;</td>
		<td><?php echo h($motorista['Motorista']['telefone']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($motorista['Cidade']['nome'], array('controller' => 'cidades', 'action' => 'view', $motorista['Cidade']['id'])); ?>
		</td>
		
		<td><?php echo h($motorista['Motorista']['cnpj']); ?>&nbsp;</td>
		<td><?php echo ($motorista['Motorista']['fl_proprietario']) == 1 ? 'Sim' : 'Nao'; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $motorista['Motorista']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $motorista['Motorista']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $motorista['Motorista']['id']), array('confirm' => __('Deseja realmente deletar o id# %s?', $motorista['Motorista']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Novo Motorista'), array('action' => 'add')); ?></li>
		
		
	</ul>
</div>
