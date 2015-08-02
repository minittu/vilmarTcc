<div class="modelos form">
<?php echo $this->Form->create('Modelo'); ?>
	<fieldset>
		<legend><?php echo __('Novo Modelo'); ?></legend>
	<?php
		echo $this->Form->input('marca_id', array(
    'label' => 'Marca'));
		echo $this->Form->input('descricao', array(
    'label' => 'Descricao'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Modelos'), array('action' => 'index')); ?></li>
		
	</ul>
</div>
