<?php
App::uses('AppController', 'Controller');
/**
 * Faculties Controller
 *
 * @property Faculty $Faculty
 * @property PaginatorComponent $Paginator
 */
class FacultiesController extends AppController {

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
		$this->Faculty->recursive = 0;
		$this->set('faculties', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Faculty->exists($id)) {
			throw new NotFoundException(__('Invalid faculty'));
		}
		$options = array('conditions' => array('Faculty.' . $this->Faculty->primaryKey => $id));
		$this->set('faculty', $this->Faculty->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Faculty->create();
			if ($this->Faculty->save($this->request->data)) {
				$this->Session->setFlash(__('La facultad se ha creado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se ha creado la facultad. Por favor, Intente de nuevo.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Faculty->exists($id)) {
			throw new NotFoundException(__('Invalid faculty'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Faculty->save($this->request->data)) {
				$this->Session->setFlash(__('La facultad se ha creado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Faculty.' . $this->Faculty->primaryKey => $id));
			$this->request->data = $this->Faculty->find('first', $options);
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
		$this->Faculty->id = $id;
		if (!$this->Faculty->exists()) {
			throw new NotFoundException(__('Invalid faculty'));
		}
		$this->request->onlyAllow('post', 'delete');
        
        try {
            if ($this->Faculty->delete()) {
    			$this->Session->setFlash(__('La facultad ha sido eliminada.'), 'default', array('class' => 'alert alert-success'));
    		} else {
    			$this->Session->setFlash(__('El registro no ha podido ser eliminado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
    		}
    		
        } catch (Exception $e) {
            $this->Session->setFlash(__('El registro seleccionado ya está siendo usado y no puede ser eliminado'), 'default', array('class' => 'alert alert-danger'));
        }
        
		return $this->redirect(array('action' => 'index'));
	}
}
