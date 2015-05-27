<?php
App::uses('AppController', 'Controller');
/**
 * ResearchGroups Controller
 *
 * @property ResearchGroup $ResearchGroup
 * @property PaginatorComponent $Paginator
 */
class ResearchGroupsController extends AppController {

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
       
		$this->ResearchGroup->recursive = 0;
        $this->Paginator->settings['conditions'] = $this->ResearchGroup->parseCriteria($this->Prg->parsedParams());
		$this->set('researchGroups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ResearchGroup->exists($id)) {
			throw new NotFoundException(__('Invalid research group'));
		}
		$options = array('conditions' => array('ResearchGroup.' . $this->ResearchGroup->primaryKey => $id));
		$this->set('researchGroup', $this->ResearchGroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ResearchGroup->create();
			if ($this->ResearchGroup->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$programs = $this->ResearchGroup->Program->find('list');
		$researchGroupsCategories = $this->ResearchGroup->ResearchGroupsCategory->find('list');
		$researchGroupsTypes = $this->ResearchGroup->ResearchGroupsType->find('list');
		//$research = $this->ResearchGroup->Research->find('list');
		$this->set(compact('programs', 'researchGroupsCategories', 'researchGroupsTypes', 'research'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ResearchGroup->exists($id)) {
			throw new NotFoundException(__('Invalid research group'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ResearchGroup->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ResearchGroup.' . $this->ResearchGroup->primaryKey => $id));
			$this->request->data = $this->ResearchGroup->find('first', $options);
		}
		$programs = $this->ResearchGroup->Program->find('list');
		$researchGroupsCategories = $this->ResearchGroup->ResearchGroupsCategory->find('list');
		$researchGroupsTypes = $this->ResearchGroup->ResearchGroupsType->find('list');
		$this->set('researchGroup', $this->ResearchGroup->find('first', $options));
		$this->set(compact('programs', 'researchGroupsCategories', 'researchGroupsTypes', 'research'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ResearchGroup->id = $id;
		if (!$this->ResearchGroup->exists()) {
			throw new NotFoundException(__('Invalid research group'));
		}
		$this->request->onlyAllow('post', 'delete');
        
        try {
            if ($this->ResearchGroup->delete()) {
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
