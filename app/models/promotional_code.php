<?php
class PromotionalCode extends AppModel {
	var $hasOne = 'Recipient';
	
	/**
	 * Searches the database for the hash that was passed. 
	 *
	 * @return bool
	 * @access public
	 * @static
	 */
	function validateFromHash($hash){
		$result = $this->findByHashedCode($hash);
		
		/* this code is invalid if it is not found within our table */
		if($result == null) 
			return 0;
		
		/* check to see if this code has already been redeemed */
		if($result['PromotionalCode']['has_been_redeemed']) 
			return 0;
		
		/* this code is valid */				
		return true;
	}
	
	/**
	 * Searches the database for the hash that was passed and sets the data array. 
	 *
	 * @return bool
	 * @access public
	 * @static
	 */
	function setFromHash($hash){
		$result = $this->findByHashedCode($hash);
		
		/* do not set if this hash code came back false */
		if($result == null) 
			return 0;
		
		/* array was returned from the database. set it */
		$this->set($result);
		
		return true;
	}
	
	/**
	 * Redeems a promotional code.
	 *
	 * @return bool
	 * @access public
	 * @static
	 */
	function redeem($recipient, $hash){
		if($this->setFromHash($hash)){
			if($this->data['PromotionalCode']['has_been_redeemed']){
				return 0;
			}
			
			$recipient['promotional_code_id'] =  $this->id;
			$this->Recipient->set($recipient);
			
			if($this->Recipient->save() != null)
			{
				$this->set('has_been_redeemed', true);			
				$this->save();
				return true;
			}
			 return 0;
		
		}
		
		return 0;
	}
	
	/**
	 * Updates the recipients last level completed
	 *
	 * @access public
	 * @static
	 */
	function updateLastLevelCompleted($args){
		$this->setFromHash($args['code']);
		$this->Recipient->set($this->data['Recipient']);
		$this->Recipient->set('last_level_completed', $args['last_level_completed']);
		
		$this->Recipient->save();	
	}
}
