<div class="caminhaos form">
<?php echo $this->Form->create('Caminhao'); ?>
	<fieldset>
		<legend><?php echo __('Novo Caminhao'); ?></legend>
	<?php
		echo $this->Form->input('placa');
		echo $this->Form->input('chassi');
		echo $this->Form->input('cor');
		echo $this->Form->input('consumo');
		echo $this->Form->input('ano');
		echo $this->Form->input('marca_id',array(
    'label' => 'Marca'));
		echo $this->Form->input('modelo_id',array(
    'label' => 'Modelo'));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Caminhaos'), array('action' => 'index')); ?></li>
		
	</ul>
</div>
