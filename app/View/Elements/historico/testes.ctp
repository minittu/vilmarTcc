<!-- Abas Interna -->
<ul class="nav nav-tabs second-level" role="tablist">
  <li role="presentation" class="active">
    <a href="#rfp" aria-controls="rfp" role="tab" data-toggle="tab">R.F.P</a>
  </li>
  <li role="presentation">
    <a href="#rfn" aria-controls="rfn" role="tab" data-toggle="tab">R.F.N</a>
  </li>
  <li role="presentation">
    <a href="#aa" aria-controls="hirsch" role="tab" data-toggle="tab">A.A</a>
  </li>
  <li role="presentation">
    <a href="#flex-mon" aria-controls="flex-mon" role="tab" data-toggle="tab">Flexibilidade Monocular</a>
  </li>
  <li role="presentation">
    <a href="#aca" aria-controls="aca" role="tab" data-toggle="tab">AC/A</a>
  </li>
  <li role="presentation">
    <a href="#estereop" aria-controls="estereop" role="tab" data-toggle="tab">Estereopsia</a>
  </li>
  <li role="presentation">
    <a href="#cromat" aria-controls="cromat" role="tab" data-toggle="tab">Visão Cromática</a>
  </li>
  <li role="presentation">
    <a href="#amsler" aria-controls="amsler" role="tab" data-toggle="tab">Amsler</a>
  </li>
</ul>


<!-- Abas Conteúdo -->
<div class="tab-content">

  <!-- RFP -->
  <div id="rfp" role="tabpanel" class="tab-pane active">
    <div class="container tab-container">
      <div class="row">

        <!-- V.L -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoRfpVl1">V.L</label>
            <input class="form-control form-group" name="data[Historico][rfp_vl1]" maxlength="100" id="HistoricoRfpVl1" type="text">
            <input class="form-control form-group" name="data[Historico][rfp_vl2]" maxlength="100" id="HistoricoRfpVl2" type="text">
          </div>
        </div>

        <!-- V.P -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoRfpVp1">V.P</label>
            <input class="form-control form-group" name="data[Historico][rfp_vp1]" maxlength="100" id="HistoricoRfpVp1" type="text">
            <input class="form-control form-group" name="data[Historico][rfp_vp2]" maxlength="100" id="HistoricoRfpVp2" type="text">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- RFN -->
  <div id="rfn" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">

        <!-- V.L -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoRfnVl1">V.L</label>
            <input class="form-control form-group" name="data[Historico][rfn_vl1]" maxlength="100" id="HistoricoRfnVl1" type="text">
            <input class="form-control form-group" name="data[Historico][rfn_vl2]" maxlength="100" id="HistoricoRfnVl2" type="text">
          </div>
        </div>

        <!-- V.P -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoRfnVp1">V.P</label>
            <input class="form-control form-group" name="data[Historico][rfn_vp1]" maxlength="100" id="HistoricoRfnVp1" type="text">
            <input class="form-control form-group" name="data[Historico][rfn_vp2]" maxlength="100" id="HistoricoRfnVp2" type="text">
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- A.A -->
  <div id="aa" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">

        <!-- O.D -->
        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class="form-group">
            <label for="HistoricoAaOd">O.D</label>
            <input class="form-control form-group" name="data[Historico][aa_od]" maxlength="100" id="HistoricoAaOd" type="text">
          </div>
        </div>

        <!-- O.E -->
        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class="form-group">
            <label for="HistoricoAaOe">O.E</label>
            <input class="form-control form-group" name="data[Historico][aa_oe]" maxlength="100" id="HistoricoAaOe" type="text">
          </div>
        </div>       

        <!-- Distância -->
        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class="form-group">
            <label for="HistoricoAaDistancia">Distância</label>
            <input class="form-control form-group" name="data[Historico][aa_distancia]" maxlength="100" id="HistoricoAaDistancia" type="text">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Flex. Mon. -->
  <div id="flex-mon" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">

        <!-- O.D -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoFlexmonOd1">O.D</label>
            <input class="form-control form-group" name="data[Historico][flexmon_od1]" maxlength="100" id="HistoricoFlexmonOd1" type="text" style="background-image: url('/vilmartcc/app/webroot/img/more.png'); background-repeat: no-repeat; background-position: left center; padding: 0px 25px;">
            <input class="form-control form-group" name="data[Historico][flexmon_od2]" maxlength="100" id="HistoricoFlexmonOd2" type="text" style="background-image: url('/vilmartcc/app/webroot/img/less.png'); background-repeat: no-repeat; background-position: left center; padding: 0px 25px;">
          </div>
        </div>

        <!-- O.E -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoFlexmonOe1">O.E</label>
            <input class="form-control form-group" name="data[Historico][flexmon_oe1]" maxlength="100" id="HistoricoFlexmonOe1" type="text" style="background-image: url('/vilmartcc/app/webroot/img/more.png'); background-repeat: no-repeat; background-position: left center; padding: 0px 25px;">
            <input class="form-control form-group" name="data[Historico][flexmon_oe2]" maxlength="100" id="HistoricoFlexmonOe2" type="text" style="background-image: url('/vilmartcc/app/webroot/img/less.png'); background-repeat: no-repeat; background-position: left center; padding: 0px 25px;">
          </div>
        </div>

        

        <!-- Distância -->
