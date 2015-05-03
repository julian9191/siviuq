<?php
App::uses('AppController', 'Controller');
/**
 * ProjectStates Controller
 *
 * @property ProjectState $ProjectState
 * @property PaginatorComponent $Paginator
 */
class ProjectStatesController extends AppController {

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
		$this->ProjectState->recursive = 0;
		$this->set('projectStates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProjectState->exists($id)) {
			throw new NotFoundException(__('Invalid project state'));
		}
		$options = array('conditions' => array('ProjectState.' . $this->ProjectState->primaryKey => $id));
		$this->set('projectState', $this->ProjectState->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjectState->create();
			if ($this->ProjectState->save($this->request->data)) {
				$this->Session->setFlash(__('The project state has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project state could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->ProjectState->exists($id)) {
			throw new NotFoundException(__('Invalid project state'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProjectState->save($this->request->data)) {
				$this->Session->setFlash(__('The project state has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project state could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProjectState.' . $this->ProjectState->primaryKey => $id));
			$this->request->data = $this->ProjectState->find('first', $options);
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
		$this->ProjectState->id = $id;
		if (!$this->ProjectState->exists()) {
			throw new NotFoundException(__('Invalid project state'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjectState->delete()) {
			$this->Session->setFlash(__('The project state has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The project state could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
