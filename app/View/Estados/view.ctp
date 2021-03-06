<div class="estados view">
<h2><?php echo __('Estado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uf'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['uf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pais'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estado['Pais']['id'], array('controller' => 'pais', 'action' => 'view', $estado['Pais']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado'), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado'), array('action' => 'delete', $estado['Estado']['id']), array(), __('Are you sure you want to delete # %s?', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pais'), array('controller' => 'pais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pais'), array('controller' => 'pais', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pacientes'); ?></h3>
	<?php if (!empty($estado['Paciente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Logradouro'); ?></th>
		<th><?php echo __('Cidade Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Atividade'); ?></th>
		<th><?php echo __('Procedencia'); ?></th>
		<th><?php echo __('Rg'); ?></th>
		<th><?php echo __('Orgao Exp'); ?></th>
		<th><?php echo __('Responsavel'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Paciente'] as $paciente): ?>
		<tr>
			<td><?php echo $paciente['id']; ?></td>
			<td><?php echo $paciente['nome']; ?></td>
			<td><?php echo $paciente['sexo']; ?></td>
			<td><?php echo $paciente['logradouro']; ?></td>
			<td><?php echo $paciente['cidade_id']; ?></td>
			<td><?php echo $paciente['estado_id']; ?></td>
			<td><?php echo $paciente['telefone']; ?></td>
			<td><?php echo $paciente['atividade']; ?></td>
			<td><?php echo $paciente['procedencia']; ?></td>
			<td><?php echo $paciente['rg']; ?></td>
			<td><?php echo $paciente['orgao_exp']; ?></td>
			<td><?php echo $paciente['responsavel']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pacientes', 'action' => 'view', $paciente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pacientes', 'action' => 'edit', $paciente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pacientes', 'action' => 'delete', $paciente['id']), array(), __('Are you sure you want to delete # %s?', $paciente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
