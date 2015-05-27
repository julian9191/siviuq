<?php
App::uses('AppController', 'Controller');
/**
 * ResearchGroupsTypes Controller
 *
 * @property ResearchGroupsType $ResearchGroupsType
 * @property PaginatorComponent $Paginator
 */
class ResearchGroupsTypesController extends AppController {

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
		$this->ResearchGroupsType->recursive = 0;
		$this->set('researchGroupsTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ResearchGroupsType->exists($id)) {
			throw new NotFoundException(__('Invalid research groups type'));
		}
		$options = array('conditions' => array('ResearchGroupsType.' . $this->ResearchGroupsType->primaryKey => $id));
		$this->set('researchGroupsType', $this->ResearchGroupsType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ResearchGroupsType->create();
			if ($this->ResearchGroupsType->save($this->request->data)) {
				$this->Session->setFlash(__('El tipo ha sido guardado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tipo no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->ResearchGroupsType->exists($id)) {
			throw new NotFoundException(__('Invalid research groups type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ResearchGroupsType->save($this->request->data)) {
				$this->Session->setFlash(__('El tipo ha sido guardado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tipo no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ResearchGroupsType.' . $this->ResearchGroupsType->primaryKey => $id));
			$this->request->data = $this->ResearchGroupsType->find('first', $options);
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
		$this->ResearchGroupsType->id = $id;
		if (!$this->ResearchGroupsType->exists()) {
			throw new NotFoundException(__('Invalid research groups type'));
		}
		$this->request->onlyAllow('post', 'delete');
        
        try {
            if ($this->ResearchGroupsType->delete()) {
    			$this->Session->setFlash(__('El tipo ha sido eliminado.'), 'default', array('class' => 'alert alert-success'));
    		} else {
    			$this->Session->setFlash(__('El tipo no ha podido ser eliminado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
    		}
    		
        } catch (Exception $e) {
            $this->Session->setFlash(__('El registro seleccionado ya está siendo usado y no puede ser eliminado'), 'default', array('class' => 'alert alert-danger'));
        }
        
		return $this->redirect(array('action' => 'index'));
	}
}
