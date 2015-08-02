<!--<div class="users form col-lg-12">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('matricula');
		echo $this->Form->input('role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Historicos'), array('controller' => 'historicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historico'), array('controller' => 'historicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
!-->
<div class="usuarios">
	<div class="page-header">
		<h1><?php echo __('Adicionar Usuário'); ?></h1>
	</div>
	<?php echo $this->Form->create('User'); ?>

	<div class="row">
		<div class="col-md-6 col-sm-8 col-xs-9">
			<?php echo $this->Form->input('nome', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
		<div class="col-md-6 col-sm-4 col-xs-3">
			<?php echo $this->Form->input('email', array('div' => array('class' => 'form-group'), 'class' => 'form-control'));?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-4">
			<?php echo $this->Form->input('username', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
		<div class="col-md-5 col-sm-5 col-xs-4">
			<?php echo $this->Form->input('password', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-4">
			<?php echo $this->Form->input('matricula', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-7 col-xs-5">
			<?php
				$combo = array("0" => "Aluno","1" => "Professor","2" => "Administrador");
				echo $this->Form->input('role', array('div' => array('class' => 'form-group'), 'class' => 'form-control','options' => $combo)); ?>
		</div>
	</div>

	<?php echo $this->Form->button(__('Adicionar Usuário'), array('type' => 'submit', 'class' => 'btn btn-primary pull-left')); ?>
</div>
