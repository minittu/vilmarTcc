<div class="pacientes index">
	<div class="page-header">
		<h1><?php echo __('Pacientes'); ?></h1>
	</div>
	<table class="table" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('#'.'id'); ?></th>
				<th><?php echo $this->Paginator->sort('nome'); ?></th>
				<th><?php echo $this->Paginator->sort('sexo'); ?></th>
				<th><?php echo $this->Paginator->sort('logradouro'); ?></th>
				<th><?php echo $this->Paginator->sort('cidade_id'); ?></th>
				<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
				<th><?php echo $this->Paginator->sort('telefone'); ?></th>
				<th><?php echo $this->Paginator->sort('atividade'); ?></th>
				<th><?php echo $this->Paginator->sort('procedencia'); ?></th>
				<th><?php echo $this->Paginator->sort('rg'); ?></th>
				<th><?php echo $this->Paginator->sort('orgao_exp'); ?></th>
				<th><?php echo $this->Paginator->sort('responsavel'); ?></th>
				<th class="actions"><?php echo __('Acões'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pacientes as $paciente): ?>
				<tr>
					<td><?php echo $this->Html->link($paciente['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'edit', $paciente['Paciente']['id'])); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['nome']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['sexo']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['logradouro']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($paciente['Cidade']['nome'], array('controller' => 'cidades', 'action' => 'view', $paciente['Cidade']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($paciente['Estado']['nome'], array('controller' => 'estados', 'action' => 'view', $paciente['Estado']['id'])); ?>
					</td>
					<td><?php echo h($paciente['Paciente']['telefone']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['atividade']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['procedencia']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['rg']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['orgao_exp']); ?>&nbsp;</td>
					<td><?php echo h($paciente['Paciente']['responsavel']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__(''), array('action' => 'view', $paciente['Paciente']['id']), array('class' => 'glyphicon glyphicon-search')); ?>
						<?php echo $this->Html->link(__(''), array('action' => 'edit', $paciente['Paciente']['id']), array('class' => 'glyphicon glyphicon-pencil')); ?>
						<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $paciente['Paciente']['id']), array('class' => 'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<hr>
	<p>
		<?php

		echo $this->Paginator->counter(array(
			'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count}')
			));
			?>
		</p>
		<nav>
			<ul class="pagination">
				<?php
				echo $this->Paginator->prev(__('«'), array(), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a'));
				echo $this->Paginator->next(__('»'), array(), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul>
		</nav>
	</div>
	
