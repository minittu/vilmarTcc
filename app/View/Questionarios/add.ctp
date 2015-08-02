<div class="questionarios form">
<?php echo $this->Form->create('Questionario'); ?>
	<fieldset>
		<legend><?php echo __('Add Questionario'); ?></legend>
	<?php
		echo $this->Form->input('historico_id');
		echo $this->Form->input('motivo');
		echo $this->Form->input('sinais_sintomas');
		echo $this->Form->input('ant_pessoais');
		echo $this->Form->input('ant_familiares');
		echo $this->Form->input('usuario_rx');
		echo $this->Form->input('ultimo_controle');
		echo $this->Form->input('tp_ultimo_controle');
		echo $this->Form->input('ultima_rx');
		echo $this->Form->input('tp_ultimo_rx');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Questionarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Historicos'), array('controller' => 'historicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historico'), array('controller' => 'historicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
