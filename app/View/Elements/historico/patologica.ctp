<!-- Abas Interna -->
<ul class="nav nav-tabs second-level" role="tablist">
  <li role="presentation" class="active"><a href="#biomicrosopia" aria-controls="biomicrosopia" role="tab" data-toggle="tab">Biomicrosopia</a></li>
  <li role="presentation"><a href="#oftalmoscopia-direta" aria-controls="oftalmoscopia-direta" role="tab" data-toggle="tab">Oftalmoscopia Direta</a></li>
</ul>
<!-- Conteúdo -->
<div class="tab-content">
  <!-- Conteúdo de Biomicrosopia -->
  <div id="biomicrosopia" role="tabpanel" class="tab-pane active">
    <div class="container tab-container">
      <div class="row">
        <div class="col-lg-12">

          <div class="form-group">
            <label for="HistoricoBiomicroObs">Obs.:</label>
            <input class="form-control form-group" name="data[Historico][biomicro_obs]" maxlength="100" id="HistoricoBiomicroObs" type="text">
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
              <div class="form-group">
                <label>Sobrancelhas</label>
                <input class="form-control form-group" name="data[Historico][biomicro_sobrancelhas]" maxlength="100" id="HistoricoBiomicroSobrancelhas" type="text">
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
              <div class="form-group">
                <label for="HistoricoBiomicroCilios">Cílio</label>
                <input class="form-control form-group" name="data[Historico][biomicro_cilios]" maxlength="100" id="HistoricoBiomicroCilios" type="text">
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
              <div class="form-group">
                <label for="HistoricoBiomicroPalpebras">Pálpebra</label>
                <input class="form-control form-group" name="data[Historico][biomicro_palpebras]" maxlength="100" id="HistoricoBiomicroPalpebras" type="text">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
              <div class="form-group">
                <label for="HistoricoBiomicroConjuntivas">Conjuntiva</label>
                <input class="form-control form-group" name="data[Historico][biomicro_conjuntivas]" maxlength="100" id="HistoricoBiomicroConjuntivas" type="text">
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <div class="form-group">
                <label for="HistoricoBiomicroCorneas">Córnea</label>
                <input class="form-control form-group" name="data[Historico][biomicro_corneas]" maxlength="100" id="HistoricoBiomicroCorneas" type="text">
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <div class="form-group">
                <label for="HistoricoBiomicroIris">Íris</label>
                <input class="form-control form-group" name="data[Historico][biomicro_iris]" maxlength="100" id="HistoricoBiomicroIris" type="text">
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <div class="form-group">
                <label for="HistoricoBiomicroCristalinos">cristalinos</label>
                <input class="form-control form-group" name="data[Historico][biomicro_cristalinos]" maxlength="100" id="HistoricoBiomicroCristalinos" type="text">
                <input class="form-control form-group" name="data[Historico][biomicro_img]" maxlength="100" id="HistoricoBiomicroImg" type="hidden">
              </div>
            </div>
            <div class="col-md-12 col-sm-3 col-xs-3">
              <div class="tools">
                <a href="#biomicroscopia" data-tool="marker">Marcar</a>
                <a href="#biomicroscopia" data-tool="eraser">Limpar</a>
              </div>
              <a href="#biomicroscopia"  data-download="png" style="float: right; width: 100px;">Salvar Imagem</a>
              <div style="background: url('/vilmartcc/app/webroot/img/biomicroscopia.jpg') no-repeat center center; width:400px;height:200px;float:left;">
              <canvas id="biomicroscopia" width="400" height="200"></canvas>
              <script type="text/javascript">
                $(function() {
                  $('#biomicroscopia').sketch({defaultColor: "#ff0"});
                });
              </script></div>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Oftalmoscopia Direta -->
  <div id="oftalmoscopia-direta" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">O.D</div>
            <div class="panel-body">
              <!-- Brucker -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Bruckner</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_brucker_od]" maxlength="100" id="HistoricoOftalmoBruckerOd" type="text">
                </div>
              </div>

              <!-- Lente -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Lente</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_lente_od]" maxlength="100" id="HistoricoOftalmoLenteOd" type="text">
                </div>
              </div>

              <!-- Papila -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Papila</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_papila_od]" maxlength="100" id="HistoricoOftalmoPapilaOd" type="text">
                </div>
              </div>

              <!-- Escavação -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Escavação</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_escavacao_od]" maxlength="100" id="HistoricoOftalmoEscavacaoOd" type="text">
                </div>
              </div>

              <!-- Relação A/V -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Relação A/V</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_escavacao_od]" maxlength="100" id="HistoricoOftalmoEscavacaoOd" type="text">
                </div>
              </div>

              <!-- Mácula -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Mácula</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_macula_od]" maxlength="100" id="HistoricoOftalmoMaculaOd" type="text">
                </div>
              </div>

              <!-- Fixação -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Fixação</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_fixacao_od]" maxlength="100" id="HistoricoOftalmoFixacaoOd" type="text">
                </div>
              </div>

              <!-- Cor -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Cor</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_cor_od]" maxlength="100" id="HistoricoOftalmoCorOd" type="text">
                </div>
              </div>
            </div>
          </div>
          <!-- End O.D -->

          <!-- Start O.E -->
                    <div class="panel panel-default">
            <div class="panel-heading">O.E</div>
            <div class="panel-body">
              <!-- Brucker -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Bruckner</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_brucker_oe]" maxlength="100" id="HistoricoOftalmoBruckerOe" type="text">
                </div>
              </div>

              <!-- Lente -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Lente</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_lente_oe]" maxlength="100" id="HistoricoOftalmoLenteOe" type="text">
                </div>
              </div>

              <!-- Papila -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Papila</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_papila_oe]" maxlength="100" id="HistoricoOftalmoPapilaOe" type="text">
                </div>
              </div>

              <!-- Escavação -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Escavação</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_escavacao_oe]" maxlength="100" id="HistoricoOftalmoEscavacaoOe" type="text">
                </div>
              </div>

              <!-- Relação A/V -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Relação A/V</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_escavacao_oe]" maxlength="100" id="HistoricoOftalmoEscavacaoOe" type="text">
                </div>
              </div>

              <!-- Mácula -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Mácula</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_macula_oe]" maxlength="100" id="HistoricoOftalmoMaculaOe" type="text">
                </div>
              </div>

              <!-- Fixação -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Fixação</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_fixacao_oe]" maxlength="100" id="HistoricoOftalmoFixacaoOe" type="text">
                </div>
              </div>

              <!-- Cor -->
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="HistoricoBiomicroCristalinos">Cor</label>
                  <input class="form-control form-group" name="data[Historico][oftalmo_cor_oe]" maxlength="100" id="HistoricoOftalmoCorOe" type="text">
                  <input class="form-control form-group" name="data[Historico][oftalmo_direta_img]" maxlength="100" id="HistoricoOftalmoImg" type="hidden">
                </div>
              </div>
              <div class="col-md-12">
                 <div class="tools">
                  <a href="#oftalmoscopia" data-tool="marker">Marker</a>
                  <a href="#oftalmoscopia" data-tool="eraser">Eraser</a>
                  <a href="#oftalmoscopia"  data-download="png" style="float: right; width: 100px;">Salvar Imagem</a>
                </div>
                <canvas id="oftalmoscopia" width="400" height="200" style="background: url('/vilmartcc/app/webroot/img/oftalmoscopia.jpg') no-repeat center center;"></canvas>
              <script type="text/javascript">
                $(function() {
                  $('#oftalmoscopia').sketch({defaultColor: "#ff0"});
                });
              </script>  
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>