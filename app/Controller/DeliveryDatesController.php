<?php
App::uses('AppController', 'Controller');
/**
 * DeliveryDates Controller
 *
 * @property DeliveryDate $DeliveryDate
 * @property PaginatorComponent $Paginator
 */
class DeliveryDatesController extends AppController {

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
            'conditions' => array('DeliveryDate.project_id' => $idProject)
        );
       
		$this->DeliveryDate->recursive = 0;
		$this->set('deliveryDates', $this->Paginator->paginate());
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
		if (!$this->DeliveryDate->exists($id)) {
			throw new NotFoundException(__('Invalid delivery date'));
		}
		$options = array('conditions' => array('DeliveryDate.' . $this->DeliveryDate->primaryKey => $id));
		$this->set('deliveryDate', $this->DeliveryDate->find('first', $options));
        $this->set('idProject', $idProject);
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idProject) {
		if ($this->request->is('post')) {
			$this->DeliveryDate->create();
			if ($this->DeliveryDate->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idProject));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$notificationsTemplates = $this->DeliveryDate->NotificationsTemplate->find('list');
		$projects = $this->DeliveryDate->Project->find('list');
		$this->set(compact('notificationsTemplates', 'projects'));
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
		if (!$this->DeliveryDate->exists($id)) {
			throw new NotFoundException(__('Invalid delivery date'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DeliveryDate->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idProject));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('DeliveryDate.' . $this->DeliveryDate->primaryKey => $id));
			$this->request->data = $this->DeliveryDate->find('first', $options);
		}
		$notificationsTemplates = $this->DeliveryDate->NotificationsTemplate->find('list');
		$projects = $this->DeliveryDate->Project->find('list');
		$this->set(compact('notificationsTemplates', 'projects'));
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
		$this->DeliveryDate->id = $id;
		if (!$this->DeliveryDate->exists()) {
			throw new NotFoundException(__('Invalid delivery date'));
		}
		$this->request->onlyAllow('post', 'delete');
		
        try {
            if ($this->DeliveryDate->delete()) {
    			$this->Session->setFlash(__('El registro ha sido eliminado.'), 'default', array('class' => 'alert alert-success'));
    		} else {
    			$this->Session->setFlash(__('El registro no ha podido ser eliminado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
    		}
    		
        } catch (Exception $e) {
            $this->Session->setFlash(__('El registro seleccionado ya está siendo usado y no puede ser eliminado'), 'default', array('class' => 'alert alert-danger'));
        }
        
		return $this->redirect(array('action' => 'index', $idProject));
        $this->set('idProject', $idProject);
	}
}
