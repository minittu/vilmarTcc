            <div class="page-header"> 
                        <h2>ANANMESE</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-8 col-xs-9">
                            <?php echo $this->Form->input('motivo', array('div' => array('class' => 'form-group'), 'class' => 'form-control','label' => 'Motivo da Consulta')); ?>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-8 col-xs-9">
                            <?php echo $this->Form->input('sinais_sintomas', array('div' => array('class' => 'form-group'), 'class' => 'form-control', 'label' => 'Sinais e Sintomas'));?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-8 col-xs-9">
                            <?php echo $this->Form->input('ant_pessoais', array('div' => array('class' => 'form-group'), 'class' => 'form-control','label'=>'Ant. Pessoais')); ?>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-8 col-xs-9">
                            <?php echo $this->Form->input('ant_familiares', array('div' => array('class' => 'form-group'), 'class' => 'form-control','label' => 'Ant. Familiares')); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-5 col-xs-4">
                            <?php 
                                $usuario_rx = array('NAO' => 'NÃO', 'OCULOS' => 'ÓCULOS', 'LCG' => 'LCG', 'LCRG' => 'LCRG', 'AUX. BAIXA VISAO' => 'AUX. BAIXA VISÃO');
                                echo $this->Form->input('usuario_rx', array('div' => array('class' => 'form-group'), 'class' => 'form-control','options' => $usuario_rx, 'default' => 'NAO', 'label' => 'Usuário de Rx')); 
                              ?>
                        </div>
                        <div class="col-md-2 col-sm-5 col-xs-3">
                            <?php echo $this->Form->input('ultimo_controle', array('div' => array('class' => 'form-group'), 'class' => 'form-control','label' => 'Último Controle')); ?>
                        </div>
                        <div class="col-md-1 col-sm-5 col-xs-3">
                            <?php echo $this->Form->input('tp_ultimo_controle', array('div' => array('class' => 'form-group'), 'class' => 'form-control','legend' => '','type' => 'radio','options'=> array('MESES','ANOS'),'label' => '')); ?>        
                        </div>
                        <div class="col-md-2 col-sm-5 col-xs-3">
                            <?php echo $this->Form->input('ultima_rx', array('div' => array('class' => 'form-group'), 'class' => 'form-control','label' => 'Última Rx')); ?>
                        </div>                        <div class="col-md-1 col-sm-5 col-xs-3">
                            <?php echo $this->Form->input('tp_ultimo_rx', array('div' => array('class' => 'form-group'), 'class' => 'form-control','legend' => '','type' => 'radio','options'=> array('MESES','ANOS'))); ?>        
                        </div>
                    </div>