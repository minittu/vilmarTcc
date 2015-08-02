<div class="marcas form">
<?php echo $this->Form->create('Marca'); ?>
	<fieldset>
		<legend><?php echo __('Novo Marca'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Marcas'), array('action' => 'index')); ?></li>
		
	</ul>
</div>
