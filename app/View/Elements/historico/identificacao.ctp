<div class="container tab-container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Já é paciente?</h1>
            <div class="form-inline">
                <div class="form-group">
                    <label>
                        <input type="radio" name="paciente_novo" id="paciente_velho" value="1" checked> Sim
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="radio" name="paciente_novo" id="paciente_novo" value="0"> Não
                    </label>
                </div>

            </div>
            <div id="velho">
                <br/>
                <input type="text" id="paciente_id" class="auto-complete form-control" />
            </div>
            
            <div id="novo">
                <div class="pacientes form">
                    <div class="page-header">
                        <h2><?php echo __('Adicionar Paciente'); ?></h2>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-10 col-sm-8 col-xs-9">
                            <?php echo $this->Form->input('nome', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-3">
                            <?php echo $this->Form->input('sexo', array('div' => array('class' => 'form-group'), 'class' => 'form-control'));?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <?php echo $this->Form->input('telefone', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-4">
                            <?php echo $this->Form->input('rg', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-4">
                            <?php echo $this->Form->input('orgao_exp', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-sm-7 col-xs-5">
                            <?php echo $this->Form->input('logradouro', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <?php echo $this->Form->input('cidade_id', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-3">
                            <?php echo $this->Form->input('estado_id', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <?php echo $this->Form->input('atividade', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <?php echo $this->Form->input('procedencia', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php echo $this->Form->input('responsavel', array('div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="button" name="enviar Paciente" id="salvarPaciente" value="Salvar Paciente" />
                        
                    </div>
                </div>
                <!--</form>-->
            </div>
        </div>
    </div>
</div>
</div>