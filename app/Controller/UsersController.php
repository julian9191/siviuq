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
	public $components = array('Paginator', 'Search.Prg');
    public $presetVars = array(
        array('field' => 'cod', 'type' => 'value'),
        array('field' => 'nombre', 'type' => 'value')
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
	   $this->Prg->commonProcess();
       
		$this->User->recursive = 0;
        $this->Paginator->settings['conditions'] = $this->User->parseCriteria($this->Prg->parsedParams());
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
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cities = $this->User->City->find('list');
		$departaments = $this->User->Departament->find('list');
		$userTypes = $this->User->UserType->find('list', array('conditions' => array('NOT' => array('UserType.id' => '1'))));
		$this->set(compact('cities', 'departaments', 'userTypes'));
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
				$this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$cities = $this->User->City->find('list');
		$departaments = $this->User->Departament->find('list');
		$userTypes = $this->User->UserType->find('list');
		$this->set(compact('cities', 'departaments', 'userTypes'));
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
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
    
    
    
    
 //INVESTIGADORES---------------------------------------------------------------------------------------------------------------------------
 
 
 
 
 /**
 * index method
 *
 * @return void
 */
	public function indexResearch() {
	   
       $this->Prg->commonProcess();
       
       $condiciones = $this->User->parseCriteria($this->Prg->parsedParams());
       $condiciones['User.user_type_id'] = '1';
       
	   //Where user_type_id es investigador
        $this->Paginator->settings = array(
            'conditions' => $condiciones
        );
       
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function viewResearch($id = null) {
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
	public function addResearch() {
		if ($this->request->is('post')) {
			$this->User->create();
            
			if ($this->User->save($this->request->data)) {
			     $idUsuario = $this->User->getLastInsertId();
                 $this->insertarEnResearch($idUsuario);
             
				//$this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				//return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cities = $this->User->City->find('list');
		$departaments = $this->User->Departament->find('list');
        //Listar solo investigadores        
		$userTypes = $this->User->UserType->find('list', array('conditions' => array('UserType.id' => '1')));
		$this->set(compact('cities', 'departaments', 'userTypes'));
        
	}
    
    public function insertarEnResearch($idUsuario){

        //Se carga el modelo diferente al correspondiente del controlador
        $this->loadModel('Research');
        if ($this->request->is('post')) {
			$this->Research->create();
            
            $dataModificado['Research']['user_id'] = $idUsuario;
            //echo json_encode($dataModificado);
			if ($this->Research->save($dataModificado)) {
			 
				$this->Session->setFlash(__('El investigador ha sido insertado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'indexResearch'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
	public function editResearch($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'indexResearch'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$cities = $this->User->City->find('list');
		$departaments = $this->User->Departament->find('list');
		$userTypes = $this->User->UserType->find('list', array('conditions' => array('UserType.id' => '1')));
		$this->set(compact('cities', 'departaments', 'userTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function deleteResearch($id = null) {
	   $this->eliminarEnResearch($id);
       
       $this->loadModel('User');
		$this->User->id = $id;
		        
        if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		//$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
		      
			$this->Session->setFlash(__('The user has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'indexResearch'));
	}
    
    
    public function eliminarEnResearch($idUsuario = null) {
        $this->loadModel('Research');

        $idInvestigador = $this->Research->find('all', array('conditions' => array('Research.user_id' => $idUsuario)));
        
        if(sizeof($idInvestigador) == 0){
            return;
        }
        
        $idInvestigador = $idInvestigador[0]['Research']['id'];

        $this->Research->id = $idInvestigador;
		if (!$this->Research->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		//$this->request->onlyAllow('post', 'delete');
		if ($this->Research->delete()) {
			//$this->Session->setFlash(__('The Research has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			//$this->Session->setFlash(__('The Research could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		//return $this->redirect(array('action' => 'indexResearch'));
	}
 
 
 //PERFIL-------------------------------------------------------------------------------------------------------------------------------------
 /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function viewProfile($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}
 
 /**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editProfile($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'indexResearch'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$cities = $this->User->City->find('list');
		$departaments = $this->User->Departament->find('list');
		$userTypes = $this->User->UserType->find('list', array('conditions' => array('UserType.id' => '1')));
		$this->set(compact('cities', 'departaments', 'userTypes'));
	}
 
    
}
