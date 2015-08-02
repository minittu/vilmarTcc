<div class="motoristas view">
<h2><?php echo __('Motorista'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($motorista['Motorista']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($motorista['Motorista']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($motorista['Motorista']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($motorista['Motorista']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cnh'); ?></dt>
		<dd>
			<?php echo h($motorista['Motorista']['cnh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($motorista['Motorista']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($motorista['Cidade']['nome'], array('controller' => 'cidades', 'action' => 'view', $motorista['Cidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cnpj'); ?></dt>
		<dd>
			<?php echo h($motorista['Motorista']['cnpj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo utf8_decode('Proprietário'); ?></dt>
		<dd>
			<?php echo ($motorista['Motorista']['fl_proprietario']) == 1 ? 'Sim' : 'Não'; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Motorista'), array('action' => 'edit', $motorista['Motorista']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Motorista'), array('action' => 'delete', $motorista['Motorista']['id']), array(), __('Deseja realmente deletar o id # %s?', $motorista['Motorista']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Motoristas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Motorista'), array('action' => 'add')); ?> </li>
		
	</ul>
</div>

