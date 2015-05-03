<?php
App::uses('AppController', 'Controller');
/**
 * ProjectProducts Controller
 *
 * @property ProjectProduct $ProjectProduct
 * @property PaginatorComponent $Paginator
 */
class ProjectProductsController extends AppController {

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
	public function index($idProject) {
	   
       //Where user_type_id es investigador
        $this->Paginator->settings = array(
            'conditions' => array('ProjectProduct.project_id' => $idProject)
        );
       
		$this->ProjectProduct->recursive = 0;
		$this->set('projectProducts', $this->Paginator->paginate());
        $this->set('idProject', $idProject);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null, $idProject) {
		if (!$this->ProjectProduct->exists($id)) {
			throw new NotFoundException(__('Invalid project product'));
		}
		$options = array('conditions' => array('ProjectProduct.' . $this->ProjectProduct->primaryKey => $id));
		$this->set('projectProduct', $this->ProjectProduct->find('first', $options));
        $this->set('idProject', $idProject);
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idProject) {
		if ($this->request->is('post')) {
			$this->ProjectProduct->create();
			if ($this->ProjectProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The project product has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idProject));
			} else {
				$this->Session->setFlash(__('The project product could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$projects = $this->ProjectProduct->Project->find('list');
		$this->set(compact('projects'));
        $this->set('idProject', $idProject);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $idProject) {
		if (!$this->ProjectProduct->exists($id)) {
			throw new NotFoundException(__('Invalid project product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProjectProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The project product has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idProject));
			} else {
				$this->Session->setFlash(__('The project product could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProjectProduct.' . $this->ProjectProduct->primaryKey => $id));
			$this->request->data = $this->ProjectProduct->find('first', $options);
		}
		$projects = $this->ProjectProduct->Project->find('list');
		$this->set(compact('projects'));
        $this->set('idProject', $idProject);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $idProject) {
		$this->ProjectProduct->id = $id;
		if (!$this->ProjectProduct->exists()) {
			throw new NotFoundException(__('Invalid project product'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjectProduct->delete()) {
			$this->Session->setFlash(__('The project product has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The project product could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index', $idProject));
        $this->set('idProject', $idProject);
	}
}
