<!-- Abas Interna -->
<ul class="nav nav-tabs second-level" role="tablist">
  <li role="presentation" class="active">
    <a href="#lensometria" aria-controls="lensometria" role="tab" data-toggle="tab">Lensometria RX em Uso</a>
  </li>
  <li role="presentation">
    <a href="#acuidade-visual" aria-controls="acuidade-visual" role="tab" data-toggle="tab">Acuidade Visual</a>
  </li>
  <li role="presentation">
    <a href="#ceratometria" aria-controls="ceratometria" role="tab" data-toggle="tab">Ceratometria</a>
  </li>
  <li role="presentation">
    <a href="#retinoscopia" aria-controls="retinoscopia" role="tab" data-toggle="tab">Retinoscopia</a>
  </li>
  <li role="presentation">
    <a href="#subjetivo" aria-controls="subjetivo" role="tab" data-toggle="tab">Subjetivo</a>
  </li>
  <li role="presentation">
    <a href="#afinamento" aria-controls="afinamento" role="tab" data-toggle="tab">Afinamento</a>
  </li>
  <li role="presentation">
    <a href="#ambulatorial" aria-controls="ambulatorial" role="tab" data-toggle="tab">Ambulatorial</a>
  </li>
  <li role="presentation">
    <a href="#rx-final" aria-controls="rx-final" role="tab" data-toggle="tab">Rx Final</a>
  </li>
</ul>


