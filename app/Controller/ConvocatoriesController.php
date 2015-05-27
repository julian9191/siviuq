<?php
App::uses('AppController', 'Controller');
/**
 * Convocatories Controller
 *
 * @property Convocatory $Convocatory
 * @property PaginatorComponent $Paginator
 */
class ConvocatoriesController extends AppController {

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
		$this->Convocatory->recursive = 0;
        
        $this->Paginator->settings['conditions'] = $this->Convocatory->parseCriteria($this->Prg->parsedParams());
		$this->set('convocatories', $this->Paginator->paginate());
	}
    
    
    
    
    
    /**
 * index method
 *
 * @return void
 */
	public function indexCurrentConvocatories() {
        $this->Prg->commonProcess();
		$this->Convocatory->recursive = 0;
        
        $condiciones = array_merge($this->Convocatory->parseCriteria($this->Prg->parsedParams()), array('Convocatory.closing_date >= NOW()'));
        $condiciones = array_merge($condiciones, array('Convocatory.opening_date <= NOW()'));
        
        $this->Paginator->settings['conditions'] = $condiciones;
		$this->set('convocatories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Convocatory->exists($id)) {
			throw new NotFoundException(__('Invalid convocatory'));
		}
		$options = array('conditions' => array('Convocatory.' . $this->Convocatory->primaryKey => $id));
		$this->set('convocatory', $this->Convocatory->find('first', $options));
	}
    
    public function viewCurrentConvocatory($id = null) {
		if (!$this->Convocatory->exists($id)) {
			throw new NotFoundException(__('Invalid convocatory'));
		}
		$options = array('conditions' => array('Convocatory.' . $this->Convocatory->primaryKey => $id));
		$this->set('convocatory', $this->Convocatory->find('first', $options));
	}
    
    
 /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function download($id = null) {
		if (!$this->Convocatory->exists($id)) {
			throw new NotFoundException(__('Invalid convocatory'));
		}
		$options = array('conditions' => array('Convocatory.' . $this->Convocatory->primaryKey => $id));
		$adjunto = $this->Convocatory->find('first', $options);
        //echo json_encode($adjunto);
        
        if($adjunto['Convocatory']['file_name'] == ''){
            $this->Session->setFlash(__('El adjunto está vacío'), 'default', array('class' => 'alert alert-danger'));
            return $this->redirect(array('action' => 'index'));
        }
        
        $array = explode( '.', $adjunto['Convocatory']['file_name'] ); 
        $extension = $array[sizeof($array)-1];
        
        header("content-type: ".$extension);
        echo $adjunto['Convocatory']['file'];    
        
	}
    
    
    

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Convocatory->create();
            
            
            
            $filename = null;
            if (!empty($this->request->data['Convocatory']['file']['tmp_name']) && is_uploaded_file($this->request->data['Convocatory']['file']['tmp_name'])) {
                
                if($this->request->data['Convocatory']['file']['size'] <= '500000'){
                    
                    // Strip path information
                    $filename = basename($this->request->data['Convocatory']['file']['name']); 
                    if(move_uploaded_file($this->data['Convocatory']['file']['tmp_name'], WWW_ROOT . DS . 'documents' . DS . $filename)){

                        // Read the file
                        $fp = fopen(WWW_ROOT . DS . 'documents' . DS . $filename, 'r');
                        $data = fread($fp, filesize(WWW_ROOT . DS . 'documents' . DS . $filename));
                        //$data = addslashes($data);
                        fclose($fp);
                        
                        //echo json_encode($this->request->data);
                        // Set the file-name only to save in the database
                        $this->request->data['Convocatory']['file'] = $data;
                        $this->request->data['Convocatory']['file_name'] = $filename;
                    }
                    
                }else{
                    $this->request->data['Convocatory']['file'] = "";
                    $this->request->data['Convocatory']['file_name'] = "";
                }

            }else{
                $this->request->data['Convocatory']['file'] = "";
                $this->request->data['Convocatory']['file_name'] = "";
            }
            
            
            
            
			if ($this->Convocatory->save($this->request->data)) {
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
		if (!$this->Convocatory->exists($id)) {
			throw new NotFoundException(__('Invalid convocatory'));
		}
		if ($this->request->is(array('post', 'put'))) {
		  
          
            $filename = null;
            if (!empty($this->request->data['Convocatory']['file']['tmp_name']) && is_uploaded_file($this->request->data['Convocatory']['file']['tmp_name'])) {
                
                if($this->request->data['Convocatory']['file']['size'] <= '500000'){
                    
                    // Strip path information
                    $filename = basename($this->request->data['Convocatory']['file']['name']); 
                    if(move_uploaded_file($this->data['Convocatory']['file']['tmp_name'], WWW_ROOT . DS . 'documents' . DS . $filename)){

                        // Read the file
                        $fp = fopen(WWW_ROOT . DS . 'documents' . DS . $filename, 'r');
                        $data = fread($fp, filesize(WWW_ROOT . DS . 'documents' . DS . $filename));
                        //$data = addslashes($data);
                        fclose($fp);
                        
                        //echo json_encode($this->request->data);
                        // Set the file-name only to save in the database
                        $this->request->data['Convocatory']['file'] = $data;
                        $this->request->data['Convocatory']['file_name'] = $filename;
                    }
                    
                }else{
                    $this->request->data['Convocatory']['file'] = "";
                    $this->request->data['Convocatory']['file_name'] = "";
                }

            }else{
                $this->request->data['Convocatory']['file'] = "";
                $this->request->data['Convocatory']['file_name'] = "";
            }

			if ($this->Convocatory->save($this->request->data)) {
				$this->Session->setFlash(__('El registro ha sido guardado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no ha podido ser guardado, por favor inténtelo de nuevo.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Convocatory.' . $this->Convocatory->primaryKey => $id));
			$this->request->data = $this->Convocatory->find('first', $options);
            $this->set('convocatory', $this->request->data);
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
		$this->Convocatory->id = $id;
		if (!$this->Convocatory->exists()) {
			throw new NotFoundException(__('Invalid convocatory'));
		}
		$this->request->onlyAllow('post', 'delete');
		
        
        try {
            if ($this->Convocatory->delete()) {
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