<!--         <div class="col-md-4 col-sm-4 col-xs-4">
          <div class="form-group">
            <label for="HistoricoAaDistancia">Distância</label>
            <input class="form-control form-group" name="data[Historico][aa_distancia]" maxlength="100" id="HistoricoAaDistancia" type="text">
          </div>
        </div> -->

      </div>
    </div>
  </div>

  <!-- AC/A -->
  <div id="aca" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">

        <!-- Valor -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoAcaValor">Valor</label>
            <input class="form-control form-group" name="data[Historico][aca_valor]" maxlength="100" id="HistoricoAcaValor" type="text">
          </div>
        </div>

        <!-- Metodo -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoAcaMetodo">Metodo</label>
            <input class="form-control form-group" name="data[Historico][aca_metodo]" maxlength="100" id="HistoricoAcaMetodo" type="text">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Estereop. -->
  <div id="estereop" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">

        <!-- O.D -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoEstereopOd">O.D</label>
            <input class="form-control form-group" name="data[Historico][estereop_od]" id="HistoricoEstereopOd" type="text">
          </div>
        </div>


        <!-- O.E -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoEstereopOe">O.E</label>
            <input class="form-control form-group" name="data[Historico][estereop_oe]" id="HistoricoEstereopOe" type="text">
          </div>
        </div>


        <!-- Teste -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="HistoricoEstereopTeste">Teste</label>
            <input class="form-control form-group" name="data[Historico][estereop_teste]" id="HistoricoEstereopTeste" type="text">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- V. Cromat. -->
  <div id="cromat" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">

        <!-- O.D -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoVcromatOd">O.D</label>
            <input class="form-control form-group" name="data[Historico][vcromat_od]" id="HistoricoVcromatOd" type="text">
          </div>
        </div>

        <!-- O.E -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoVcromatOe">O.E</label>
            <input class="form-control form-group" name="data[Historico][vcromat_oe]" id="HistoricoVcromatOe" type="text">
          </div>
        </div>

        <!-- Teste -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="HistoricoVcromatTeste">Teste</label>
            <input class="form-control form-group" name="data[Historico][vcromat_teste]" id="HistoricoVcromatTeste" type="text">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Amsler -->
  <div id="amsler" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">

        <!-- O.D -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoOftalmoAmslerOd">O.D</label>
            <input class="form-control form-group" name="data[Historico][oftalmo_amsler_od]" id="HistoricoOftalmoAmslerOd" type="text">
          </div>
        </div>

        <!-- O.E -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
          <label for="HistoricoOftalmoAmslerOe">O.E</label>
            <input class="form-control form-group" name="data[Historico][oftalmo_amsler_oe]" id="HistoricoOftalmoAmslerOe" type="text">
          </div>
        </div>

        
      </div>
    </div>
  </div>
</div>