<?php
App::uses('AppController', 'Controller');
/**
 * ProjectsResearches Controller
 *
 * @property ProjectsResearch $ProjectsResearch
 * @property PaginatorComponent $Paginator
 */
class ProjectsResearchesController extends AppController {

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
            'conditions' => array('ProjectsResearch.project_id' => $idProject)
        );
       
		$this->ProjectsResearch->recursive = 0;
		$this->set('projectsResearches', $this->Paginator->paginate());
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
		if (!$this->ProjectsResearch->exists($id)) {
			throw new NotFoundException(__('Invalid projects research'));
		}
		$options = array('conditions' => array('ProjectsResearch.' . $this->ProjectsResearch->primaryKey => $id));
		$this->set('projectsResearch', $this->ProjectsResearch->find('first', $options));
        $this->set('idProject', $idProject);
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idProject) {
		if ($this->request->is('post')) {
			$this->ProjectsResearch->create();
			if ($this->ProjectsResearch->save($this->request->data)) {
				$this->Session->setFlash(__('The projects research has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idProject));
			} else {
				$this->Session->setFlash(__('The projects research could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
        
        $this->loadModel('User');
        $researchesAntes = $this->User->find('all', array(
        'joins' => array(
            array(
                'table' => 'researches',
                'alias' => 'researchesJoin',
                'type' => 'LEFT',
                'conditions' => array(
                    'researchesJoin.user_id = User.id'
                )
            )
        ), 'conditions' => array('User.user_type_id' => "1")));
        $researches = array();
        foreach ($researchesAntes as $item){
            $researches[$item['Research'][0]['id']] = $item['User']['full_name'];
        }
        
        $this->loadModel('Project');
        $projectAntes = $this->Project->find('all');
        $projects = array();
        foreach ($projectAntes as $item){
            $projects[$item['Project']['id']] = $item['Project']['resume'];
        }
        
        $this->loadModel('ResearchRole');
        $researchRolesAntes = $this->ResearchRole->find('all');
        $researchRoles = array();
        foreach ($researchRolesAntes as $item){
            $researchRoles[$item['ResearchRole']['id']] = $item['ResearchRole']['name'];
        }
        
        $this->set(compact('researches', 'projects', 'researchRoles'));
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
		if (!$this->ProjectsResearch->exists($id)) {
			throw new NotFoundException(__('Invalid projects research'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProjectsResearch->save($this->request->data)) {
				$this->Session->setFlash(__('The projects research has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idProject));
			} else {
				$this->Session->setFlash(__('The projects research could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProjectsResearch.' . $this->ProjectsResearch->primaryKey => $id));
			$this->request->data = $this->ProjectsResearch->find('first', $options);
		}
        
        $this->loadModel('User');
        $researchesAntes = $this->User->find('all', array(
        'joins' => array(
            array(
                'table' => 'researches',
                'alias' => 'researchesJoin',
                'type' => 'LEFT',
                'conditions' => array(
                    'researchesJoin.user_id = User.id'
                )
            )
        ), 'conditions' => array('User.user_type_id' => "1")));
        $researches = array();
        foreach ($researchesAntes as $item){
            $researches[$item['Research'][0]['id']] = $item['User']['full_name'];
        }
        
        $this->loadModel('Project');
        $projectAntes = $this->Project->find('all');
        $projects = array();
        foreach ($projectAntes as $item){
            $projects[$item['Project']['id']] = $item['Project']['resume'];
        }
        
        $this->loadModel('ResearchRole');
        $researchRolesAntes = $this->ResearchRole->find('all');
        $researchRoles = array();
        foreach ($researchRolesAntes as $item){
            $researchRoles[$item['ResearchRole']['id']] = $item['ResearchRole']['name'];
        }
        
        $this->set(compact('researches', 'projects', 'researchRoles'));
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
		$this->ProjectsResearch->id = $id;
		if (!$this->ProjectsResearch->exists()) {
			throw new NotFoundException(__('Invalid projects research'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjectsResearch->delete()) {
			$this->Session->setFlash(__('The projects research has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The projects research could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index', $idProject));
        $this->set('idProject', $idProject);
	}
}
