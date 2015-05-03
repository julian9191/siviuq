<?php
App::uses('AppController', 'Controller');
/**
 * ProductAttachments Controller
 *
 * @property ProductAttachment $ProductAttachment
 * @property PaginatorComponent $Paginator
 */
class ProductAttachmentsController extends AppController {

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
	public function index($idProducto) {
	   
       //Where user_type_id es investigador
        $this->Paginator->settings = array(
            'conditions' => array('ProductAttachment.project_product_id' => $idProducto)
        );
       
		$this->ProductAttachment->recursive = 0;
		$this->set('productAttachments', $this->Paginator->paginate());
        $this->set('idProducto', $idProducto);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null, $idProducto) {
		if (!$this->ProductAttachment->exists($id)) {
			throw new NotFoundException(__('Invalid product attachment'));
		}
		$options = array('conditions' => array('ProductAttachment.' . $this->ProductAttachment->primaryKey => $id));
		$this->set('productAttachment', $this->ProductAttachment->find('first', $options));
        $this->set('idProducto', $idProducto);
	}
    
    public function download($id = null) {
		if (!$this->ProductAttachment->exists($id)) {
			throw new NotFoundException(__('Invalid product attachment'));
		}
		$options = array('conditions' => array('ProductAttachment.' . $this->ProductAttachment->primaryKey => $id));
		$adjunto = $this->ProductAttachment->find('first', $options);
        //echo json_encode($adjunto);
        
        if($adjunto['ProductAttachment']['file_name'] == ''){
            $this->Session->setFlash(__('El adjunto está vacío'), 'default', array('class' => 'alert alert-danger'));
            return $this->redirect(array('action' => 'index', $idProducto));
        }
        
        $array = explode( '.', $adjunto['ProductAttachment']['file_name'] ); 
        $extension = $array[sizeof($array)-1];
        
        header("content-type: ".$extension);
        echo $adjunto['ProductAttachment']['file'];    
        
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idProducto) {
		if ($this->request->is('post')) {
			$this->ProductAttachment->create();

            
            $filename = null;
            if (!empty($this->request->data['ProductAttachment']['file']['tmp_name']) && is_uploaded_file($this->request->data['ProductAttachment']['file']['tmp_name'])) {
                
                if($this->request->data['ProductAttachment']['file']['size'] <= '500000'){
                    
                    // Strip path information
                    $filename = basename($this->request->data['ProductAttachment']['file']['name']); 
                    if(move_uploaded_file($this->data['ProductAttachment']['file']['tmp_name'], WWW_ROOT . DS . 'documents' . DS . $filename)){

                        // Read the file
                        $fp = fopen(WWW_ROOT . DS . 'documents' . DS . $filename, 'r');
                        $data = fread($fp, filesize(WWW_ROOT . DS . 'documents' . DS . $filename));
                        //$data = addslashes($data);
                        fclose($fp);
                        
                        //echo json_encode($this->request->data);
                        // Set the file-name only to save in the database
                        $this->request->data['ProductAttachment']['file'] = $data;
                        $this->request->data['ProductAttachment']['file_name'] = $filename;
                    }
                    
                }else{
                    $this->request->data['ProductAttachment']['file'] = "";
                    $this->request->data['ProductAttachment']['file_name'] = "";
                }

            }else{
                $this->request->data['ProductAttachment']['file'] = "";
                $this->request->data['ProductAttachment']['file_name'] = "";
            }
            
            
            
			if ($this->ProductAttachment->save($this->request->data)) {
				$this->Session->setFlash(__('The product attachment has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idProducto));
			} else {
				$this->Session->setFlash(__('The product attachment could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$projectProducts = $this->ProductAttachment->ProjectProduct->find('list');
		$this->set(compact('projectProducts'));
        $this->set('idProducto', $idProducto);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $idProducto) {
		if (!$this->ProductAttachment->exists($id)) {
			throw new NotFoundException(__('Invalid product attachment'));
		}
		if ($this->request->is(array('post', 'put'))) {
		  
          
          $filename = null;
            if (!empty($this->request->data['ProductAttachment']['file']['tmp_name']) && is_uploaded_file($this->request->data['ProductAttachment']['file']['tmp_name'])) {
                
                if($this->request->data['ProductAttachment']['file']['size'] <= '500000'){
                    
                    // Strip path information
                    $filename = basename($this->request->data['ProductAttachment']['file']['name']); 
                    if(move_uploaded_file($this->data['ProductAttachment']['file']['tmp_name'], WWW_ROOT . DS . 'documents' . DS . $filename)){

                        // Read the file
                        $fp = fopen(WWW_ROOT . DS . 'documents' . DS . $filename, 'r');
                        $data = fread($fp, filesize(WWW_ROOT . DS . 'documents' . DS . $filename));
                        //$data = addslashes($data);
                        fclose($fp);
                        
                        //echo json_encode($this->request->data);
                        // Set the file-name only to save in the database
                        $this->request->data['ProductAttachment']['file'] = $data;
                        $this->request->data['ProductAttachment']['file_name'] = $filename;
                    }
                    
                }else{
                    $this->request->data['ProductAttachment']['file'] = "";
                    $this->request->data['ProductAttachment']['file_name'] = "";
                }

            }else{
                $this->request->data['ProductAttachment']['file'] = "";
                $this->request->data['ProductAttachment']['file_name'] = "";
            }
          
          
			if ($this->ProductAttachment->save($this->request->data)) {
				$this->Session->setFlash(__('The product attachment has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idProducto));
			} else {
				$this->Session->setFlash(__('The product attachment could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProductAttachment.' . $this->ProductAttachment->primaryKey => $id));
			$this->request->data = $this->ProductAttachment->find('first', $options);
		}
		$projectProducts = $this->ProductAttachment->ProjectProduct->find('list');
		$this->set(compact('projectProducts'));
        $this->set('idProducto', $idProducto);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $idProducto) {
		$this->ProductAttachment->id = $id;
		if (!$this->ProductAttachment->exists()) {
			throw new NotFoundException(__('Invalid product attachment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductAttachment->delete()) {
			$this->Session->setFlash(__('The product attachment has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The product attachment could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index', $idProducto));
        $this->set('idProducto', $idProducto);
	}
}
