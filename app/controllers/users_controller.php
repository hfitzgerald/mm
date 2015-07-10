<?php
class UsersController extends AppController {
	var $components = array('Auth');
	
	function beforeFilter()
	{
		$this->Auth->loginRedirect = array('controller' => 'stats', 'action' => 'index');
	}
	
	function login(){

	}
		
	function logout(){
		$this->redirect($this->Auth->logout());
	}
}