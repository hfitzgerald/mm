<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>

<div style='color:#503328; font-size:17px; width:600px; margin:130px auto;'>

<h2>Error - 404</h2>
<p class="error">
	<strong><?php __('Error'); ?>: </strong>
	<?php printf(__('The requested address %s was not found on this server.', true), "<strong>'{$message}'</strong>"); ?>
</p>

<br />
<div style='width:174px; padding:9px; margin:0px auto;'>
<img src='/img/404bot.png' />
</div>
<br />
<div style='text-align:center;'>
 <a style='color:#503328; text-decoration:none; font-size:19px; text-align:center; ' href='/'>Return to the Home Grown Harvest Challenge >></a>
 </div>
</div>