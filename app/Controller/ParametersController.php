<?php
App::uses('AppController', 'Controller');
/**
 * Parameters Controller
 *
 * @property Parameter $Parameter
 * @property PaginatorComponent $Paginator
 */
class ParametersController extends AppController {

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
		$this->Parameter->recursive = 0;
		$this->set('parameters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Parameter->exists($id)) {
			throw new NotFoundException(__('Invalid parameter'));
		}
		$options = array('conditions' => array('Parameter.' . $this->Parameter->primaryKey => $id));
		$this->set('parameter', $this->Parameter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Parameter->create();
			if ($this->Parameter->save($this->request->data)) {
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
		if (!$this->Parameter->exists($id)) {
			throw new NotFoundException(__('Invalid parameter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Parameter->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Parameter.' . $this->Parameter->primaryKey => $id));
			$this->request->data = $this->Parameter->find('first', $options);
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
		$this->Parameter->id = $id;
		if (!$this->Parameter->exists()) {
			throw new NotFoundException(__('Invalid parameter'));
		}
		$this->request->onlyAllow('post', 'delete');
		
        
        try {
            if ($this->Parameter->delete()) {
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
