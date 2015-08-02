<?php
App::uses('AppController', 'Controller');
/**
 * Historicos Controller
 *
 * @property Historico $Historico
 * @property PaginatorComponent $Paginator
 */
class HistoricosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Historico->recursive = 0;
		$this->set('historicos', $this->Paginator->paginate());
	}

	public function salvaPacienteAjax(){
		$this->layout = "ajax"; 
		$this->loadModel('Paciente');

		
		if ($this->request->is('get')) {
			
			$dadosSalvar = array("Paciente" => array("nome" 		=> $this->request->query['data']['Paciente']['nome'],
													 "sexo" 		=> $this->request->query['data']['Paciente']['sexo'],
													 "logradouro" 	=> $this->request->query['data']['Paciente']['logradouro'],
													 "cidade_id" 	=> $this->request->query['data']['Paciente']['cidade_id'],
													 "estado_id" 	=> $this->request->query['data']['Paciente']['estado_id'],
													 "telefone" 	=> $this->request->query['data']['Paciente']['telefone'],
													 "atividade" 	=> $this->request->query['data']['Paciente']['atividade'],	
													 "procedencia" 	=> $this->request->query['data']['Paciente']['procedencia'],
													 "rg" 			=> $this->request->query['data']['Paciente']['rg'],
													 "orgao_exp" 	=> $this->request->query['data']['Paciente']['orgao_exp'],
													 "responsavel" 	=> $this->request->query['data']['Paciente']['responsavel']));
			
			
			$this->Paciente->create();
			
			if ($this->Paciente->save($dadosSalvar)) {
				$this->Session->setFlash(__('Paciente Salvo com sucesso.'));
				$retorno = $this->Paciente->id;
			} else {
				$this->Session->setFlash(__('PAciente não foi salvo, tente novamente.'));
				$retorno = 0;
			}
		}else $retorno = 0;
		
		$this->set("retorno" , $retorno);
		
	}

	public function pacienteAjax(){
		$this->layout = "ajax"; 
		$this->loadModel('Paciente');
		
		if ($this->request->is('get')) {
			$pacientes = $this->Paciente->find('all', array('conditions' => array("Paciente.nome like '%". $this->request->query['term']."%' " ),
				'fields' => array('Paciente.nome','Paciente.id')));
		}
		
		
		foreach($pacientes as $row){
			$retorno[] = array("id" 	=> $row['Paciente']['id'],
							   "label"	=> $row['Paciente']['nome'],
							   "value"	=> $row['Paciente']['nome']);
			
		}

		$this->set('retorno', $retorno);
				
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Historico->exists($id)) {
			throw new NotFoundException(__('Invalid historico'));
		}
		$options = array('conditions' => array('Historico.' . $this->Historico->primaryKey => $id));
		$this->set('historico', $this->Historico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			$this->Historico->create();

			if ($this->Historico->save($this->request->data)) {
				$this->Session->setFlash(__('The historico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				debug($this->Historico->invalidFields());
				$this->Session->setFlash(__('The historico could not be saved. Please, try again.'.$this->log(print_r($this->Historico->validationErrors, true)) ));
			}
		}
		
		$this->loadModel('Paciente');
		$cidades = $this->Paciente->Cidade->find('list', array("fields"=> array("Cidade.nome")));
		$estados = $this->Paciente->Estado->find('list', array("fields"=> array("Estado.nome")));		
		$this->set(compact('cidades', 'estados'));

		$pacientes = $this->Historico->Paciente->find('list');
		$users = $this->Historico->User->find('list');
		$this->set(compact('pacientes', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Historico->exists($id)) {
			throw new NotFoundException(__('Invalid historico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Historico->save($this->request->data)) {
				$this->Session->setFlash(__('The historico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Historico.' . $this->Historico->primaryKey => $id));
			$this->request->data = $this->Historico->find('first', $options);
		}
		$pacientes = $this->Historico->Paciente->find('list');
		$users = $this->Historico->User->find('list');
		$this->set(compact('pacientes', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Historico->id = $id;
		if (!$this->Historico->exists()) {
			throw new NotFoundException(__('Invalid historico'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Historico->delete()) {
			$this->Session->setFlash(__('The historico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The historico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
