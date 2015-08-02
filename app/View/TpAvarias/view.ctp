<div class="tpAvarias view">
<h2><?php echo __('Tp Avaria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tpAvaria['TpAvaria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($tpAvaria['TpAvaria']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Tp Avaria'), array('action' => 'edit', $tpAvaria['TpAvaria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tp Avaria'), array('action' => 'delete', $tpAvaria['TpAvaria']['id']), array(), __('Deseja realmente deletar o id # %s?', $tpAvaria['TpAvaria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tp Avarias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Tp Avaria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Avarias'), array('controller' => 'avarias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Avaria'), array('controller' => 'avarias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Avarias'); ?></h3>
	<?php if (!empty($tpAvaria['Avaria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tp Avaria Id'); ?></th>
		<th><?php echo __('Caminhao Id'); ?></th>
		<th><?php echo __('Conhecimento Id'); ?></th>
		<th><?php echo __('Consumo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tpAvaria['Avaria'] as $avaria): ?>
		<tr>
			<td><?php echo $avaria['id']; ?></td>
			<td><?php echo $avaria['tp_avaria_id']; ?></td>
			<td><?php echo $avaria['caminhao_id']; ?></td>
			<td><?php echo $avaria['conhecimento_id']; ?></td>
			<td><?php echo $avaria['consumo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'avarias', 'action' => 'view', $avaria['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'avarias', 'action' => 'edit', $avaria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'avarias', 'action' => 'delete', $avaria['id']), array(), __('Deseja realmente deletar o id # %s?', $avaria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Novo Avaria'), array('controller' => 'avarias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
