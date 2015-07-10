<?php
class Recipient extends AppModel {
	var $displayField = 'name';
	
	var $virtualFields = array(
		'entries' => 'Recipient.last_level_completed + 1'
	);
	
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'phone' => array(
			'phone' => array(
				'rule' => array('phone'),
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'required' => true,
			),
		),
	);
}
