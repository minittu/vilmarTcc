<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		 
		 //echo $this->Auth->user("username");
	  	 //echo $this->Auth->user("role");

		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Usuário salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Usuário não pode ser salvo, contacte o administrador do sistema.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/* 
	*	LOGIN
	*/	
	public function login() {
	    if ($this->Auth->login()) {
	        
	        $diretorio_tmp = WWW_ROOT."img".DS.$this->Auth->user('matricula')."-".$this->Auth->user('username')."-temp";
	        $diretorio 	   = WWW_ROOT."img".DS.$this->Auth->user('matricula')."-".$this->Auth->user('username');

			// CRIA O DIRETÓRIO DE DESTINO
		   	if (!is_dir($diretorio_tmp)) {
		    	mkdir($diretorio_tmp);
		      
		   	}else{
		   		
		   		if(!is_dir($diretorio)){
		   			mkdir($diretorio);
		   		
		   		}

		   		/*$scan = scandir($diretorio_tmp);
				
				if(count($scan) > 2) {

					//copia diretorio temp para o destino
					$this->copiar_diretorio($diretorio_tmp,$diretorio);

				}
				else {
					echo 'Diretório vazio';
				}*/

		   	}
		   	$this->redirect($this->Auth->redirect());

	    } else {
	        //$this->Session->setFlash(__('Login ou password inválidos, tente novamente'));
	    }
	}

	public function logout() {
	    $this->redirect($this->Auth->logout());
	}


	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('add'); // Permitindo que os usuários se registrem
	}

	private function copiar_diretorio($diretorio, $destino, $ver_acao = false){
      
      if ($destino{strlen($destino) - 1} == '/'){
      	$destino = substr($destino, 0, -1);
        
      }

      if (!is_dir($destino)) {
         if ($ver_acao){
            echo "Criando diretorio {$destino}\n"; 
         }

         mkdir($destino, 0755);
      }
        
      $folder = opendir($diretorio);
       
      while ($item = readdir($folder)){
         if ($item == '.' || $item == '..'){
            continue;
            }
         if (is_dir("{$diretorio}/{$item}")){
            copy_dir("{$diretorio}/{$item}", "{$destino}/{$item}", $ver_acao);
            unlink("{$diretorio}/{$item}");
         }else{
            if ($ver_acao){
               echo "Copiando {$item} para {$destino}"."\n";
            }
            copy("{$diretorio}/{$item}", "{$destino}/{$item}");
            unlink("{$diretorio}/{$item}");

            }
      }
   }

}
