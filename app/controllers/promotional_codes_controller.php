<?php
class PromotionalCodesController extends AppController {
	
	/**
	 * /PromotionalCodes/isValid
	 */	
	function isValid(){
		$this->layout = null;		
		$this->set('is_valid', $this->PromotionalCode->validateFromHash($this->params['form']['hashedCode']));
	}
	
	/**
	 * /PromotionalCodes/redeem
	 */
	function redeem(){
		$this->layout = null;
		
		
		$recipient = array(
			'name'  => $this->params['form']['name'],
			'email' => $this->params['form']['email'],
			'phone' => $this->params['form']['phone'],
			'promotional_code_id' => $this->params['form']['hashedCode'],
			'ip_address' => $_SERVER['REMOTE_ADDR']
		);
		
		$this->set('successful_redemption', $this->PromotionalCode->redeem($recipient, $this->params['form']['hashedCode']));
	}
	
	/**
	 * /PromotionalCodes/updateLastCompleted
	 */
	function updateLastCompleted(){
		$this->layout = null;
		
		$arguments = array(
			'code' => $this->params['form']['hashedCode'],
			'last_level_completed' => $this->params['form']['lastLevelCompleted']
		);
		
		$this->set('success', $this->PromotionalCode->updateLastLevelCompleted($arguments));
	}
}
