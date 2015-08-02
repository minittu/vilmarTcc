<div class="historicos view">
<h2><?php echo __('Historico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paciente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($historico['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'view', $historico['Paciente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($historico['User']['id'], array('controller' => 'users', 'action' => 'view', $historico['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Esf Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_esf_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Es Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_es_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Cil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_cil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Cil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_cil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Eixo Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_eixo_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Eixo Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_eixo_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Av Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_av_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Av Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_av_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lens Tipo Lente'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['lens_tipo_lente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lens Cor'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['lens_cor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lens Filtro'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['lens_filtro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lens Obs'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['lens_obs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acuivisual Vl Sc Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['acuivisual_vl_sc_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acuivisual Vl Sc Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['acuivisual_vl_sc_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acuivisual Ph Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['acuivisual_ph_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acuivisual Ph Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['acuivisual_ph_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acuivisual Vpsc Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['acuivisual_vpsc_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acuivisual Vpsc Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['acuivisual_vpsc_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acuivisual Vlcc Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['acuivisual_vlcc_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acuivisual Vlcc Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['acuivisual_vlcc_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Criacao'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['data_criacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acuivisual Vpcc Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['acuivisual_vpcc_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acuivisual Vpcc Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['acuivisual_vpcc_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acuivisual Optotipo'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['acuivisual_optotipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reflpup Fotomotor Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['reflpup_fotomotor_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reflpup Fotomotor Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['reflpup_fotomotor_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reflpup Consensual Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['reflpup_consensual_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reflpup Consensual Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['reflpup_consensual_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reflpup Acomodativo Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['reflpup_acomodativo_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reflpup Acomodativo Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['reflpup_acomodativo_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kappa Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['kappa_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kappa Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['kappa_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hirsch'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['hirsch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ducc Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ducc_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ducc Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ducc_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Versoes Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['versoes_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Versoes Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['versoes_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Versoes Obs'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['versoes_obs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ppc Objeto Real'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ppc_objeto_real']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ppc Luz'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ppc_luz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ppc Filtro'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ppc_filtro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coverteste 6m Sc'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['coverteste_6m_sc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coverteste 6m Cc'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['coverteste_6m_cc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coverteste 40m Sc'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['coverteste_40m_sc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coverteste 40m Cc'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['coverteste_40m_cc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coverteste 20m Sc'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['coverteste_20m_sc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coverteste 20m Cc'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['coverteste_20m_cc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfp Vl1'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rfp_vl1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfp Vl2'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rfp_vl2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfp Vp1'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rfp_vp1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfp Vp2'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rfp_vp2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfn Vl1'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rfn_vl1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfn Vl2'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rfn_vl2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfn Vp1'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rfn_vp1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfn Vp2'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rfn_vp2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aa Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['aa_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aa Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['aa_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aa Distancia'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['aa_distancia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flexmon Od1'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['flexmon_od1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flexmon Od2'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['flexmon_od2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flexmon Oe1'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['flexmon_oe1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flexmon Oe2'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['flexmon_oe2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['facil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['facil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aca Valor'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['aca_valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aca Metodo'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['aca_metodo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Brucker Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_brucker_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Brucker Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_brucker_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Lente Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_lente_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Lente Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_lente_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Papila Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_papila_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Papila Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_papila_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Escavacao Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_escavacao_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Escavacao Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_escavacao_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Relacaoav Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_relacaoav_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Relacaoav Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_relacaoav_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Macula Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_macula_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Macula Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_macula_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Fixacao Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_fixacao_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Fixacao Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_fixacao_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Cor Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_cor_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Cor Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_cor_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Amsler Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_amsler_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oftalmo Amsler Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['oftalmo_amsler_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estereop Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['estereop_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estereop Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['estereop_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estereop Teste'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['estereop_teste']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vcromat Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['vcromat_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vcromat Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['vcromat_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vcromat Teste'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['vcromat_teste']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Biomicro Obs'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['biomicro_obs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Biomicro Sobrancelhas'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['biomicro_sobrancelhas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Biomicro Cilios'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['biomicro_cilios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Biomicro Palpebras'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['biomicro_palpebras']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Biomicro Conjuntivas'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['biomicro_conjuntivas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Biomicro Corneas'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['biomicro_corneas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Biomicro Iris'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['biomicro_iris']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Biomicro Cristalinos'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['biomicro_cristalinos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ceratometria Aluno Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ceratometria_aluno_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ceratometria Aluno Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ceratometria_aluno_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ceratometria Aluno Obs'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ceratometria_aluno_obs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ceratometria Professor Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ceratometria_professor_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ceratometria Professor Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ceratometria_professor_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ceratometria Professor Obs'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ceratometria_professor_obs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Estatica Esf Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_estatica_esf_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Estatica Esf Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_estatica_esf_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Estatica Cil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_estatica_cil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Estatica Cil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_estatica_cil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Estatica Eixo Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_estatica_eixo_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Estatica Eixo Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_estatica_eixo_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Estatica Avp Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_estatica_avp_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Estatica Avp Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_estatica_avp_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Dinamica Esf Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_esf_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Dinamica Esf Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_esf_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Dinamica Cil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_cil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Dinamica Cil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_cil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Dinamica Eixo Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_eixo_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Dinamica Eixo Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_eixo_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Dinamica Avp Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_avp_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Aluno Dinamica Avp Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_aluno_dinamica_avp_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Estatica Esf Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_estatica_esf_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Estatica Esf Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_estatica_esf_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Estatica Cil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_estatica_cil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Estatica Cil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_estatica_cil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Estatica Eixo Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_estatica_eixo_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Estatica Eixo Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_estatica_eixo_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Estatica Avp Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_estatica_avp_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Estatica Avp Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_estatica_avp_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Dinamica Esf Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_dinamica_esf_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Dinamica Esf Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_dinamica_esf_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Dinamica Cil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_dinamica_cil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Dinamica Cil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_dinamica_cil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Dinamica Eixo Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_dinamica_eixo_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Dinamica Eixo Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_dinamica_eixo_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Dinamica Avp Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_dinamica_avp_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retinoscopia Prof Dinamica Avp Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['retinoscopia_prof_dinamica_avp_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Aluno Esf Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_aluno_esf_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Aluno Esf Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_aluno_esf_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Aluno Cil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_aluno_cil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Aluno Cil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_aluno_cil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Aluno Avl Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_aluno_avl_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Aluno Avl Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_aluno_avl_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Aluno Avp Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_aluno_avp_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Aluno Avp Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_aluno_avp_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Prof Esf Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_prof_esf_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Prof Esf Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_prof_esf_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Prof Cil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_prof_cil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Prof Cil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_prof_cil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Prof Avl Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_prof_avl_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Prof Avl Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_prof_avl_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Prof Avp Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_prof_avp_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Prof Avp Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_prof_avp_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Aluno Esf Add'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_aluno_esf_add']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjetivo Prof Esf Add'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['subjetivo_prof_esf_add']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Aluno Esf Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_aluno_esf_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Aluno Esf Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_aluno_esf_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Aluno Esf Add'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_aluno_esf_add']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Aluno Cil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_aluno_cil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Aluno Cil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_aluno_cil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Aluno Avl Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_aluno_avl_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Aluno Avl Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_aluno_avl_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Aluno Avp Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_aluno_avp_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Aluno Avp Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_aluno_avp_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Prof Esf Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_prof_esf_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Prof Esf Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_prof_esf_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Prof Esf Add'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_prof_esf_add']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Prof Cil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_prof_cil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Prof Cil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_prof_cil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Prof Avl Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_prof_avl_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Prof Avl Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_prof_avl_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Prof Avp Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_prof_avp_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afinamento Prof Avp Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['afinamento_prof_avp_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Aluno Esf Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_aluno_esf_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Aluno Esf Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_aluno_esf_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Aluno Esf Add'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_aluno_esf_add']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Aluno Cil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_aluno_cil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Aluno Cil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_aluno_cil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Aluno Avl Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_aluno_avl_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Aluno Avl Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_aluno_avl_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Aluno Avp Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_aluno_avp_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Aluno Avp Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_aluno_avp_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Prof Esf Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_prof_esf_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Prof Esf Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_prof_esf_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Prof Esf Add'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_prof_esf_add']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Prof Cil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_prof_cil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Prof Cil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_prof_cil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Prof Avl Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_prof_avl_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Prof Avl Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_prof_avl_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Prof Avp Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_prof_avp_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Prof Avp Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_prof_avp_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Final Esf Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_final_esf_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Final Esf Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_final_esf_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Final Esf Add'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_final_esf_add']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Final Cil Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_final_cil_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Final Cil Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_final_cil_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Final Avl Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_final_avl_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Final Avl Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_final_avl_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Final Avp Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_final_avp_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Final Avp Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_final_avp_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Final Eixo Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_final_eixo_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rx Final Eixo Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['rx_final_eixo_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Aluno Eixo Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_aluno_eixo_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Aluno Eixo Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_aluno_eixo_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Prof Eixo Oe'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_prof_eixo_oe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambulatorial Prof Eixo Od'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['ambulatorial_prof_eixo_od']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Lente'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['tipo_lente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filtro'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['filtro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cor'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['cor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Obs'); ?></dt>
		<dd>
			<?php echo h($historico['Historico']['obs']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Historico'), array('action' => 'edit', $historico['Historico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Historico'), array('action' => 'delete', $historico['Historico']['id']), array(), __('Are you sure you want to delete # %s?', $historico['Historico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Historicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historico'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questionarios'), array('controller' => 'questionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Questionario'), array('controller' => 'questionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Questionarios'); ?></h3>
	<?php if (!empty($historico['Questionario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Historico Id'); ?></th>
		<th><?php echo __('Motivo'); ?></th>
		<th><?php echo __('Sinais Sintomas'); ?></th>
		<th><?php echo __('Ant Pessoais'); ?></th>
		<th><?php echo __('Ant Familiares'); ?></th>
		<th><?php echo __('Usuario Rx'); ?></th>
		<th><?php echo __('Ultimo Controle'); ?></th>
		<th><?php echo __('Tp Ultimo Controle'); ?></th>
		<th><?php echo __('Ultima Rx'); ?></th>
		<th><?php echo __('Tp Ultimo Rx'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($historico['Questionario'] as $questionario): ?>
		<tr>
			<td><?php echo $questionario['id']; ?></td>
			<td><?php echo $questionario['historico_id']; ?></td>
			<td><?php echo $questionario['motivo']; ?></td>
			<td><?php echo $questionario['sinais_sintomas']; ?></td>
			<td><?php echo $questionario['ant_pessoais']; ?></td>
			<td><?php echo $questionario['ant_familiares']; ?></td>
			<td><?php echo $questionario['usuario_rx']; ?></td>
			<td><?php echo $questionario['ultimo_controle']; ?></td>
			<td><?php echo $questionario['tp_ultimo_controle']; ?></td>
			<td><?php echo $questionario['ultima_rx']; ?></td>
			<td><?php echo $questionario['tp_ultimo_rx']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'questionarios', 'action' => 'view', $questionario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'questionarios', 'action' => 'edit', $questionario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'questionarios', 'action' => 'delete', $questionario['id']), array(), __('Are you sure you want to delete # %s?', $questionario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Questionario'), array('controller' => 'questionarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
