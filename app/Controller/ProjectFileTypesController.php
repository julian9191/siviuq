<?php
App::uses('AppController', 'Controller');
/**
 * ProjectFileTypes Controller
 *
 * @property ProjectFileType $ProjectFileType
 * @property PaginatorComponent $Paginator
 */
class ProjectFileTypesController extends AppController {

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
		$this->ProjectFileType->recursive = 0;
		$this->set('projectFileTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProjectFileType->exists($id)) {
			throw new NotFoundException(__('Invalid project file type'));
		}
		$options = array('conditions' => array('ProjectFileType.' . $this->ProjectFileType->primaryKey => $id));
		$this->set('projectFileType', $this->ProjectFileType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjectFileType->create();
			if ($this->ProjectFileType->save($this->request->data)) {
				$this->Session->setFlash(__('The project file type has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project file type could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->ProjectFileType->exists($id)) {
			throw new NotFoundException(__('Invalid project file type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProjectFileType->save($this->request->data)) {
				$this->Session->setFlash(__('The project file type has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project file type could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProjectFileType.' . $this->ProjectFileType->primaryKey => $id));
			$this->request->data = $this->ProjectFileType->find('first', $options);
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
		$this->ProjectFileType->id = $id;
		if (!$this->ProjectFileType->exists()) {
			throw new NotFoundException(__('Invalid project file type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjectFileType->delete()) {
			$this->Session->setFlash(__('The project file type has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The project file type could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
