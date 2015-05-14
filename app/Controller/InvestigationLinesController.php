<?php
App::uses('AppController', 'Controller');
/**
 * InvestigationLines Controller
 *
 * @property InvestigationLine $InvestigationLine
 * @property PaginatorComponent $Paginator
 */
class InvestigationLinesController extends AppController {

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
       
		$this->InvestigationLine->recursive = 0;
        $this->Paginator->settings['conditions'] = $this->InvestigationLine->parseCriteria($this->Prg->parsedParams());
		$this->set('investigationLines', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InvestigationLine->exists($id)) {
			throw new NotFoundException(__('Invalid investigation line'));
		}
		$options = array('conditions' => array('InvestigationLine.' . $this->InvestigationLine->primaryKey => $id));
		$this->set('investigationLine', $this->InvestigationLine->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InvestigationLine->create();
			if ($this->InvestigationLine->save($this->request->data)) {
				$this->Session->setFlash(__('The investigation line has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The investigation line could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->InvestigationLine->exists($id)) {
			throw new NotFoundException(__('Invalid investigation line'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InvestigationLine->save($this->request->data)) {
				$this->Session->setFlash(__('The investigation line has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The investigation line could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('InvestigationLine.' . $this->InvestigationLine->primaryKey => $id));
			$this->request->data = $this->InvestigationLine->find('first', $options);
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
		$this->InvestigationLine->id = $id;
		if (!$this->InvestigationLine->exists()) {
			throw new NotFoundException(__('Invalid investigation line'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InvestigationLine->delete()) {
			$this->Session->setFlash(__('The investigation line has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The investigation line could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
