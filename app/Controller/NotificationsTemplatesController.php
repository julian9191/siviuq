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
		$this->NotificationsTemplate->recursive = 0;
        $this->Paginator->settings['conditions'] = $this->NotificationsTemplate->parseCriteria($this->Prg->parsedParams());
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
		if (!$this->NotificationsTemplate->exists($id)) {
			throw new NotFoundException(__('Invalid notifications template'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->NotificationsTemplate->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
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

        try {
            if ($this->NotificationsTemplate->delete()) {
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
