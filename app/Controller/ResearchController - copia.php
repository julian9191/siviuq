<?php
App::uses('AppController', 'Controller');
/**
 * Research Controller
 *
 * @property Research $Research
 * @property PaginatorComponent $Paginator
 */
class ResearchController extends AppController {

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
		$this->Research->recursive = 0;
		$this->set('research', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Research->exists($id)) {
			throw new NotFoundException(__('Invalid research'));
		}
		$options = array('conditions' => array('Research.' . $this->Research->primaryKey => $id));
		$this->set('research', $this->Research->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Research->create();
			if ($this->Research->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Research->User->find('list');
		$projects = $this->Research->Project->find('list');
		$researchGroups = $this->Research->ResearchGroup->find('list');
		$this->set(compact('users', 'projects', 'researchGroups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Research->exists($id)) {
			throw new NotFoundException(__('Invalid research'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Research->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Research.' . $this->Research->primaryKey => $id));
			$this->request->data = $this->Research->find('first', $options);
		}
		$users = $this->Research->User->find('list');
		$projects = $this->Research->Project->find('list');
		$researchGroups = $this->Research->ResearchGroup->find('list');
		$this->set(compact('users', 'projects', 'researchGroups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Research->id = $id;
		if (!$this->Research->exists()) {
			throw new NotFoundException(__('Invalid research'));
		}
		$this->request->onlyAllow('post', 'delete');

        try {
            if ($this->Research->delete()) {
    			$this->Session->setFlash(__('El registro ha sido eliminado.'), 'default', array('class' => 'alert alert-success'));
    		} else {
    			$this->Session->setFlash(__('El registro no ha podido ser eliminado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
    		}
    		
        } catch (Exception $e) {
            $this->Session->setFlash(__('El registro seleccionado ya está siendo usado y no puede ser eliminado'), 'default', array('class' => 'alert alert-danger'));
        }
        
		return $this->redirect(array('action' => 'index'));
	}
}
