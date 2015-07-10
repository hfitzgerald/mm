<?php
App::import('Component', 'Security');
class CreateTask extends Shell {
	var $uses = array('User');
	
	function execute() {	
		$this->hr();
		$this->out('Create a New Administrator');
		$this->hr();
		
		$username = $this->in(__('What should the users name be?', true));
		$password = false;
		
		// Run this over and over until the two passwords match;
		while($password == false) {
			$password = $this->getPassword();
		}
		
		$level = 0;

		$this->User->create();
		$this->User->set(array(
			'username' 	 	=> $username, 
			'password' 	 	=> $password
		));
		
		if($this->User->save()) {
			$this->hr();
			$this->out('successfully saved user,');
			$this->out(var_export($this->User->data));
			$this->hr();
		}		
	}
	
	/**
	*	Asks for password and confirms that it is entered correctly
	**/
	function getPassword() {
		$password = $this->in(__('What should the users password be?', true));
		if($this->confirmPassword($password)) return Security::hash($password, null, true);
		else return false;
	}
	
	function confirmPassword($password) {
		$confirm_password = $this->in(__('Please confirm password?', true));
		
		if($confirm_password === $password) return true;
		else return false;
	}
}
?>