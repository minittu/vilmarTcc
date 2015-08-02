<div class="caminhaos view">
<h2><?php echo __('Caminhao'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($caminhao['Caminhao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Placa'); ?></dt>
		<dd>
			<?php echo h($caminhao['Caminhao']['placa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chassi'); ?></dt>
		<dd>
			<?php echo h($caminhao['Caminhao']['chassi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cor'); ?></dt>
		<dd>
			<?php echo h($caminhao['Caminhao']['cor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumo'); ?></dt>
		<dd>
			<?php echo h($caminhao['Caminhao']['consumo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano'); ?></dt>
		<dd>
			<?php echo h($caminhao['Caminhao']['ano']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca'); ?></dt>
		<dd>
			<?php echo $this->Html->link($caminhao['Marca']['descricao'], array('controller' => 'marcas', 'action' => 'view', $caminhao['Marca']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($caminhao['Modelo']['descricao'], array('controller' => 'modelos', 'action' => 'view', $caminhao['Modelo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Caminhao'), array('action' => 'edit', $caminhao['Caminhao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Caminhao'), array('action' => 'delete', $caminhao['Caminhao']['id']), array(), __('Deseja realmente deletar o id # %s?', $caminhao['Caminhao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Caminhaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Caminhao'), array('action' => 'add')); ?> </li>
		
	</ul>
</div>
