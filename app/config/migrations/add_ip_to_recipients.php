<?php
class M4e807e2291084f46a5332b2022f362a2 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	var $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
		var $migration = array(
		'up' => array(
			'create_field' => array(
				'recipients' => array(
					'ip_address' => array('type' => 'string', 'null' => false)
				)
			)
		),
		'down' => array(
			'drop_field' => array(
				'recipients' => array(
					'ip_address'
				)
			)
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	function after($direction) {
		return true;
	}
}
?>