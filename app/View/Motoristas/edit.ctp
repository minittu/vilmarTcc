<div class="motoristas form">
<?php echo $this->Form->create('Motorista'); ?>
	<fieldset>
		<legend><?php echo __('Editar Motorista'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input('cnh');
		echo $this->Form->input('telefone');
		echo $this->Form->input('cidade_id');
		
		echo $this->Form->input('cnpj');
		//echo $this->Form->input('fl_proprietario');
	?>
	Sim <input type="radio" name="data[Motorista][fl_proprietario]" id="" value="1" /><br/>
	Nao <input type="radio" name="data[Motorista][fl_proprietario]" id="" value="0" checked="checked" />
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Motorista.id')), array(), __('Deseja realmente deletar o id # %s?', $this->Form->value('Motorista.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Motoristas'), array('action' => 'index')); ?></li>
		 		
	</ul>
</div>
