<?php
App::uses('AppController', 'Controller');
/**
 * Caminhaos Controller
 *
 * @property Caminhao $Caminhao
 * @property PaginatorComponent $Paginator
 */
class CaminhaosController extends AppController {

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
		$this->Caminhao->recursive = 0;
		$this->set('caminhaos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Caminhao->exists($id)) {
			throw new NotFoundException(__('Invalid caminhao'));
		}
		$options = array('conditions' => array('Caminhao.' . $this->Caminhao->primaryKey => $id));
		$this->set('caminhao', $this->Caminhao->find('first', $options));
	}
 
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Caminhao->create();
			if ($this->Caminhao->save($this->request->data)) {
				$this->Session->setFlash(__('The caminhao foi salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caminhao could not be saved. Please, try again.'));
			}
		}
		$marcas = $this->Caminhao->Marca->find('list',array('fields' => 'Marca.descricao'));
		$modelos = $this->Caminhao->Modelo->find('list',array('fields' => 'Modelo.descricao'));
		
		$this->set(compact('marcas', 'modelos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Caminhao->exists($id)) {
			throw new NotFoundException(__('Invalid caminhao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Caminhao->save($this->request->data)) {
				$this->Session->setFlash(__('The caminhao foi salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caminhao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Caminhao.' . $this->Caminhao->primaryKey => $id));
			$this->request->data = $this->Caminhao->find('first', $options);
		}
		$marcas = $this->Caminhao->Marca->find('list',array('fields' => 'Marca.descricao'));
		$modelos = $this->Caminhao->Modelo->find('list',array('fields' => 'Modelo.descricao'));
		
		$this->set(compact('marcas', 'modelos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Caminhao->id = $id;
		if (!$this->Caminhao->exists()) {
			throw new NotFoundException(__('Invalid caminhao'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Caminhao->delete()) {
			$this->Session->setFlash(__('The caminhao foi deletado com sucesso.'));
		} else {
			$this->Session->setFlash(__('The caminhao não pode ser salvo. Tente novamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
