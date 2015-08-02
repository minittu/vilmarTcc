<!--<div class="pacientes form">
<?php echo $this->Form->create('Paciente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Paciente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('sexo');
		echo $this->Form->input('logradouro');
		echo $this->Form->input('cidade_id');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('telefone');
		echo $this->Form->input('atividade');
		echo $this->Form->input('procedencia');
		echo $this->Form->input('rg');
		echo $this->Form->input('orgao_exp');
		echo $this->Form->input('responsavel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Paciente.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Paciente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Historicos'), array('controller' => 'historicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historico'), array('controller' => 'historicos', 'action' => 'add')); ?> </li>
	</ul>
</div> -->

<!---------------------------------------------------------- -->

<div class="pacientes">
	<div class="page-header">
		<h1><?php echo __('Editar Paciente'); ?></h1>
	</div>
	<?php echo $this->Form->create('Paciente'); ?>

	<div class="row">
		<div class="col-md-10 col-sm-8 col-xs-9">
			<?php echo $this->Form->input('id',	array('hiddenField' => true)); ?>
			<?php echo $this->Form->input('nome', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>

		</div>
		<div class="col-md-2 col-sm-4 col-xs-3">
			<?php echo $this->Form->input('sexo', array('div' => array('class' => 'form-group'), 'class' => 'form-control'));?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-4">
			<?php echo $this->Form->input('telefone', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
		<div class="col-md-5 col-sm-5 col-xs-4">
			<?php echo $this->Form->input('rg', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-4">
			<?php echo $this->Form->input('orgao_exp', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-sm-7 col-xs-5">
			<?php echo $this->Form->input('logradouro', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
		<div class="col-md-2 col-sm-3 col-xs-4">
			<?php echo $this->Form->input('cidade_id', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-3">
			<?php echo $this->Form->input('estado_id', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<?php echo $this->Form->input('atividade', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<?php echo $this->Form->input('procedencia', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<?php echo $this->Form->input('responsavel', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
	</div>

	<?php echo $this->Form->button(__('Editar Paciente'), array('type' => 'submit', 'class' => 'btn btn-primary pull-right')); ?>


</div>