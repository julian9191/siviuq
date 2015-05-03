<?php
App::uses('AppController', 'Controller');
/**
 * ResearchRoles Controller
 *
 * @property ResearchRole $ResearchRole
 * @property PaginatorComponent $Paginator
 */
class ResearchRolesController extends AppController {

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
		$this->ResearchRole->recursive = 0;
		$this->set('researchRoles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ResearchRole->exists($id)) {
			throw new NotFoundException(__('Invalid research role'));
		}
		$options = array('conditions' => array('ResearchRole.' . $this->ResearchRole->primaryKey => $id));
		$this->set('researchRole', $this->ResearchRole->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ResearchRole->create();
			if ($this->ResearchRole->save($this->request->data)) {
				$this->Session->setFlash(__('The research role has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The research role could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->ResearchRole->exists($id)) {
			throw new NotFoundException(__('Invalid research role'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ResearchRole->save($this->request->data)) {
				$this->Session->setFlash(__('The research role has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The research role could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ResearchRole.' . $this->ResearchRole->primaryKey => $id));
			$this->request->data = $this->ResearchRole->find('first', $options);
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
		$this->ResearchRole->id = $id;
		if (!$this->ResearchRole->exists()) {
			throw new NotFoundException(__('Invalid research role'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ResearchRole->delete()) {
			$this->Session->setFlash(__('The research role has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The research role could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
