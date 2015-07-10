<?php
/**
* AdminController
*/
class StatsController extends AppController {
	var $components = array('Auth', 'Security', 'RequestHandler');
	var $uses = array('PromotionalCode', 'Recipient');
	
	/**
	 * Require Authentication before any action in this controller
	 */	
	function beforeFilter()
	{

	}
	
	function index(){
		$this->layout = null;
		$data = array();
		
		$data['total_codes'] = $this->PromotionalCode->find('count');
		$data['redeemed_codes'] = $this->PromotionalCode->find('count', array('conditions' => array('PromotionalCode.has_been_redeemed' => true)));
		$data['single_entry_redemptions'] = $this->Recipient->find('count', array('conditions' => array('Recipient.last_level_completed' => 0)));
		$data['multiple_entry_redemptions'] = $this->Recipient->find('count', array('conditions' => array('Recipient.last_level_completed >' => 0)));		
		$this->set('data', $data);
	}
	
	function all_entries(){
		$header = array('Recipient' => array(
			'id',
			'promotional_code_id',
			'name',
            'phone',
            'email',
            'last_level_completed',
            'ip_address',
            'entries'
		));
		$data = $this->Recipient->find('all');
		array_unshift($data, $header);
		
		$this->set(compact('data'));
	}
}


?>