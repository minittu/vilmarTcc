<div class="pacientes">
	<div class="page-header">
		<h1><?php echo __('Adicionar Paciente - (Identificação Pessoal)'); ?></h1>
	</div>
	<?php echo $this->Form->create('Paciente'); ?>

	<div class="row">
		<div class="col-md-10 col-sm-8 col-xs-9">
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

	<?php echo $this->Form->button(__('Adicionar Paciente'), array('type' => 'submit', 'class' => 'btn btn-primary pull-right')); ?>
</div>