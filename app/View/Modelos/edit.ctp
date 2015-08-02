<div class="modelos form">
<?php echo $this->Form->create('Modelo'); ?>
	<fieldset>
		<legend><?php echo __('Editar Modelo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('marca_id',array(
    'label' => 'Marca'));
		echo $this->Form->input('descricao',array(
    'label' => 'Descricao'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Modelo.id')), array(), __('Deseja realmente deletar o id # %s?', $this->Form->value('Modelo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Modelos'), array('action' => 'index')); ?></li>
		
	</ul>
</div>
