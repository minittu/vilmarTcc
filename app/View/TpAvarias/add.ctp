<div class="tpAvarias form">
<?php echo $this->Form->create('TpAvaria'); ?>
	<fieldset>
		<legend><?php echo __('Novo Tp Avaria'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Tp Avarias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Avarias'), array('controller' => 'avarias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Avaria'), array('controller' => 'avarias', 'action' => 'add')); ?> </li>
	</ul>
</div>
