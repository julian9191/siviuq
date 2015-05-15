<?php
App::uses('AppController', 'Controller');
/**
 * Projects Controller
 *
 * @property Project $Project
 * @property PaginatorComponent $Paginator
 */
class ProjectsController extends AppController {

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
		$this->Project->recursive = 0;
        
        $this->Paginator->settings['conditions'] = $this->Project->parseCriteria($this->Prg->parsedParams());
		$this->set('projects', $this->Paginator->paginate());
	}
    
    public function indexResearchProjects($idResearch = null) {
	    $this->Prg->commonProcess();
		$this->Project->recursive = 0;
        
        $this->paginate = array(
                                    'conditions' => array_merge($this->Project->parseCriteria($this->Prg->parsedParams()), array('ProjectsResearch.researche_id' => $idResearch)),
                                    'joins' => array(
                                        array(
                                            'alias' => 'ProjectsResearch',
                                            'table' => 'projects_researches',
                                            'type' => 'LEFT',
                                            'conditions' => '`ProjectsResearch`.`project_id` = `Project`.`id`'
                                        )
                                      ),
                                        'limit' => 20,
                            );
                            

		$this->set('projects', $this->Paginator->paginate());
        $this->set('idResearch', $idResearch);
	}
    
    

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Project->create();
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$projectStates = $this->Project->ProjectState->find('list');
		$investigationLines = $this->Project->InvestigationLine->find('list');
		$convocatories = $this->Project->Convocatory->find('list');
		$this->set(compact('projectStates', 'investigationLines', 'convocatories', 'research'));
	}
    
    public function addProjectConvocatory($idConvocatory = null) {
		if ($this->request->is('post')) {
			$this->Project->create();
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$projectStates = $this->Project->ProjectState->find('list');
		$investigationLines = $this->Project->InvestigationLine->find('list');
		$convocatories = $this->Project->Convocatory->find('list', array('conditions' => array('Convocatory.id' => $idConvocatory)));
		$this->set(compact('projectStates', 'investigationLines', 'convocatories', 'research'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
			$this->request->data = $this->Project->find('first', $options);
		}
		$projectStates = $this->Project->ProjectState->find('list');
		$investigationLines = $this->Project->InvestigationLine->find('list');
		$convocatories = $this->Project->Convocatory->find('list');
		$this->set(compact('projectStates', 'investigationLines', 'convocatories', 'research'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Project->delete()) {
			$this->Session->setFlash(__('The project has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The project could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
    
    public function projectsConvocatory($idConvocatory = null) {
        
        //Where user_type_id es investigador
        $this->Paginator->settings = array(
            'conditions' => array('Project.convocatory_id' => $idConvocatory)
        );
        
		$this->Project->recursive = 0;
		$this->set('projects', $this->Paginator->paginate());
	}
}
