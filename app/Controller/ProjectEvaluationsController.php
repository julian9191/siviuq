<?php
App::uses('AppController', 'Controller');
/**
 * ProjectEvaluations Controller
 *
 * @property ProjectEvaluation $ProjectEvaluation
 * @property PaginatorComponent $Paginator
 */
class ProjectEvaluationsController extends AppController {

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
		$this->ProjectEvaluation->recursive = 0;
        $this->Paginator->settings['conditions'] = $this->ProjectEvaluation->parseCriteria($this->Prg->parsedParams());
		$this->set('projectEvaluations', $this->Paginator->paginate());
	}
    
   	public function projectEvaluation($idProject) {
   	    
        //Where user_type_id es investigador
        $this->Paginator->settings = array(
            'conditions' => array('ProjectEvaluation.projects_id' => $idProject)
        );
        
		$this->ProjectEvaluation->recursive = 0;
		$this->set('projectEvaluations', $this->Paginator->paginate());
        $this->set('idProject', $idProject);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function viewProjectEvaluation($id = null, $idProject) {
		if (!$this->ProjectEvaluation->exists($id)) {
			throw new NotFoundException(__('Invalid project evaluation'));
		}
		$options = array('conditions' => array('ProjectEvaluation.' . $this->ProjectEvaluation->primaryKey => $id));
		$this->set('projectEvaluation', $this->ProjectEvaluation->find('first', $options));
        $this->set('idProject', $idProject);
	}
    
    public function view($id = null) {
		if (!$this->ProjectEvaluation->exists($id)) {
			throw new NotFoundException(__('Invalid project evaluation'));
		}
		$options = array('conditions' => array('ProjectEvaluation.' . $this->ProjectEvaluation->primaryKey => $id));
		$this->set('projectEvaluation', $this->ProjectEvaluation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjectEvaluation->create();
			if ($this->ProjectEvaluation->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		//$projects = $this->ProjectEvaluation->Project->find('list');
        
        
        $this->loadModel('Project');
        $projectAntes = $this->Project->find('all');
        $projects = array();
        foreach ($projectAntes as $item){
            $projects[$item['Project']['id']] = $item['Project']['resume'];
        }
        
		$this->set(compact('projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProjectEvaluation->exists($id)) {
			throw new NotFoundException(__('Invalid project evaluation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProjectEvaluation->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProjectEvaluation.' . $this->ProjectEvaluation->primaryKey => $id));
			$this->request->data = $this->ProjectEvaluation->find('first', $options);
		}
		//$projects = $this->ProjectEvaluation->Project->find('list');
        
        $this->loadModel('Project');
        $projectAntes = $this->Project->find('all');
        $projects = array();
        foreach ($projectAntes as $item){
            $projects[$item['Project']['id']] = $item['Project']['resume'];
        }
        
		$this->set(compact('projects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProjectEvaluation->id = $id;
		if (!$this->ProjectEvaluation->exists()) {
			throw new NotFoundException(__('Invalid project evaluation'));
		}
		$this->request->onlyAllow('post', 'delete');

        try {
            if ($this->ProjectEvaluation->delete()) {
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
