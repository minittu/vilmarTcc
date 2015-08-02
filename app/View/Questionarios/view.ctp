<div class="questionarios view">
<h2><?php echo __('Questionario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($questionario['Questionario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Historico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($questionario['Historico']['id'], array('controller' => 'historicos', 'action' => 'view', $questionario['Historico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motivo'); ?></dt>
		<dd>
			<?php echo h($questionario['Questionario']['motivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sinais Sintomas'); ?></dt>
		<dd>
			<?php echo h($questionario['Questionario']['sinais_sintomas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ant Pessoais'); ?></dt>
		<dd>
			<?php echo h($questionario['Questionario']['ant_pessoais']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ant Familiares'); ?></dt>
		<dd>
			<?php echo h($questionario['Questionario']['ant_familiares']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Rx'); ?></dt>
		<dd>
			<?php echo h($questionario['Questionario']['usuario_rx']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultimo Controle'); ?></dt>
		<dd>
			<?php echo h($questionario['Questionario']['ultimo_controle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tp Ultimo Controle'); ?></dt>
		<dd>
			<?php echo h($questionario['Questionario']['tp_ultimo_controle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Rx'); ?></dt>
		<dd>
			<?php echo h($questionario['Questionario']['ultima_rx']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tp Ultimo Rx'); ?></dt>
		<dd>
			<?php echo h($questionario['Questionario']['tp_ultimo_rx']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Questionario'), array('action' => 'edit', $questionario['Questionario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Questionario'), array('action' => 'delete', $questionario['Questionario']['id']), array(), __('Are you sure you want to delete # %s?', $questionario['Questionario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questionarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Questionario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Historicos'), array('controller' => 'historicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historico'), array('controller' => 'historicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
