<?php
class NesaController extends AppController {


public function index() {
$this->layout = 'Nesa';
	}

public function video() {
$this->layout = 'Nesa';
	}

public function photogal(){
$this->layout = 'Nesa';	
	}

public function companyprofile() {
	$this->layout = 'Nesa';
	}

public function products() {
	$this->layout = 'Nesa';
	}

public function quote() {
	$this->layout = 'Nesa';
	}

public function quoteconfirm() {
	$this->layout = 'Nesa';
}	

public function contact() {
	$this->layout = 'Nesa';
	}	

public function head() {
	$this->layout = 'Nesa';
	}

public function add(){
	 if ($this->request->is('post')) {
            $this->Client->create();
            /*if ($this->Client->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));*/
        } 
}


}