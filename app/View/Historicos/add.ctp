<div class="historicos form">    
<!--<form action="/vilmartcc/historicos/add" id="HistoricoAddForm" method="post" accept-charset="utf-8">-->
<?php echo $this->Form->create('Historico');?>
  <h3 id="nomePaciente"></h3> 
  <!-- Tabs Panel -->
 <div role="tabpanel">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active" id="ip"><a href="#identificacao" role="tab" data-toggle="tab">Identificação Pessoal</a></li>
    <li role="presentation" class="esconde" id="anm" ><a href="#anamnese" role="tab" data-toggle="tab">Anamnese</a></li>
    <li role="presentation" class="esconde"><a href="#patologica" role="tab" data-toggle="tab">Avaliação Patológica</a></li>
    <li role="presentation" class="esconde"><a href="#motora" role="tab" data-toggle="tab">Avaliação Motora</a></li>
    <li role="presentation" class="esconde"><a href="#refrativa" role="tab" data-toggle="tab">Avaliação Refrativa</a></li>
    <li role="presentation" class="esconde"><a href="#testes" role="tab" data-toggle="tab">Testes Adicionais</a></li>
    <li role="presentation" class="esconde"><a href="#diagnostico" role="tab" data-toggle="tab">Diagnóstico e Conduta</a></li>
  </ul>

  <!-- Tab panes content -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="identificacao">
      <?php echo $this->element('historico/identificacao'); ?>
      
    </div>

    <div role="tabpanel" class="tab-pane" id="anamnese">
      
      <?php echo $this->element('historico/anamnese'); ?>
    </div>

    <div role="tabpanel" class="tab-pane" id="patologica">
      <?php echo $this->element('historico/patologica'); ?>
    </div>

    <div role="tabpanel" class="tab-pane" id="motora">
      <?php echo $this->element('historico/motora'); ?>
    </div>

    <div role="tabpanel" class="tab-pane" id="refrativa">
      <?php echo $this->element('historico/refrativa'); ?>
    </div>

    <div role="tabpanel" class="tab-pane" id="testes">
      <?php echo $this->element('historico/testes'); ?>
    </div>

    <div role="tabpanel" class="tab-pane" id="diagnostico">
      <?php echo $this->element('historico/diagnostico'); ?>
      
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-2 col-md-2 col-lg-2 col-sm-push-10 col-md-push-10 col-lg-push-10">
      <br/>
      <input type="hidden" id="paciente_id_hist" name="data[Historico][paciente_id]" value="" />
      <?php
      echo $this->Form->input('user_id', array('type' => 'hidden', 'value'  =>  '1'));
      echo $this->Form->input('data_criacao', array('type' => 'hidden'));
      // echo $this->Form->end(__('Submit'));
      ?>
      <button type="submit" class="btn btn-lg btn-primary">Enviar</button> 
      <br/><br/>
    </div>
  </div>
  </form>
</div>


