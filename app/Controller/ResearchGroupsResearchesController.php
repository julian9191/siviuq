<?php
App::uses('AppController', 'Controller');
/**
 * ResearchGroupsResearches Controller
 *
 * @property ResearchGroupsResearch $ResearchGroupsResearch
 * @property PaginatorComponent $Paginator
 */
class ResearchGroupsResearchesController extends AppController {

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
	public function index($idResearchGroup) {
	   
       //Where user_type_id es investigador
        $this->Paginator->settings = array(
            'conditions' => array('ResearchGroupsResearch.research_group_id' => $idResearchGroup)
        );
       
		$this->ResearchGroupsResearch->recursive = 0;
		$this->set('researchGroupsResearches', $this->Paginator->paginate());
        $this->set('idResearchGroup', $idResearchGroup);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null, $idResearchGroup) {
		if (!$this->ResearchGroupsResearch->exists($id)) {
			throw new NotFoundException(__('Invalid research groups research'));
		}
		$options = array('conditions' => array('ResearchGroupsResearch.' . $this->ResearchGroupsResearch->primaryKey => $id));
		$this->set('researchGroupsResearch', $this->ResearchGroupsResearch->find('first', $options));
        $this->set('idResearchGroup', $idResearchGroup);
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idResearchGroup) {
		if ($this->request->is('post')) {
		  
          echo json_encode($this->request->data);
          
			$this->ResearchGroupsResearch->create();
			if ($this->ResearchGroupsResearch->save($this->request->data)) {
				$this->Session->setFlash(__('The research groups research has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idResearchGroup));
			} else {
				$this->Session->setFlash(__('The research groups research could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
        
        $this->loadModel('ResearchGroup');
        $researchGroupsAntes = $this->ResearchGroup->find('all');
        $researchGroups = array();
        foreach ($researchGroupsAntes as $item){
            $researchGroups[$item['ResearchGroup']['id']] = $item['ResearchGroup']['name'];
        }
        
        $this->set(compact('researches', 'researchGroups'));
        $this->set('idResearchGroup', $idResearchGroup);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $idResearchGroup) {
		if (!$this->ResearchGroupsResearch->exists($id)) {
			throw new NotFoundException(__('Invalid research groups research'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ResearchGroupsResearch->save($this->request->data)) {
				$this->Session->setFlash(__('The research groups research has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idResearchGroup));
			} else {
				$this->Session->setFlash(__('The research groups research could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ResearchGroupsResearch.' . $this->ResearchGroupsResearch->primaryKey => $id));
			$this->request->data = $this->ResearchGroupsResearch->find('first', $options);
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
        
        $this->loadModel('ResearchGroup');
        $researchGroupsAntes = $this->ResearchGroup->find('all');
        $researchGroups = array();
        foreach ($researchGroupsAntes as $item){
            $researchGroups[$item['ResearchGroup']['id']] = $item['ResearchGroup']['name'];
        }
        
        $this->set(compact('researches', 'researchGroups'));
        $this->set('idResearchGroup', $idResearchGroup);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $idResearchGroup) {
		$this->ResearchGroupsResearch->id = $id;
		if (!$this->ResearchGroupsResearch->exists()) {
			throw new NotFoundException(__('Invalid research groups research'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ResearchGroupsResearch->delete()) {
			$this->Session->setFlash(__('The research groups research has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The research groups research could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index', $idResearchGroup));
	}
}
