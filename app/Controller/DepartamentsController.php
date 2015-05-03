<?php
App::uses('AppController', 'Controller');
/**
 * Departaments Controller
 *
 * @property Departament $Departament
 * @property PaginatorComponent $Paginator
 */
class DepartamentsController extends AppController {

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
		$this->Departament->recursive = 0;
		$this->set('departaments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Departament->exists($id)) {
			throw new NotFoundException(__('Invalid departament'));
		}
		$options = array('conditions' => array('Departament.' . $this->Departament->primaryKey => $id));
		$this->set('departament', $this->Departament->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Departament->create();
			if ($this->Departament->save($this->request->data)) {
				$this->Session->setFlash(__('The departament has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The departament could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Departament->exists($id)) {
			throw new NotFoundException(__('Invalid departament'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Departament->save($this->request->data)) {
				$this->Session->setFlash(__('The departament has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The departament could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Departament.' . $this->Departament->primaryKey => $id));
			$this->request->data = $this->Departament->find('first', $options);
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
		$this->Departament->id = $id;
		if (!$this->Departament->exists()) {
			throw new NotFoundException(__('Invalid departament'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Departament->delete()) {
			$this->Session->setFlash(__('The departament has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The departament could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
