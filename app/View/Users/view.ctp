<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($user['User']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($user['User']['matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Historicos'), array('controller' => 'historicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historico'), array('controller' => 'historicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Historicos'); ?></h3>
	<?php if (!empty($user['Historico'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Rx Esf Od'); ?></th>
		<th><?php echo __('Rx Es Oe'); ?></th>
		<th><?php echo __('Rx Cil Od'); ?></th>
		<th><?php echo __('Rx Cil Oe'); ?></th>
		<th><?php echo __('Rx Eixo Od'); ?></th>
		<th><?php echo __('Rx Eixo Oe'); ?></th>
		<th><?php echo __('Rx Av Od'); ?></th>
		<th><?php echo __('Rx Av Oe'); ?></th>
		<th><?php echo __('Lens Tipo Lente'); ?></th>
		<th><?php echo __('Lens Cor'); ?></th>
		<th><?php echo __('Lens Filtro'); ?></th>
		<th><?php echo __('Lens Obs'); ?></th>
		<th><?php echo __('Acuivisual Vl Sc Od'); ?></th>
		<th><?php echo __('Acuivisual Vl Sc Oe'); ?></th>
		<th><?php echo __('Acuivisual Ph Od'); ?></th>
		<th><?php echo __('Acuivisual Ph Oe'); ?></th>
		<th><?php echo __('Acuivisual Vpsc Od'); ?></th>
		<th><?php echo __('Acuivisual Vpsc Oe'); ?></th>
		<th><?php echo __('Acuivisual Vlcc Od'); ?></th>
		<th><?php echo __('Acuivisual Vlcc Oe'); ?></th>
		<th><?php echo __('Data Criacao'); ?></th>
		<th><?php echo __('Acuivisual Vpcc Od'); ?></th>
		<th><?php echo __('Acuivisual Vpcc Oe'); ?></th>
		<th><?php echo __('Acuivisual Optotipo'); ?></th>
		<th><?php echo __('Reflpup Fotomotor Od'); ?></th>
		<th><?php echo __('Reflpup Fotomotor Oe'); ?></th>
		<th><?php echo __('Reflpup Consensual Od'); ?></th>
		<th><?php echo __('Reflpup Consensual Oe'); ?></th>
		<th><?php echo __('Reflpup Acomodativo Od'); ?></th>
		<th><?php echo __('Reflpup Acomodativo Oe'); ?></th>
		<th><?php echo __('Kappa Od'); ?></th>
		<th><?php echo __('Kappa Oe'); ?></th>
		<th><?php echo __('Hirsch'); ?></th>
		<th><?php echo __('Ducc Od'); ?></th>
		<th><?php echo __('Ducc Oe'); ?></th>
		<th><?php echo __('Versoes Od'); ?></th>
		<th><?php echo __('Versoes Oe'); ?></th>
		<th><?php echo __('Versoes Obs'); ?></th>
		<th><?php echo __('Ppc Objeto Real'); ?></th>
		<th><?php echo __('Ppc Luz'); ?></th>
		<th><?php echo __('Ppc Filtro'); ?></th>
		<th><?php echo __('Coverteste 6m Sc'); ?></th>
		<th><?php echo __('Coverteste 6m Cc'); ?></th>
		<th><?php echo __('Coverteste 40m Sc'); ?></th>
		<th><?php echo __('Coverteste 40m Cc'); ?></th>
		<th><?php echo __('Coverteste 20m Sc'); ?></th>
		<th><?php echo __('Coverteste 20m Cc'); ?></th>
		<th><?php echo __('Rfp Vl1'); ?></th>
		<th><?php echo __('Rfp Vl2'); ?></th>
		<th><?php echo __('Rfp Vp1'); ?></th>
		<th><?php echo __('Rfp Vp2'); ?></th>
		<th><?php echo __('Rfn Vl1'); ?></th>
		<th><?php echo __('Rfn Vl2'); ?></th>
		<th><?php echo __('Rfn Vp1'); ?></th>
		<th><?php echo __('Rfn Vp2'); ?></th>
		<th><?php echo __('Aa Od'); ?></th>
		<th><?php echo __('Aa Oe'); ?></th>
		<th><?php echo __('Aa Distancia'); ?></th>
		<th><?php echo __('Flexmon Od1'); ?></th>
		<th><?php echo __('Flexmon Od2'); ?></th>
		<th><?php echo __('Flexmon Oe1'); ?></th>
		<th><?php echo __('Flexmon Oe2'); ?></th>
		<th><?php echo __('Facil Od'); ?></th>
		<th><?php echo __('Facil Oe'); ?></th>
		<th><?php echo __('Aca Valor'); ?></th>
		<th><?php echo __('Aca Metodo'); ?></th>
		<th><?php echo __('Oftalmo Brucker Od'); ?></th>
		<th><?php echo __('Oftalmo Brucker Oe'); ?></th>
		<th><?php echo __('Oftalmo Lente Oe'); ?></th>
		<th><?php echo __('Oftalmo Lente Od'); ?></th>
		<th><?php echo __('Oftalmo Papila Od'); ?></th>
		<th><?php echo __('Oftalmo Papila Oe'); ?></th>
		<th><?php echo __('Oftalmo Escavacao Oe'); ?></th>
		<th><?php echo __('Oftalmo Escavacao Od'); ?></th>
		<th><?php echo __('Oftalmo Relacaoav Od'); ?></th>
		<th><?php echo __('Oftalmo Relacaoav Oe'); ?></th>
		<th><?php echo __('Oftalmo Macula Od'); ?></th>
		<th><?php echo __('Oftalmo Macula Oe'); ?></th>
		<th><?php echo __('Oftalmo Fixacao Od'); ?></th>
		<th><?php echo __('Oftalmo Fixacao Oe'); ?></th>
		<th><?php echo __('Oftalmo Cor Od'); ?></th>
		<th><?php echo __('Oftalmo Cor Oe'); ?></th>
		<th><?php echo __('Oftalmo Amsler Od'); ?></th>
		<th><?php echo __('Oftalmo Amsler Oe'); ?></th>
		<th><?php echo __('Estereop Od'); ?></th>
		<th><?php echo __('Estereop Oe'); ?></th>
		<th><?php echo __('Estereop Teste'); ?></th>
		<th><?php echo __('Vcromat Od'); ?></th>
		<th><?php echo __('Vcromat Oe'); ?></th>
		<th><?php echo __('Vcromat Teste'); ?></th>
		<th><?php echo __('Biomicro Obs'); ?></th>
		<th><?php echo __('Biomicro Sobrancelhas'); ?></th>
		<th><?php echo __('Biomicro Cilios'); ?></th>
		<th><?php echo __('Biomicro Palpebras'); ?></th>
		<th><?php echo __('Biomicro Conjuntivas'); ?></th>
		<th><?php echo __('Biomicro Corneas'); ?></th>
		<th><?php echo __('Biomicro Iris'); ?></th>
		<th><?php echo __('Biomicro Cristalinos'); ?></th>
		<th><?php echo __('Ceratometria Aluno Od'); ?></th>
		<th><?php echo __('Ceratometria Aluno Oe'); ?></th>
		<th><?php echo __('Ceratometria Aluno Obs'); ?></th>
		<th><?php echo __('Ceratometria Professor Od'); ?></th>
		<th><?php echo __('Ceratometria Professor Oe'); ?></th>
		<th><?php echo __('Ceratometria Professor Obs'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Estatica Esf Od'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Estatica Esf Oe'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Estatica Cil Od'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Estatica Cil Oe'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Estatica Eixo Od'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Estatica Eixo Oe'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Estatica Avp Od'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Estatica Avp Oe'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Dinamica Esf Od'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Dinamica Esf Oe'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Dinamica Cil Od'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Dinamica Cil Oe'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Dinamica Eixo Od'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Dinamica Eixo Oe'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Dinamica Avp Od'); ?></th>
		<th><?php echo __('Retinoscopia Aluno Dinamica Avp Oe'); ?></th>
		<th><?php echo __('Retinoscopia Prof Estatica Esf Od'); ?></th>
		<th><?php echo __('Retinoscopia Prof Estatica Esf Oe'); ?></th>
		<th><?php echo __('Retinoscopia Prof Estatica Cil Od'); ?></th>
		<th><?php echo __('Retinoscopia Prof Estatica Cil Oe'); ?></th>
		<th><?php echo __('Retinoscopia Prof Estatica Eixo Od'); ?></th>
		<th><?php echo __('Retinoscopia Prof Estatica Eixo Oe'); ?></th>
		<th><?php echo __('Retinoscopia Prof Estatica Avp Od'); ?></th>
		<th><?php echo __('Retinoscopia Prof Estatica Avp Oe'); ?></th>
		<th><?php echo __('Retinoscopia Prof Dinamica Esf Od'); ?></th>
		<th><?php echo __('Retinoscopia Prof Dinamica Esf Oe'); ?></th>
		<th><?php echo __('Retinoscopia Prof Dinamica Cil Od'); ?></th>
		<th><?php echo __('Retinoscopia Prof Dinamica Cil Oe'); ?></th>
		<th><?php echo __('Retinoscopia Prof Dinamica Eixo Od'); ?></th>
		<th><?php echo __('Retinoscopia Prof Dinamica Eixo Oe'); ?></th>
		<th><?php echo __('Retinoscopia Prof Dinamica Avp Od'); ?></th>
		<th><?php echo __('Retinoscopia Prof Dinamica Avp Oe'); ?></th>
		<th><?php echo __('Subjetivo Aluno Esf Od'); ?></th>
		<th><?php echo __('Subjetivo Aluno Esf Oe'); ?></th>
		<th><?php echo __('Subjetivo Aluno Cil Od'); ?></th>
		<th><?php echo __('Subjetivo Aluno Cil Oe'); ?></th>
		<th><?php echo __('Subjetivo Aluno Avl Od'); ?></th>
		<th><?php echo __('Subjetivo Aluno Avl Oe'); ?></th>
		<th><?php echo __('Subjetivo Aluno Avp Od'); ?></th>
		<th><?php echo __('Subjetivo Aluno Avp Oe'); ?></th>
		<th><?php echo __('Subjetivo Prof Esf Od'); ?></th>
		<th><?php echo __('Subjetivo Prof Esf Oe'); ?></th>
		<th><?php echo __('Subjetivo Prof Cil Od'); ?></th>
		<th><?php echo __('Subjetivo Prof Cil Oe'); ?></th>
		<th><?php echo __('Subjetivo Prof Avl Od'); ?></th>
		<th><?php echo __('Subjetivo Prof Avl Oe'); ?></th>
		<th><?php echo __('Subjetivo Prof Avp Od'); ?></th>
		<th><?php echo __('Subjetivo Prof Avp Oe'); ?></th>
		<th><?php echo __('Subjetivo Aluno Esf Add'); ?></th>
		<th><?php echo __('Subjetivo Prof Esf Add'); ?></th>
		<th><?php echo __('Afinamento Aluno Esf Od'); ?></th>
		<th><?php echo __('Afinamento Aluno Esf Oe'); ?></th>
		<th><?php echo __('Afinamento Aluno Esf Add'); ?></th>
		<th><?php echo __('Afinamento Aluno Cil Od'); ?></th>
		<th><?php echo __('Afinamento Aluno Cil Oe'); ?></th>
		<th><?php echo __('Afinamento Aluno Avl Od'); ?></th>
		<th><?php echo __('Afinamento Aluno Avl Oe'); ?></th>
		<th><?php echo __('Afinamento Aluno Avp Od'); ?></th>
		<th><?php echo __('Afinamento Aluno Avp Oe'); ?></th>
		<th><?php echo __('Afinamento Prof Esf Od'); ?></th>
		<th><?php echo __('Afinamento Prof Esf Oe'); ?></th>
		<th><?php echo __('Afinamento Prof Esf Add'); ?></th>
		<th><?php echo __('Afinamento Prof Cil Od'); ?></th>
		<th><?php echo __('Afinamento Prof Cil Oe'); ?></th>
		<th><?php echo __('Afinamento Prof Avl Od'); ?></th>
		<th><?php echo __('Afinamento Prof Avl Oe'); ?></th>
		<th><?php echo __('Afinamento Prof Avp Od'); ?></th>
		<th><?php echo __('Afinamento Prof Avp Oe'); ?></th>
		<th><?php echo __('Ambulatorial Aluno Esf Od'); ?></th>
		<th><?php echo __('Ambulatorial Aluno Esf Oe'); ?></th>
		<th><?php echo __('Ambulatorial Aluno Esf Add'); ?></th>
		<th><?php echo __('Ambulatorial Aluno Cil Od'); ?></th>
		<th><?php echo __('Ambulatorial Aluno Cil Oe'); ?></th>
		<th><?php echo __('Ambulatorial Aluno Avl Od'); ?></th>
		<th><?php echo __('Ambulatorial Aluno Avl Oe'); ?></th>
		<th><?php echo __('Ambulatorial Aluno Avp Od'); ?></th>
		<th><?php echo __('Ambulatorial Aluno Avp Oe'); ?></th>
		<th><?php echo __('Ambulatorial Prof Esf Od'); ?></th>
		<th><?php echo __('Ambulatorial Prof Esf Oe'); ?></th>
		<th><?php echo __('Ambulatorial Prof Esf Add'); ?></th>
		<th><?php echo __('Ambulatorial Prof Cil Od'); ?></th>
		<th><?php echo __('Ambulatorial Prof Cil Oe'); ?></th>
		<th><?php echo __('Ambulatorial Prof Avl Od'); ?></th>
		<th><?php echo __('Ambulatorial Prof Avl Oe'); ?></th>
		<th><?php echo __('Ambulatorial Prof Avp Od'); ?></th>
		<th><?php echo __('Ambulatorial Prof Avp Oe'); ?></th>
		<th><?php echo __('Rx Final Esf Od'); ?></th>
		<th><?php echo __('Rx Final Esf Oe'); ?></th>
		<th><?php echo __('Rx Final Esf Add'); ?></th>
		<th><?php echo __('Rx Final Cil Od'); ?></th>
		<th><?php echo __('Rx Final Cil Oe'); ?></th>
		<th><?php echo __('Rx Final Avl Od'); ?></th>
		<th><?php echo __('Rx Final Avl Oe'); ?></th>
		<th><?php echo __('Rx Final Avp Od'); ?></th>
		<th><?php echo __('Rx Final Avp Oe'); ?></th>
		<th><?php echo __('Rx Final Eixo Oe'); ?></th>
		<th><?php echo __('Rx Final Eixo Od'); ?></th>
		<th><?php echo __('Ambulatorial Aluno Eixo Oe'); ?></th>
		<th><?php echo __('Ambulatorial Aluno Eixo Od'); ?></th>
		<th><?php echo __('Ambulatorial Prof Eixo Oe'); ?></th>
		<th><?php echo __('Ambulatorial Prof Eixo Od'); ?></th>
		<th><?php echo __('Tipo Lente'); ?></th>
		<th><?php echo __('Filtro'); ?></th>
		<th><?php echo __('Cor'); ?></th>
		<th><?php echo __('Obs'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Historico'] as $historico): ?>
		<tr>
			<td><?php echo $historico['id']; ?></td>
			<td><?php echo $historico['paciente_id']; ?></td>
			<td><?php echo $historico['user_id']; ?></td>
			<td><?php echo $historico['rx_esf_od']; ?></td>
			<td><?php echo $historico['rx_es_oe']; ?></td>
			<td><?php echo $historico['rx_cil_od']; ?></td>
			<td><?php echo $historico['rx_cil_oe']; ?></td>
			<td><?php echo $historico['rx_eixo_od']; ?></td>
			<td><?php echo $historico['rx_eixo_oe']; ?></td>
			<td><?php echo $historico['rx_av_od']; ?></td>
			<td><?php echo $historico['rx_av_oe']; ?></td>
			<td><?php echo $historico['lens_tipo_lente']; ?></td>
			<td><?php echo $historico['lens_cor']; ?></td>
			<td><?php echo $historico['lens_filtro']; ?></td>
			<td><?php echo $historico['lens_obs']; ?></td>
			<td><?php echo $historico['acuivisual_vl_sc_od']; ?></td>
			<td><?php echo $historico['acuivisual_vl_sc_oe']; ?></td>
			<td><?php echo $historico['acuivisual_ph_od']; ?></td>
			<td><?php echo $historico['acuivisual_ph_oe']; ?></td>
			<td><?php echo $historico['acuivisual_vpsc_od']; ?></td>
			<td><?php echo $historico['acuivisual_vpsc_oe']; ?></td>
			<td><?php echo $historico['acuivisual_vlcc_od']; ?></td>
			<td><?php echo $historico['acuivisual_vlcc_oe']; ?></td>
			<td><?php echo $historico['data_criacao']; ?></td>
			<td><?php echo $historico['acuivisual_vpcc_od']; ?></td>
			<td><?php echo $historico['acuivisual_vpcc_oe']; ?></td>
			<td><?php echo $historico['acuivisual_optotipo']; ?></td>
			<td><?php echo $historico['reflpup_fotomotor_od']; ?></td>
			<td><?php echo $historico['reflpup_fotomotor_oe']; ?></td>
			<td><?php echo $historico['reflpup_consensual_od']; ?></td>
			<td><?php echo $historico['reflpup_consensual_oe']; ?></td>
			<td><?php echo $historico['reflpup_acomodativo_od']; ?></td>
			<td><?php echo $historico['reflpup_acomodativo_oe']; ?></td>
			<td><?php echo $historico['kappa_od']; ?></td>
			<td><?php echo $historico['kappa_oe']; ?></td>
			<td><?php echo $historico['hirsch']; ?></td>
			<td><?php echo $historico['ducc_od']; ?></td>
			<td><?php echo $historico['ducc_oe']; ?></td>
			<td><?php echo $historico['versoes_od']; ?></td>
			<td><?php echo $historico['versoes_oe']; ?></td>
			<td><?php echo $historico['versoes_obs']; ?></td>
			<td><?php echo $historico['ppc_objeto_real']; ?></td>
			<td><?php echo $historico['ppc_luz']; ?></td>
			<td><?php echo $historico['ppc_filtro']; ?></td>
			<td><?php echo $historico['coverteste_6m_sc']; ?></td>
			<td><?php echo $historico['coverteste_6m_cc']; ?></td>
			<td><?php echo $historico['coverteste_40m_sc']; ?></td>
			<td><?php echo $historico['coverteste_40m_cc']; ?></td>
			<td><?php echo $historico['coverteste_20m_sc']; ?></td>
			<td><?php echo $historico['coverteste_20m_cc']; ?></td>
			<td><?php echo $historico['rfp_vl1']; ?></td>
			<td><?php echo $historico['rfp_vl2']; ?></td>
			<td><?php echo $historico['rfp_vp1']; ?></td>
			<td><?php echo $historico['rfp_vp2']; ?></td>
			<td><?php echo $historico['rfn_vl1']; ?></td>
			<td><?php echo $historico['rfn_vl2']; ?></td>
			<td><?php echo $historico['rfn_vp1']; ?></td>
			<td><?php echo $historico['rfn_vp2']; ?></td>
			<td><?php echo $historico['aa_od']; ?></td>
			<td><?php echo $historico['aa_oe']; ?></td>
			<td><?php echo $historico['aa_distancia']; ?></td>
			<td><?php echo $historico['flexmon_od1']; ?></td>
			<td><?php echo $historico['flexmon_od2']; ?></td>
			<td><?php echo $historico['flexmon_oe1']; ?></td>
			<td><?php echo $historico['flexmon_oe2']; ?></td>
			<td><?php echo $historico['facil_od']; ?></td>
			<td><?php echo $historico['facil_oe']; ?></td>
			<td><?php echo $historico['aca_valor']; ?></td>
			<td><?php echo $historico['aca_metodo']; ?></td>
			<td><?php echo $historico['oftalmo_brucker_od']; ?></td>
			<td><?php echo $historico['oftalmo_brucker_oe']; ?></td>
			<td><?php echo $historico['oftalmo_lente_oe']; ?></td>
			<td><?php echo $historico['oftalmo_lente_od']; ?></td>
			<td><?php echo $historico['oftalmo_papila_od']; ?></td>
			<td><?php echo $historico['oftalmo_papila_oe']; ?></td>
			<td><?php echo $historico['oftalmo_escavacao_oe']; ?></td>
			<td><?php echo $historico['oftalmo_escavacao_od']; ?></td>
			<td><?php echo $historico['oftalmo_relacaoav_od']; ?></td>
			<td><?php echo $historico['oftalmo_relacaoav_oe']; ?></td>
			<td><?php echo $historico['oftalmo_macula_od']; ?></td>
			<td><?php echo $historico['oftalmo_macula_oe']; ?></td>
			<td><?php echo $historico['oftalmo_fixacao_od']; ?></td>
			<td><?php echo $historico['oftalmo_fixacao_oe']; ?></td>
			<td><?php echo $historico['oftalmo_cor_od']; ?></td>
			<td><?php echo $historico['oftalmo_cor_oe']; ?></td>
			<td><?php echo $historico['oftalmo_amsler_od']; ?></td>
			<td><?php echo $historico['oftalmo_amsler_oe']; ?></td>
			<td><?php echo $historico['estereop_od']; ?></td>
			<td><?php echo $historico['estereop_oe']; ?></td>
			<td><?php echo $historico['estereop_teste']; ?></td>
			<td><?php echo $historico['vcromat_od']; ?></td>
			<td><?php echo $historico['vcromat_oe']; ?></td>
			<td><?php echo $historico['vcromat_teste']; ?></td>
			<td><?php echo $historico['biomicro_obs']; ?></td>
			<td><?php echo $historico['biomicro_sobrancelhas']; ?></td>
			<td><?php echo $historico['biomicro_cilios']; ?></td>
			<td><?php echo $historico['biomicro_palpebras']; ?></td>
			<td><?php echo $historico['biomicro_conjuntivas']; ?></td>
			<td><?php echo $historico['biomicro_corneas']; ?></td>
			<td><?php echo $historico['biomicro_iris']; ?></td>
			<td><?php echo $historico['biomicro_cristalinos']; ?></td>
			<td><?php echo $historico['ceratometria_aluno_od']; ?></td>
			<td><?php echo $historico['ceratometria_aluno_oe']; ?></td>
			<td><?php echo $historico['ceratometria_aluno_obs']; ?></td>
			<td><?php echo $historico['ceratometria_professor_od']; ?></td>
			<td><?php echo $historico['ceratometria_professor_oe']; ?></td>
			<td><?php echo $historico['ceratometria_professor_obs']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_estatica_esf_od']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_estatica_esf_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_estatica_cil_od']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_estatica_cil_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_estatica_eixo_od']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_estatica_eixo_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_estatica_avp_od']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_estatica_avp_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_dinamica_esf_od']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_dinamica_esf_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_dinamica_cil_od']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_dinamica_cil_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_dinamica_eixo_od']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_dinamica_eixo_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_dinamica_avp_od']; ?></td>
			<td><?php echo $historico['retinoscopia_aluno_dinamica_avp_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_estatica_esf_od']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_estatica_esf_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_estatica_cil_od']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_estatica_cil_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_estatica_eixo_od']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_estatica_eixo_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_estatica_avp_od']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_estatica_avp_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_dinamica_esf_od']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_dinamica_esf_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_dinamica_cil_od']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_dinamica_cil_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_dinamica_eixo_od']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_dinamica_eixo_oe']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_dinamica_avp_od']; ?></td>
			<td><?php echo $historico['retinoscopia_prof_dinamica_avp_oe']; ?></td>
			<td><?php echo $historico['subjetivo_aluno_esf_od']; ?></td>
			<td><?php echo $historico['subjetivo_aluno_esf_oe']; ?></td>
			<td><?php echo $historico['subjetivo_aluno_cil_od']; ?></td>
			<td><?php echo $historico['subjetivo_aluno_cil_oe']; ?></td>
			<td><?php echo $historico['subjetivo_aluno_avl_od']; ?></td>
			<td><?php echo $historico['subjetivo_aluno_avl_oe']; ?></td>
			<td><?php echo $historico['subjetivo_aluno_avp_od']; ?></td>
			<td><?php echo $historico['subjetivo_aluno_avp_oe']; ?></td>
			<td><?php echo $historico['subjetivo_prof_esf_od']; ?></td>
			<td><?php echo $historico['subjetivo_prof_esf_oe']; ?></td>
			<td><?php echo $historico['subjetivo_prof_cil_od']; ?></td>
			<td><?php echo $historico['subjetivo_prof_cil_oe']; ?></td>
			<td><?php echo $historico['subjetivo_prof_avl_od']; ?></td>
			<td><?php echo $historico['subjetivo_prof_avl_oe']; ?></td>
			<td><?php echo $historico['subjetivo_prof_avp_od']; ?></td>
			<td><?php echo $historico['subjetivo_prof_avp_oe']; ?></td>
			<td><?php echo $historico['subjetivo_aluno_esf_add']; ?></td>
			<td><?php echo $historico['subjetivo_prof_esf_add']; ?></td>
			<td><?php echo $historico['afinamento_aluno_esf_od']; ?></td>
			<td><?php echo $historico['afinamento_aluno_esf_oe']; ?></td>
			<td><?php echo $historico['afinamento_aluno_esf_add']; ?></td>
			<td><?php echo $historico['afinamento_aluno_cil_od']; ?></td>
			<td><?php echo $historico['afinamento_aluno_cil_oe']; ?></td>
			<td><?php echo $historico['afinamento_aluno_avl_od']; ?></td>
			<td><?php echo $historico['afinamento_aluno_avl_oe']; ?></td>
			<td><?php echo $historico['afinamento_aluno_avp_od']; ?></td>
			<td><?php echo $historico['afinamento_aluno_avp_oe']; ?></td>
			<td><?php echo $historico['afinamento_prof_esf_od']; ?></td>
			<td><?php echo $historico['afinamento_prof_esf_oe']; ?></td>
			<td><?php echo $historico['afinamento_prof_esf_add']; ?></td>
			<td><?php echo $historico['afinamento_prof_cil_od']; ?></td>
			<td><?php echo $historico['afinamento_prof_cil_oe']; ?></td>
			<td><?php echo $historico['afinamento_prof_avl_od']; ?></td>
			<td><?php echo $historico['afinamento_prof_avl_oe']; ?></td>
			<td><?php echo $historico['afinamento_prof_avp_od']; ?></td>
			<td><?php echo $historico['afinamento_prof_avp_oe']; ?></td>
			<td><?php echo $historico['ambulatorial_aluno_esf_od']; ?></td>
			<td><?php echo $historico['ambulatorial_aluno_esf_oe']; ?></td>
			<td><?php echo $historico['ambulatorial_aluno_esf_add']; ?></td>
			<td><?php echo $historico['ambulatorial_aluno_cil_od']; ?></td>
			<td><?php echo $historico['ambulatorial_aluno_cil_oe']; ?></td>
			<td><?php echo $historico['ambulatorial_aluno_avl_od']; ?></td>
			<td><?php echo $historico['ambulatorial_aluno_avl_oe']; ?></td>
			<td><?php echo $historico['ambulatorial_aluno_avp_od']; ?></td>
			<td><?php echo $historico['ambulatorial_aluno_avp_oe']; ?></td>
			<td><?php echo $historico['ambulatorial_prof_esf_od']; ?></td>
			<td><?php echo $historico['ambulatorial_prof_esf_oe']; ?></td>
			<td><?php echo $historico['ambulatorial_prof_esf_add']; ?></td>
			<td><?php echo $historico['ambulatorial_prof_cil_od']; ?></td>
			<td><?php echo $historico['ambulatorial_prof_cil_oe']; ?></td>
			<td><?php echo $historico['ambulatorial_prof_avl_od']; ?></td>
			<td><?php echo $historico['ambulatorial_prof_avl_oe']; ?></td>
			<td><?php echo $historico['ambulatorial_prof_avp_od']; ?></td>
			<td><?php echo $historico['ambulatorial_prof_avp_oe']; ?></td>
			<td><?php echo $historico['rx_final_esf_od']; ?></td>
			<td><?php echo $historico['rx_final_esf_oe']; ?></td>
			<td><?php echo $historico['rx_final_esf_add']; ?></td>
			<td><?php echo $historico['rx_final_cil_od']; ?></td>
			<td><?php echo $historico['rx_final_cil_oe']; ?></td>
			<td><?php echo $historico['rx_final_avl_od']; ?></td>
			<td><?php echo $historico['rx_final_avl_oe']; ?></td>
			<td><?php echo $historico['rx_final_avp_od']; ?></td>
			<td><?php echo $historico['rx_final_avp_oe']; ?></td>
			<td><?php echo $historico['rx_final_eixo_oe']; ?></td>
			<td><?php echo $historico['rx_final_eixo_od']; ?></td>
			<td><?php echo $historico['ambulatorial_aluno_eixo_oe']; ?></td>
			<td><?php echo $historico['ambulatorial_aluno_eixo_od']; ?></td>
			<td><?php echo $historico['ambulatorial_prof_eixo_oe']; ?></td>
			<td><?php echo $historico['ambulatorial_prof_eixo_od']; ?></td>
			<td><?php echo $historico['tipo_lente']; ?></td>
			<td><?php echo $historico['filtro']; ?></td>
			<td><?php echo $historico['cor']; ?></td>
			<td><?php echo $historico['obs']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'historicos', 'action' => 'view', $historico['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'historicos', 'action' => 'edit', $historico['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'historicos', 'action' => 'delete', $historico['id']), array(), __('Are you sure you want to delete # %s?', $historico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Historico'), array('controller' => 'historicos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
