<div class="historicos index">
	<div class="page-header">
		<h1><?php echo __('Historicos'); ?></h1>
	</div>
	<table class="table" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('paciente_id'); ?></th>
				<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_esf_od'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_es_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_cil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_cil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_eixo_od'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_eixo_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_av_od'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_av_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('lens_tipo_lente'); ?></th>
				<th><?php echo $this->Paginator->sort('lens_cor'); ?></th>
				<th><?php echo $this->Paginator->sort('lens_filtro'); ?></th>
				<th><?php echo $this->Paginator->sort('lens_obs'); ?></th>
				<th><?php echo $this->Paginator->sort('acuivisual_vl_sc_od'); ?></th>
				<th><?php echo $this->Paginator->sort('acuivisual_vl_sc_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('acuivisual_ph_od'); ?></th>
				<th><?php echo $this->Paginator->sort('acuivisual_ph_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('acuivisual_vpsc_od'); ?></th>
				<th><?php echo $this->Paginator->sort('acuivisual_vpsc_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('acuivisual_vlcc_od'); ?></th>
				<th><?php echo $this->Paginator->sort('acuivisual_vlcc_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('data_criacao'); ?></th>
				<th><?php echo $this->Paginator->sort('acuivisual_vpcc_od'); ?></th>
				<th><?php echo $this->Paginator->sort('acuivisual_vpcc_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('acuivisual_optotipo'); ?></th>
				<th><?php echo $this->Paginator->sort('reflpup_fotomotor_od'); ?></th>
				<th><?php echo $this->Paginator->sort('reflpup_fotomotor_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('reflpup_consensual_od'); ?></th>
				<th><?php echo $this->Paginator->sort('reflpup_consensual_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('reflpup_acomodativo_od'); ?></th>
				<th><?php echo $this->Paginator->sort('reflpup_acomodativo_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('kappa_od'); ?></th>
				<th><?php echo $this->Paginator->sort('kappa_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('hirsch'); ?></th>
				<th><?php echo $this->Paginator->sort('ducc_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ducc_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('versoes_od'); ?></th>
				<th><?php echo $this->Paginator->sort('versoes_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('versoes_obs'); ?></th>
				<th><?php echo $this->Paginator->sort('ppc_objeto_real'); ?></th>
				<th><?php echo $this->Paginator->sort('ppc_luz'); ?></th>
				<th><?php echo $this->Paginator->sort('ppc_filtro'); ?></th>
				<th><?php echo $this->Paginator->sort('coverteste_6m_sc'); ?></th>
				<th><?php echo $this->Paginator->sort('coverteste_6m_cc'); ?></th>
				<th><?php echo $this->Paginator->sort('coverteste_40m_sc'); ?></th>
				<th><?php echo $this->Paginator->sort('coverteste_40m_cc'); ?></th>
				<th><?php echo $this->Paginator->sort('coverteste_20m_sc'); ?></th>
				<th><?php echo $this->Paginator->sort('coverteste_20m_cc'); ?></th>
				<th><?php echo $this->Paginator->sort('rfp_vl1'); ?></th>
				<th><?php echo $this->Paginator->sort('rfp_vl2'); ?></th>
				<th><?php echo $this->Paginator->sort('rfp_vp1'); ?></th>
				<th><?php echo $this->Paginator->sort('rfp_vp2'); ?></th>
				<th><?php echo $this->Paginator->sort('rfn_vl1'); ?></th>
				<th><?php echo $this->Paginator->sort('rfn_vl2'); ?></th>
				<th><?php echo $this->Paginator->sort('rfn_vp1'); ?></th>
				<th><?php echo $this->Paginator->sort('rfn_vp2'); ?></th>
				<th><?php echo $this->Paginator->sort('aa_od'); ?></th>
				<th><?php echo $this->Paginator->sort('aa_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('aa_distancia'); ?></th>
				<th><?php echo $this->Paginator->sort('flexmon_od1'); ?></th>
				<th><?php echo $this->Paginator->sort('flexmon_od2'); ?></th>
				<th><?php echo $this->Paginator->sort('flexmon_oe1'); ?></th>
				<th><?php echo $this->Paginator->sort('flexmon_oe2'); ?></th>
				<th><?php echo $this->Paginator->sort('facil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('facil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('aca_valor'); ?></th>
				<th><?php echo $this->Paginator->sort('aca_metodo'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_brucker_od'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_brucker_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_lente_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_lente_od'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_papila_od'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_papila_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_escavacao_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_escavacao_od'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_relacaoav_od'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_relacaoav_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_macula_od'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_macula_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_fixacao_od'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_fixacao_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_cor_od'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_cor_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_amsler_od'); ?></th>
				<th><?php echo $this->Paginator->sort('oftalmo_amsler_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('estereop_od'); ?></th>
				<th><?php echo $this->Paginator->sort('estereop_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('estereop_teste'); ?></th>
				<th><?php echo $this->Paginator->sort('vcromat_od'); ?></th>
				<th><?php echo $this->Paginator->sort('vcromat_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('vcromat_teste'); ?></th>
				<th><?php echo $this->Paginator->sort('biomicro_obs'); ?></th>
				<th><?php echo $this->Paginator->sort('biomicro_sobrancelhas'); ?></th>
				<th><?php echo $this->Paginator->sort('biomicro_cilios'); ?></th>
				<th><?php echo $this->Paginator->sort('biomicro_palpebras'); ?></th>
				<th><?php echo $this->Paginator->sort('biomicro_conjuntivas'); ?></th>
				<th><?php echo $this->Paginator->sort('biomicro_corneas'); ?></th>
				<th><?php echo $this->Paginator->sort('biomicro_iris'); ?></th>
				<th><?php echo $this->Paginator->sort('biomicro_cristalinos'); ?></th>
				<th><?php echo $this->Paginator->sort('ceratometria_aluno_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ceratometria_aluno_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('ceratometria_aluno_obs'); ?></th>
				<th><?php echo $this->Paginator->sort('ceratometria_professor_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ceratometria_professor_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('ceratometria_professor_obs'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_estatica_esf_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_estatica_esf_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_estatica_cil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_estatica_cil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_estatica_eixo_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_estatica_eixo_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_estatica_avp_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_estatica_avp_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_dinamica_esf_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_dinamica_esf_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_dinamica_cil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_dinamica_cil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_dinamica_eixo_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_dinamica_eixo_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_dinamica_avp_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_aluno_dinamica_avp_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_estatica_esf_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_estatica_esf_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_estatica_cil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_estatica_cil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_estatica_eixo_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_estatica_eixo_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_estatica_avp_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_estatica_avp_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_dinamica_esf_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_dinamica_esf_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_dinamica_cil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_dinamica_cil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_dinamica_eixo_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_dinamica_eixo_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_dinamica_avp_od'); ?></th>
				<th><?php echo $this->Paginator->sort('retinoscopia_prof_dinamica_avp_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_aluno_esf_od'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_aluno_esf_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_aluno_cil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_aluno_cil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_aluno_avl_od'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_aluno_avl_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_aluno_avp_od'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_aluno_avp_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_prof_esf_od'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_prof_esf_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_prof_cil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_prof_cil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_prof_avl_od'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_prof_avl_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_prof_avp_od'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_prof_avp_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_aluno_esf_add'); ?></th>
				<th><?php echo $this->Paginator->sort('subjetivo_prof_esf_add'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_aluno_esf_od'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_aluno_esf_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_aluno_esf_add'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_aluno_cil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_aluno_cil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_aluno_avl_od'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_aluno_avl_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_aluno_avp_od'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_aluno_avp_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_prof_esf_od'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_prof_esf_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_prof_esf_add'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_prof_cil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_prof_cil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_prof_avl_od'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_prof_avl_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_prof_avp_od'); ?></th>
				<th><?php echo $this->Paginator->sort('afinamento_prof_avp_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_aluno_esf_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_aluno_esf_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_aluno_esf_add'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_aluno_cil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_aluno_cil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_aluno_avl_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_aluno_avl_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_aluno_avp_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_aluno_avp_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_prof_esf_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_prof_esf_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_prof_esf_add'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_prof_cil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_prof_cil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_prof_avl_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_prof_avl_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_prof_avp_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_prof_avp_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_final_esf_od'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_final_esf_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_final_esf_add'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_final_cil_od'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_final_cil_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_final_avl_od'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_final_avl_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_final_avp_od'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_final_avp_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_final_eixo_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('rx_final_eixo_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_aluno_eixo_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_aluno_eixo_od'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_prof_eixo_oe'); ?></th>
				<th><?php echo $this->Paginator->sort('ambulatorial_prof_eixo_od'); ?></th>
				<th><?php echo $this->Paginator->sort('tipo_lente'); ?></th>
				<th><?php echo $this->Paginator->sort('filtro'); ?></th>
				<th><?php echo $this->Paginator->sort('cor'); ?></th>
				<th><?php echo $this->Paginator->sort('obs'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($historicos as $historico): ?>
				<tr>
					<td><?php echo h($historico['Historico']['id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($historico['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'view', $historico['Paciente']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($historico['User']['id'], array('controller' => 'users', 'action' => 'view', $historico['User']['id'])); ?>
					</td>
					<td><?php echo h($historico['Historico']['rx_esf_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_es_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_cil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_cil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_eixo_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_eixo_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_av_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_av_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['lens_tipo_lente']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['lens_cor']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['lens_filtro']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['lens_obs']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['acuivisual_vl_sc_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['acuivisual_vl_sc_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['acuivisual_ph_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['acuivisual_ph_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['acuivisual_vpsc_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['acuivisual_vpsc_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['acuivisual_vlcc_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['acuivisual_vlcc_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['data_criacao']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['acuivisual_vpcc_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['acuivisual_vpcc_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['acuivisual_optotipo']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['reflpup_fotomotor_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['reflpup_fotomotor_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['reflpup_consensual_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['reflpup_consensual_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['reflpup_acomodativo_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['reflpup_acomodativo_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['kappa_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['kappa_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['hirsch']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ducc_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ducc_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['versoes_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['versoes_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['versoes_obs']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ppc_objeto_real']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ppc_luz']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ppc_filtro']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['coverteste_6m_sc']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['coverteste_6m_cc']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['coverteste_40m_sc']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['coverteste_40m_cc']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['coverteste_20m_sc']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['coverteste_20m_cc']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rfp_vl1']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rfp_vl2']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rfp_vp1']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rfp_vp2']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rfn_vl1']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rfn_vl2']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rfn_vp1']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rfn_vp2']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['aa_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['aa_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['aa_distancia']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['flexmon_od1']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['flexmon_od2']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['flexmon_oe1']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['flexmon_oe2']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['facil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['facil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['aca_valor']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['aca_metodo']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_brucker_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_brucker_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_lente_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_lente_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_papila_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_papila_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_escavacao_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_escavacao_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_relacaoav_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_relacaoav_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_macula_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_macula_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_fixacao_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_fixacao_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_cor_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_cor_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_amsler_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['oftalmo_amsler_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['estereop_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['estereop_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['estereop_teste']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['vcromat_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['vcromat_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['vcromat_teste']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['biomicro_obs']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['biomicro_sobrancelhas']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['biomicro_cilios']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['biomicro_palpebras']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['biomicro_conjuntivas']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['biomicro_corneas']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['biomicro_iris']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['biomicro_cristalinos']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ceratometria_aluno_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ceratometria_aluno_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ceratometria_aluno_obs']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ceratometria_professor_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ceratometria_professor_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ceratometria_professor_obs']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_estatica_esf_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_estatica_esf_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_estatica_cil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_estatica_cil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_estatica_eixo_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_estatica_eixo_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_estatica_avp_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_estatica_avp_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_esf_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_esf_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_cil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_cil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_eixo_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_eixo_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_avp_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_avp_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_estatica_esf_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_estatica_esf_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_estatica_cil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_estatica_cil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_estatica_eixo_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_estatica_eixo_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_estatica_avp_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_estatica_avp_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_dinamica_esf_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_dinamica_esf_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_dinamica_cil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_dinamica_cil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_dinamica_eixo_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_dinamica_eixo_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_dinamica_avp_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['retinoscopia_prof_dinamica_avp_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_aluno_esf_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_aluno_esf_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_aluno_cil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_aluno_cil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_aluno_avl_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_aluno_avl_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_aluno_avp_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_aluno_avp_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_prof_esf_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_prof_esf_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_prof_cil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_prof_cil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_prof_avl_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_prof_avl_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_prof_avp_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_prof_avp_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_aluno_esf_add']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['subjetivo_prof_esf_add']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_aluno_esf_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_aluno_esf_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_aluno_esf_add']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_aluno_cil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_aluno_cil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_aluno_avl_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_aluno_avl_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_aluno_avp_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_aluno_avp_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_prof_esf_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_prof_esf_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_prof_esf_add']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_prof_cil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_prof_cil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_prof_avl_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_prof_avl_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_prof_avp_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['afinamento_prof_avp_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_aluno_esf_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_aluno_esf_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_aluno_esf_add']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_aluno_cil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_aluno_cil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_aluno_avl_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_aluno_avl_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_aluno_avp_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_aluno_avp_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_prof_esf_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_prof_esf_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_prof_esf_add']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_prof_cil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_prof_cil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_prof_avl_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_prof_avl_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_prof_avp_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_prof_avp_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_final_esf_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_final_esf_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_final_esf_add']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_final_cil_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_final_cil_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_final_avl_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_final_avl_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_final_avp_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_final_avp_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_final_eixo_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['rx_final_eixo_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_aluno_eixo_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_aluno_eixo_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_prof_eixo_oe']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['ambulatorial_prof_eixo_od']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['tipo_lente']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['filtro']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['cor']); ?>&nbsp;</td>
					<td><?php echo h($historico['Historico']['obs']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $historico['Historico']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $historico['Historico']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $historico['Historico']['id']), array(), __('Are you sure you want to delete # %s?', $historico['Historico']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?>	</p>
			<div class="paging">
				<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
				?>
			</div>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('New Historico'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Questionarios'), array('controller' => 'questionarios', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Questionario'), array('controller' => 'questionarios', 'action' => 'add')); ?> </li>
			</ul>
		</div>
