<?php
App::uses('AppController', 'Controller');
/**
 * ProjectFiles Controller
 *
 * @property ProjectFile $ProjectFile
 * @property PaginatorComponent $Paginator
 */
class ProjectFilesController extends AppController {

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
            'conditions' => array('ProjectFile.project_id' => $idProject)
        );
       
		$this->ProjectFile->recursive = 0;
		$this->set('projectFiles', $this->Paginator->paginate());
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
		if (!$this->ProjectFile->exists($id)) {
			throw new NotFoundException(__('Invalid project file'));
		}
		$options = array('conditions' => array('ProjectFile.' . $this->ProjectFile->primaryKey => $id));
		$this->set('projectFile', $this->ProjectFile->find('first', $options));
        $this->set('idProject', $idProject);
	}
    
    public function download($id = null) {
		if (!$this->ProjectFile->exists($id)) {
			throw new NotFoundException(__('Invalid project file'));
		}
		$options = array('conditions' => array('ProjectFile.' . $this->ProjectFile->primaryKey => $id));
		$adjunto = $this->ProjectFile->find('first', $options);
        //echo json_encode($adjunto);
        
        if($adjunto['ProjectFile']['file_name'] == ''){
            $this->Session->setFlash(__('El adjunto está vacío'), 'default', array('class' => 'alert alert-danger'));
            return $this->redirect(array('action' => 'index', $idProject));
        }
        
        $array = explode( '.', $adjunto['ProjectFile']['file_name'] ); 
        $extension = $array[sizeof($array)-1];
        
        header("content-type: ".$extension);
        echo $adjunto['ProjectFile']['file'];    
        
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idProject) {
		if ($this->request->is('post')) {
			$this->ProjectFile->create();
            
            
            $filename = null;
            if (!empty($this->request->data['ProjectFile']['file']['tmp_name']) && is_uploaded_file($this->request->data['ProjectFile']['file']['tmp_name'])) {
                
                if($this->request->data['ProjectFile']['file']['size'] <= '500000'){
                    
                    // Strip path information
                    $filename = basename($this->request->data['ProjectFile']['file']['name']); 
                    if(move_uploaded_file($this->data['ProjectFile']['file']['tmp_name'], WWW_ROOT . DS . 'documents' . DS . $filename)){

                        // Read the file
                        $fp = fopen(WWW_ROOT . DS . 'documents' . DS . $filename, 'r');
                        $data = fread($fp, filesize(WWW_ROOT . DS . 'documents' . DS . $filename));
                        //$data = addslashes($data);
                        fclose($fp);
                        
                        //echo json_encode($this->request->data);
                        // Set the file-name only to save in the database
                        $this->request->data['ProjectFile']['file'] = $data;
                        $this->request->data['ProjectFile']['file_name'] = $filename;
                    }
                    
                }else{
                    $this->request->data['ProjectFile']['file'] = "";
                    $this->request->data['ProjectFile']['file_name'] = "";
                }

            }else{
                $this->request->data['ProjectFile']['file'] = "";
                $this->request->data['ProjectFile']['file_name'] = "";
            }
            
            
			if ($this->ProjectFile->save($this->request->data)) {
				$this->Session->setFlash(__('The project file has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idProject));
			} else {
				$this->Session->setFlash(__('The project file could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$projectFileTypes = $this->ProjectFile->ProjectFileType->find('list');
		$projects = $this->ProjectFile->Project->find('list');
		$this->set(compact('projectFileTypes', 'projects'));
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
		if (!$this->ProjectFile->exists($id)) {
			throw new NotFoundException(__('Invalid project file'));
		}
		if ($this->request->is(array('post', 'put'))) {
		  
 
            $filename = null;
            if (!empty($this->request->data['ProjectFile']['file']['tmp_name']) && is_uploaded_file($this->request->data['ProjectFile']['file']['tmp_name'])) {
                
                if($this->request->data['ProjectFile']['file']['size'] <= '500000'){
                    
                    // Strip path information
                    $filename = basename($this->request->data['ProjectFile']['file']['name']); 
                    if(move_uploaded_file($this->data['ProjectFile']['file']['tmp_name'], WWW_ROOT . DS . 'documents' . DS . $filename)){

                        // Read the file
                        $fp = fopen(WWW_ROOT . DS . 'documents' . DS . $filename, 'r');
                        $data = fread($fp, filesize(WWW_ROOT . DS . 'documents' . DS . $filename));
                        //$data = addslashes($data);
                        fclose($fp);
                        
                        //echo json_encode($this->request->data);
                        // Set the file-name only to save in the database
                        $this->request->data['ProjectFile']['file'] = $data;
                        $this->request->data['ProjectFile']['file_name'] = $filename;
                    }
                    
                }else{
                    $this->request->data['ProjectFile']['file'] = "";
                    $this->request->data['ProjectFile']['file_name'] = "";
                }

            }else{
                $this->request->data['ProjectFile']['file'] = "";
                $this->request->data['ProjectFile']['file_name'] = "";
            }
          
          
          
			if ($this->ProjectFile->save($this->request->data)) {
				$this->Session->setFlash(__('The project file has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idProject));
			} else {
				$this->Session->setFlash(__('The project file could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProjectFile.' . $this->ProjectFile->primaryKey => $id));
			$this->request->data = $this->ProjectFile->find('first', $options);
		}
		$projectFileTypes = $this->ProjectFile->ProjectFileType->find('list');
		$projects = $this->ProjectFile->Project->find('list');
		$this->set(compact('projectFileTypes', 'projects'));
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
		$this->ProjectFile->id = $id;
		if (!$this->ProjectFile->exists()) {
			throw new NotFoundException(__('Invalid project file'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProjectFile->delete()) {
			$this->Session->setFlash(__('The project file has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The project file could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index', $idProject));
        $this->set('idProject', $idProject);
	}
}
