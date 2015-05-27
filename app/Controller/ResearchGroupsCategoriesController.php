<?php
App::uses('AppController', 'Controller');
/**
 * ResearchGroupsCategories Controller
 *
 * @property ResearchGroupsCategory $ResearchGroupsCategory
 * @property PaginatorComponent $Paginator
 */
class ResearchGroupsCategoriesController extends AppController {

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
		$this->ResearchGroupsCategory->recursive = 0;
		$this->set('researchGroupsCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ResearchGroupsCategory->exists($id)) {
			throw new NotFoundException(__('Invalid research groups category'));
		}
		$options = array('conditions' => array('ResearchGroupsCategory.' . $this->ResearchGroupsCategory->primaryKey => $id));
		$this->set('researchGroupsCategory', $this->ResearchGroupsCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ResearchGroupsCategory->create();
			if ($this->ResearchGroupsCategory->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->ResearchGroupsCategory->exists($id)) {
			throw new NotFoundException(__('Invalid research groups category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ResearchGroupsCategory->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ResearchGroupsCategory.' . $this->ResearchGroupsCategory->primaryKey => $id));
			$this->request->data = $this->ResearchGroupsCategory->find('first', $options);
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
		$this->ResearchGroupsCategory->id = $id;
		if (!$this->ResearchGroupsCategory->exists()) {
			throw new NotFoundException(__('Invalid research groups category'));
		}
		$this->request->onlyAllow('post', 'delete');
        
        try {
            if ($this->ResearchGroupsCategory->delete()) {
    			$this->Session->setFlash(__('El registro ha sido eliminado'), 'default', array('class' => 'alert alert-success'));
    		} else {
    			$this->Session->setFlash(__('El registro no ha podido ser eliminado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
    		}
    		
        } catch (Exception $e) {
            $this->Session->setFlash(__('El registro seleccionado ya está siendo usado y no puede ser eliminado'), 'default', array('class' => 'alert alert-danger'));
        }
        
		return $this->redirect(array('action' => 'index'));
	}
}
