<?php
App::uses('AppController', 'Controller');
/**
 * NotificationsTemplates Controller
 *
 * @property NotificationsTemplate $NotificationsTemplate
 * @property PaginatorComponent $Paginator
 */
class NotificationsTemplatesController extends AppController {

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
		$this->NotificationsTemplate->recursive = 0;
		$this->set('notificationsTemplates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->NotificationsTemplate->exists($id)) {
			throw new NotFoundException(__('Invalid notifications template'));
		}
		$options = array('conditions' => array('NotificationsTemplate.' . $this->NotificationsTemplate->primaryKey => $id));
		$this->set('notificationsTemplate', $this->NotificationsTemplate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NotificationsTemplate->create();
			if ($this->NotificationsTemplate->save($this->request->data)) {
				$this->Session->setFlash(__('The notifications template has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notifications template could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->NotificationsTemplate->exists($id)) {
			throw new NotFoundException(__('Invalid notifications template'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->NotificationsTemplate->save($this->request->data)) {
				$this->Session->setFlash(__('The notifications template has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notifications template could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('NotificationsTemplate.' . $this->NotificationsTemplate->primaryKey => $id));
			$this->request->data = $this->NotificationsTemplate->find('first', $options);
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
		$this->NotificationsTemplate->id = $id;
		if (!$this->NotificationsTemplate->exists()) {
			throw new NotFoundException(__('Invalid notifications template'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->NotificationsTemplate->delete()) {
			$this->Session->setFlash(__('The notifications template has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The notifications template could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
