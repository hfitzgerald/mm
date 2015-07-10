<?php
class M4e7a00d1ff0c4b81a3214ccc22f362a2 extends CakeMigration {

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
					'last_level_completed' => array('type' => 'integer', 'null' => false, 'default' => 0)
				)
			)
		),
		'down' => array(
			'drop_field' => array(
				'recipients' => array(
					'last_level_completed'
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