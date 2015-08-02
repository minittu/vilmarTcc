<?php
App::uses('AppController', 'Controller');
/**
 * TpAvarias Controller
 *
 * @property TpAvaria $TpAvaria
 * @property PaginatorComponent $Paginator
 */
class TpAvariasController extends AppController {

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
		$this->TpAvaria->recursive = 0;
		$this->set('tpAvarias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TpAvaria->exists($id)) {
			throw new NotFoundException(__('Invalid tp avaria'));
		}
		$options = array('conditions' => array('TpAvaria.' . $this->TpAvaria->primaryKey => $id));
		$this->set('tpAvaria', $this->TpAvaria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TpAvaria->create();
			if ($this->TpAvaria->save($this->request->data)) {
				$this->Session->setFlash(__('The tp avaria foi salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tp avaria could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TpAvaria->exists($id)) {
			throw new NotFoundException(__('Invalid tp avaria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TpAvaria->save($this->request->data)) {
				$this->Session->setFlash(__('The tp avaria foi salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tp avaria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TpAvaria.' . $this->TpAvaria->primaryKey => $id));
			$this->request->data = $this->TpAvaria->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TpAvaria->id = $id;
		if (!$this->TpAvaria->exists()) {
			throw new NotFoundException(__('Invalid tp avaria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TpAvaria->delete()) {
			$this->Session->setFlash(__('The tp avaria has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tp avaria could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
