<?php
	
/**
* 
*/
class UsersController extends AppController
{
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add');
	}

	public function add() {
		if (!empty($this->data)){
			$this->User->create();
			
			if ($this->User->save($this->data)) {
			
				$this->Session->setFlash('User Created!');
				$this->redirect(array('action'=>'login'));
			
			} else {

				$this->Session->setFlash('Please correct the errors');

			}
		}
	}
	
	public function login(){

	}

	public function logout(){
		$this->redirect($this->Auth->logout());
	}
}
?>