<!-- Abas Conteúdo -->
<div class="tab-content">

  <!-- Lensometria -->
  <div id="lensometria" role="tabpanel" class="tab-pane active">
    <div class="container tab-container">
      <div class="row">
                <!-- O.D -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">O.D</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxEsfOd">Esf.</label>
                    <input class="form-control form-group" name="data[Historico][rx_esf_od]" maxlength="100" id="HistoricoRxEsfOd" type="text">
                  </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxCilOd">Cil.</label>
                    <input class="form-control form-group" name="data[Historico][rx_cil_od]" maxlength="100" id="HistoricoRxCilOd" type="text">
                  </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxEixoOd">Eixo</label>
                    <input class="form-control form-group" name="data[Historico][rx_eixo_od]" maxlength="100" id="HistoricoRxEixoOd" type="text">
                  </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxAvOd">A.V.</label>
                    <input class="form-control form-group" name="data[Historico][rx_av_od]" maxlength="100" id="HistoricoRxAvOd" type="text">
                  </div>
                </div>                
              </div>
            </div>
          </div>
        </div>

        <!-- O.E -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">O.E</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxEsOe">Esf.</label>
                    <input class="form-control form-group" name="data[Historico][rx_es_oe]" maxlength="100" id="HistoricoRxEsOe" type="text">
                  </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxCilOe">Cil.</label>
                    <input class="form-control form-group" name="data[Historico][rx_cil_oe]" maxlength="100" id="HistoricoRxCilOe" type="text">
                  </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxEixoOe">Eixo</label>
                    <input class="form-control form-group" name="data[Historico][rx_eixo_oe]" maxlength="100" id="HistoricoRxEixoOe" type="text">
                  </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxAvOe">A.V.L</label>
                    <input class="form-control form-group" name="data[Historico][rx_av_oe]" maxlength="100" id="HistoricoRxAvOe" type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="HistoricoSubjetivoAlunoEsfAdd">ADD</label>
            <input class="form-control form-group" name="data[Historico][subjetivo_aluno_esf_add]" maxlength="100" id="HistoricoSubjetivoAlunoEsfAdd" type="text">
          </div>
        </div>

      </div>
      <div class="row">

        <!-- Tipo Lente -->
        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class="form-group">
            <label for="HistoricoLensTipoLente">Tipo Lente</label>
            <input class="form-control form-group" name="data[Historico][lens_tipo_lente]" maxlength="100" id="HistoricoLensTipoLente" type="text">
          </div>
        </div>

        <!-- Cor -->
        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class="form-group">
            <label for="HistoricoLensCor">Cor</label>
            <input class="form-control form-group" name="data[Historico][lens_cor]" maxlength="100" id="HistoricoLensCor" type="text">
          </div>
        </div>

        <!-- Filtro -->
        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class="form-group">
            <label for="HistoricoLensFiltro">Filtro</label>
            <input class="form-control form-group" name="data[Historico][lens_filtro]" maxlength="100" id="HistoricoLensFiltro" type="text">
          </div>
        </div>

        <!-- Obs -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="HistoricoLensObs">Obs</label>
            <input class="form-control form-group" name="data[Historico][lens_obs]" maxlength="100" id="HistoricoLensObs" type="text">
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Acuidade Visual -->
  <div id="acuidade-visual" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">

        <!-- Sem Correção -->
        <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-heading">Sem Correção</div>
            <div class="panel-body">

              <!-- O.D -->
              <div class="panel panel-default">
                <div class="panel-heading">O.D</div>
                <div class="panel-body">
                  <div class="row">
                    <!-- V.L - S.C -->
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="form-group">
                        <label for="HistoricoAcuivisualVlScOd">V.L - S.C</label>
                        <input class="form-control form-group" name="data[Historico][acuivisual_vl_sc_od]" maxlength="10" id="HistoricoAcuivisualVlScOd" type="text">
                      </div>
                    </div>

                    <!-- P.H -->
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="form-group">
                        <label for="HistoricoAcuivisualPhOd">P.H</label>
                        <input class="form-control form-group" name="data[Historico][acuivisual_ph_od]" maxlength="100" id="HistoricoAcuivisualPhOd" type="text">
                      </div>
                    </div>

                    <!-- V.P - S.C -->
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="form-group">
                        <label for="HistoricoAcuivisualVpscOd">V.P - S.C</label>
                        <input class="form-control form-group" name="data[Historico][acuivisual_vpsc_od]" maxlength="100" id="HistoricoAcuivisualVpscOd" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- O.E -->
              <div class="panel panel-default">
                <div class="panel-heading">O.E</div>
                <div class="panel-body">
                  <div class="row">
                    <!-- V.L - S.C -->
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="form-group">
                        <label for="HistoricoAcuivisualVlScOe">V.L - S.C</label>
                        <input class="form-control form-group" name="data[Historico][acuivisual_vl_sc_oe]" maxlength="10" id="HistoricoAcuivisualVlScOe" type="text">
                      </div>
                    </div>

                    <!-- P.H -->
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="form-group">
                        <label for="HistoricoAcuivisualPhOe">P.H</label>
                        <input class="form-control form-group" name="data[Historico][acuivisual_ph_oe]" maxlength="100" id="HistoricoAcuivisualPhOe" type="text">
                      </div>
                    </div>

                    <!-- V.P - S.C -->
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="form-group">
                        <label for="HistoricoAcuivisualVpscOe">V.P - S.C</label>
                        <input class="form-control form-group" name="data[Historico][acuivisual_vpsc_oe]" maxlength="100" id="HistoricoAcuivisualVpscOe" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>


        <!-- Com Correção -->
        <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-heading">Com Correção</div>
            <div class="panel-body">
                            <!-- O.D -->
              <div class="panel panel-default">
                <div class="panel-heading">O.D</div>
                <div class="panel-body">
                  <div class="row">

                    <!-- V.L - C.C -->
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="form-group">
                        <label for="HistoricoAcuivisualVlccOd">V.L - C.C</label>
                        <input class="form-control form-group" name="data[Historico][acuivisual_vlcc_od]" maxlength="10" id="HistoricoAcuivisualVlccOd" type="text">
                      </div>
                    </div>

                    <!-- V.P - C.C -->
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="form-group">
                        <label for="HistoricoAcuivisualVpccOd">V.P - C.C</label>
                        <input class="form-control form-group" name="data[Historico][acuivisual_vpcc_od]" maxlength="100" id="HistoricoAcuivisualVpccOd" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- O.E -->
              <div class="panel panel-default">
                <div class="panel-heading">O.E</div>
                <div class="panel-body">
                  <div class="row">

                    <!-- V.L - C.C -->
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="form-group">
                        <label for="HistoricoAcuivisualVlccOe">V.L - C.C</label>
                        <input class="form-control form-group" name="data[Historico][acuivisual_vlcc_oe]" maxlength="10" id="HistoricoAcuivisualVlccOe" type="text">
                      </div>
                    </div>

                    <!-- V.P - C.C -->
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="form-group">
                        <label for="HistoricoAcuivisualVpccOe">V.P - C.C</label>
                        <input class="form-control form-group" name="data[Historico][acuivisual_vpcc_oe]" maxlength="100" id="HistoricoAcuivisualVpccOe" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>

        <!-- Optotipo -->
        <div class="col-lg-12">
          <div class="form-group">
            <label for="HistoricoAcuivisualOptotipo">Optotipo</label>
            <input class="form-control form-group" name="data[Historico][acuivisual_optotipo]" maxlength="100" id="HistoricoAcuivisualOptotipo" type="text">
          </div>
        </div>
      </div>

    </div>
  </div>



  <!-- Ceratometria -->
  <div id="ceratometria" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">

        <!-- O.D -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoCeratometriaAlunoOd">O.D</label>
            <input class="form-control form-group" name="data[Historico][ceratometria_aluno_od]" maxlength="100" id="HistoricoCeratometriaAlunoOd" type="text">
          </div>
        </div>

        <!-- O.E -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group">
            <label for="HistoricoCeratometriaAlunoOd">O.E</label>
            <input class="form-control form-group" name="data[Historico][ceratometria_aluno_oe]" maxlength="100" id="HistoricoCeratometriaAlunoOe" type="text">
          </div>
        </div>        

        <!-- OBS -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="HistoricoCeratometriaAlunoObs">Obs</label>
            <input class="form-control form-group" name="data[Historico][ceratometria_aluno_obs]" maxlength="100" id="HistoricoCeratometriaAlunoObs" type="text">
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Retinoscopia -->
  <div id="retinoscopia" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">

        <!-- Estática -->
        <div class="panel panel-default">
          <div class="panel-heading">Estática</div>
          <div class="panel-body">
                        <!-- O.D -->
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="panel panel-default">
                <div class="panel-heading">O.D</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoEstaticaEsfOd">Esf.</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_estatica_esf_od]" maxlength="100" id="HistoricoRetinoscopiaAlunoEstaticaEsfOd" type="text">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoEstaticaCilOd">Cil.</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_estatica_cil_od]" maxlength="100" id="HistoricoRetinoscopiaAlunoEstaticaCilOd" type="text">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoEstaticaEixoOd">Eixo</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_estatica_eixo_od]" maxlength="100" id="HistoricoRetinoscopiaAlunoEstaticaEixoOd" type="text">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoEstaticaAvOd">A.V</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_estatica_avp_od]" maxlength="100" id="HistoricoRetinoscopiaAlunoEstaticaAvOd" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- O.E -->
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="panel panel-default">
                <div class="panel-heading">O.E</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoEstaticaEsfOe">Esf.</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_estatica_esf_oe]" maxlength="100" id="HistoricoRetinoscopiaAlunoEstaticaEsfOe" type="text">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoEstaticaCilOe">Cil.</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_estatica_cil_oe]" maxlength="100" id="HistoricoRetinoscopiaAlunoEstaticaCilOe" type="text">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoEstaticaEixoOe">Eixo</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_estatica_eixo_oe]" maxlength="100" id="HistoricoRetinoscopiaAlunoEstaticaEixoOe" type="text">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoEstaticaAvOe">A.V</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_estatica_avp_oe]" maxlength="100" id="HistoricoRetinoscopiaAlunoEstaticaAvOe" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Dinâmica -->
        <div class="panel panel-default">
          <div class="panel-heading">Dinâmica</div>
          <div class="panel-body">
            <!-- O.D -->
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="panel panel-default">
                <div class="panel-heading">O.D</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoDinamicaEsfOd">Esf.</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_dinamica_esf_od]" maxlength="100" id="HistoricoRetinoscopiaAlunoDinamicaEsfOd" type="text">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoDinamicaCilOd">Cil.</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_dinamica_cil_od]" maxlength="100" id="HistoricoRetinoscopiaAlunoDinamicaCilOd" type="text">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoDinamicaEixoOd">Eixo</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_dinamica_eixo_od]" maxlength="100" id="HistoricoRetinoscopiaAlunoDinamicaEixoOd" type="text">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoDinamicaAvOd">A.V</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_dinamica_avp_od]" maxlength="100" id="HistoricoRetinoscopiaAlunoDinamicaAvOd" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- O.E -->
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="panel panel-default">
                <div class="panel-heading">O.E</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoDinamicaEsfOe">Esf.</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_dinamica_esf_oe]" maxlength="100" id="HistoricoRetinoscopiaAlunoDinamicaEsfOe" type="text">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoDinamicaCilOe">Cil.</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_dinamica_cil_oe]" maxlength="100" id="HistoricoRetinoscopiaAlunoDinamicaCilOe" type="text">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoDinamicaEixoOe">Eixo</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_dinamica_eixo_oe]" maxlength="100" id="HistoricoRetinoscopiaAlunoDinamicaEixoOe" type="text">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="form-group">
                        <label for="HistoricoRetinoscopiaAlunoDinamicaAvOe">A.V</label>
                        <input class="form-control form-group" name="data[Historico][retinoscopia_aluno_dinamica_avp_oe]" maxlength="100" id="HistoricoRetinoscopiaAlunoDinamicaAvOe" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Subjetivo -->
  <div id="subjetivo" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">

                <!-- O.D -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">O.D</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoSubjetivoAlunoEsfOd">Esf.</label>
                    <input class="form-control form-group" name="data[Historico][subjetivo_aluno_esf_od]" maxlength="100" id="HistoricoSubjetivoAlunoEsfOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoSubjetivoAlunoCilOd">Cil.</label>
                    <input class="form-control form-group" name="data[Historico][subjetivo_aluno_cil_od]" maxlength="100" id="HistoricoSubjetivoAlunoCilOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoSubjetivoAlunoEixoOd">Eixo</label>
                    <input class="form-control form-group" name="data[Historico][subjetivo_aluno_eixo_od]" maxlength="100" id="HistoricoSubjetivoAlunoEixoOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoSubjetivoAlunoAvlOd">A.V.L</label>
                    <input class="form-control form-group" name="data[Historico][subjetivo_aluno_avl_od]" maxlength="100" id="HistoricoSubjetivoAlunoAvlOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoSubjetivoAlunoAvpOd">A.V.P</label>
                    <input class="form-control form-group" name="data[Historico][subjetivo_aluno_avp_od]" maxlength="100" id="HistoricoSubjetivoAlunoAvpOd" type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- O.E -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">O.E</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoSubjetivoAlunoEsfOe">Esf.</label>
                    <input class="form-control form-group" name="data[Historico][subjetivo_aluno_esf_oe]" maxlength="100" id="HistoricoSubjetivoAlunoEsfOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoSubjetivoAlunoCilOe">Cil.</label>
                    <input class="form-control form-group" name="data[Historico][subjetivo_aluno_cil_oe]" maxlength="100" id="HistoricoSubjetivoAlunoCilOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoSubjetivoAlunoEixoOe">Eixo</label>
                    <input class="form-control form-group" name="data[Historico][subjetivo_aluno_eixo_oe]" maxlength="100" id="HistoricoSubjetivoAlunoEixoOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoSubjetivoAlunoAvlOe">A.V.L</label>
                    <input class="form-control form-group" name="data[Historico][subjetivo_aluno_avl_oe]" maxlength="100" id="HistoricoSubjetivoAlunoAvlOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoSubjetivoAlunoAvpOe">A.V.P</label>
                    <input class="form-control form-group" name="data[Historico][subjetivo_aluno_avp_oe]" maxlength="100" id="HistoricoSubjetivoAlunoAvpOe" type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="HistoricoSubjetivoAlunoEsfAdd">ADD</label>
            <input class="form-control form-group" name="data[Historico][subjetivo_aluno_esf_add]" maxlength="100" id="HistoricoSubjetivoAlunoEsfAdd" type="text">
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- Afinamento -->
  <div id="afinamento" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">
        <!-- O.D -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">O.D</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAfinamentoAlunoEsfOd">Esf.</label>
                    <input class="form-control form-group" name="data[Historico][afinamento_aluno_esf_od]" maxlength="100" id="HistoricoAfinamentoAlunoEsfOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAfinamentoAlunoCilOd">Cil.</label>
                    <input class="form-control form-group" name="data[Historico][afinamento_aluno_cil_od]" maxlength="100" id="HistoricoAfinamentoAlunoCilOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAfinamentoAlunoEixoOd">Eixo</label>
                    <input class="form-control form-group" name="data[Historico][afinamento_aluno_eixo_od]" maxlength="100" id="HistoricoAfinamentoAlunoEixoOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAfinamentoAlunoAvlOd">A.V.L</label>
                    <input class="form-control form-group" name="data[Historico][afinamento_aluno_avl_od]" maxlength="100" id="HistoricoAfinamentoAlunoAvlOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAfinamentoAlunoAvpOd">A.V.P</label>
                    <input class="form-control form-group" name="data[Historico][afinamento_aluno_avp_od]" maxlength="100" id="HistoricoAfinamentoAlunoAvpOd" type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- O.E -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">O.E</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAfinamentoAlunoEsfOe">Esf.</label>
                    <input class="form-control form-group" name="data[Historico][afinamento_aluno_esf_oe]" maxlength="100" id="HistoricoAfinamentoAlunoEsfOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAfinamentoAlunoCilOe">Cil.</label>
                    <input class="form-control form-group" name="data[Historico][afinamento_aluno_cil_oe]" maxlength="100" id="HistoricoAfinamentoAlunoCilOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAfinamentoAlunoEixoOe">Eixo</label>
                    <input class="form-control form-group" name="data[Historico][afinamento_aluno_eixo_oe]" maxlength="100" id="HistoricoAfinamentoAlunoEixoOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAfinamentoAlunoAvlOe">A.V.L</label>
                    <input class="form-control form-group" name="data[Historico][afinamento_aluno_avl_oe]" maxlength="100" id="HistoricoAfinamentoAlunoAvlOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAfinamentoAlunoAvpOe">A.V.P</label>
                    <input class="form-control form-group" name="data[Historico][afinamento_aluno_avp_oe]" maxlength="100" id="HistoricoAfinamentoAlunoAvpOe" type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="HistoricoAfinamentoAlunoEsfAdd">ADD</label>
            <input class="form-control form-group" name="data[Historico][afinamento_aluno_esf_add]" maxlength="100" id="HistoricoAfinamentoAlunoEsfAdd" type="text">
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- Ambulatorial -->
  <div id="ambulatorial" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">
                <!-- O.D -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">O.D</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAmbulatorialAlunoEsfOd">Esf.</label>
                    <input class="form-control form-group" name="data[Historico][ambulatorial_aluno_esf_od]" maxlength="100" id="HistoricoAmbulatorialAlunoEsfOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAmbulatorialAlunoCilOd">Cil.</label>
                    <input class="form-control form-group" name="data[Historico][ambulatorial_aluno_cil_od]" maxlength="100" id="HistoricoAmbulatorialAlunoCilOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAmbulatorialAlunoEixoOd">Eixo</label>
                    <input class="form-control form-group" name="data[Historico][ambulatorial_aluno_eixo_od]" maxlength="100" id="HistoricoAmbulatorialAlunoEixoOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAmbulatorialAlunoAvlOd">A.V.L</label>
                    <input class="form-control form-group" name="data[Historico][ambulatorial_aluno_avl_od]" maxlength="100" id="HistoricoAmbulatorialAlunoAvlOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAmbulatorialAlunoAvpOd">A.V.P</label>
                    <input class="form-control form-group" name="data[Historico][ambulatorial_aluno_avp_od]" maxlength="100" id="HistoricoAmbulatorialAlunoAvpOd" type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- O.E -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">O.E</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAmbulatorialAlunoEsfOe">Esf.</label>
                    <input class="form-control form-group" name="data[Historico][ambulatorial_aluno_esf_oe]" maxlength="100" id="HistoricoAmbulatorialAlunoEsfOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAmbulatorialAlunoCilOe">Cil.</label>
                    <input class="form-control form-group" name="data[Historico][ambulatorial_aluno_cil_oe]" maxlength="100" id="HistoricoAmbulatorialAlunoCilOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAmbulatorialAlunoEixoOe">Eixo</label>
                    <input class="form-control form-group" name="data[Historico][ambulatorial_aluno_eixo_oe]" maxlength="100" id="HistoricoAmbulatorialAlunoEixoOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAmbulatorialAlunoAvlOe">A.V.L</label>
                    <input class="form-control form-group" name="data[Historico][ambulatorial_aluno_avl_oe]" maxlength="100" id="HistoricoAmbulatorialAlunoAvlOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAmbulatorialAlunoAvpOe">A.V.P</label>
                    <input class="form-control form-group" name="data[Historico][ambulatorial_aluno_avp_oe]" maxlength="100" id="HistoricoAmbulatorialAlunoAvpOe" type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="HistoricoAmbulatorialAlunoEsfAdd">ADD</label>
            <input class="form-control form-group" name="data[Historico][ambulatorial_aluno_esf_add]" maxlength="100" id="HistoricoAmbulatorialAlunoEsfAdd" type="text">
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- RX Final -->
  <div id="rx-final" role="tabpanel" class="tab-pane">
    <div class="container tab-container">
      <div class="row">

                <!-- O.D -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">O.D</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxFinalAlunoEsfOd">Esf.</label>
                    <input class="form-control form-group" name="data[Historico][rx_final_esf_od]" maxlength="100" id="HistoricoRxFinalAlunoEsfOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxFinalAlunoCilOd">Cil.</label>
                    <input class="form-control form-group" name="data[Historico][rx_final_cil_od]" maxlength="100" id="HistoricoRxFinalAlunoCilOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxFinalAlunoEixoOd">Eixo</label>
                    <input class="form-control form-group" name="data[Historico][rx_final_eixo_od]" maxlength="100" id="HistoricoRxFinalAlunoEixoOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxFinalAlunoAvlOd">A.V.L</label>
                    <input class="form-control form-group" name="data[Historico][rx_final_avl_od]" maxlength="100" id="HistoricoRxFinalAlunoAvlOd" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxFinalAlunoAvpOd">A.V.P</label>
                    <input class="form-control form-group" name="data[Historico][rx_final_avp_od]" maxlength="100" id="HistoricoRxFinalAlunoAvpOd" type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                        
        <!-- O.E -->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-heading">O.E</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoAmbulatorialAlunoEsfOe">Esf.</label>
                    <input class="form-control form-group" name="data[Historico][rx_final_esf_oe]" maxlength="100" id="HistoricoAmbulatorialAlunoEsfOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxFinalAlunoCilOe">Cil.</label>
                    <input class="form-control form-group" name="data[Historico][rx_final_cil_oe]" maxlength="100" id="HistoricoRxFinalAlunoCilOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxFinalAlunoEixoOe">Eixo</label>
                    <input class="form-control form-group" name="data[Historico][rx_final_eixo_oe]" maxlength="100" id="HistoricoRxFinalAlunoEixoOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxFinalAlunoAvlOe">A.V.L</label>
                    <input class="form-control form-group" name="data[Historico][rx_final_avl_oe]" maxlength="100" id="HistoricoRxFinalAlunoAvlOe" type="text">
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="HistoricoRxFinalAlunoAvpOe">A.V.P</label>
                    <input class="form-control form-group" name="data[Historico][rx_final_avp_oe]" maxlength="100" id="HistoricoRxFinalAlunoAvpOe" type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="HistoricoRxFinalAlunoEsfAdd">ADD</label>
            <input class="form-control form-group" name="data[Historico][rx_final_esf_add]" maxlength="100" id="HistoricoRxFinalAlunoEsfAdd" type="text">
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="HistoricoRxFinalTipoLente">Tipo de Lente</label>
            <input class="form-control form-group" name="data[Historico][rx_final_tipo_lente]" maxlength="100" id="HistoricoRxFinalTipoLente" type="text">
          </div>
        </div>
        
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="HistoricoRxFinalFiltro">Filtro</label>
            <input class="form-control form-group" name="data[Historico][rx_final_filtro]" maxlength="100" id="HistoricoRxFinalFiltro" type="text">
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="HistoricoRxFinalCor">Cor</label>
            <input class="form-control form-group" name="data[Historico][rx_final_cor]" maxlength="100" id="HistoricoRxFinalCor" type="text">
          </div>
        </div>
        
          <div class="col-md-12 col-sm-10 col-xs-10">
            <div class="form-group">
              <label for="HistoricoRxFinalObs">Observação</label>
              <input class="form-control form-group" name="data[Historico][rx_final_obs]" maxlength="100" id="HistoricoRxFinalObs" type="text">
            </div>
          </div>
        
      </div>
      </div>
    </div>
 </div>