<?php
/**
 * @package    Bettum
 * @copyright  Copyright (C) 2020 Charlie Lodder. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

HTMLHelper::_('bootstrap.framework');
HTMLHelper::_('script', 'mod_multilangstatus/admin-multilangstatus.min.js', ['version' => 'auto', 'relative' => true], ['type' => 'module']);

?>
<div class="multilanguage d-flex align-items-center">
	<button class="btn-link nav-link d-flex align-items-center" href="#multiLangModal" data-toggle="modal">
		<svg aria-hidden="true" width="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M160.3 203.8h-.5s-4.3 20.9-7.8 33l-11 37.3h37.9l-10.7-37.3c-3.6-12.1-7.9-33-7.9-33zM616 96H24c-13.3 0-24 10.7-24 24v272c0 13.3 10.7 24 24 24h592c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24zM233.2 352h-22.6a12 12 0 0 1-11.5-8.6l-9.3-31.7h-59.9l-9.1 31.6c-1.5 5.1-6.2 8.7-11.5 8.7H86.8c-8.2 0-14-8.1-11.4-15.9l57.1-168c1.7-4.9 6.2-8.1 11.4-8.1h32.2c5.1 0 9.7 3.3 11.4 8.1l57.1 168c2.6 7.8-3.2 15.9-11.4 15.9zM600 376H320V136h280zM372 228h110.8c-6.3 12.8-15.1 25.9-25.9 38.5-6.6-7.8-12.8-15.8-18.3-24-3.5-5.3-10.6-6.9-16.1-3.6l-13.7 8.2c-5.9 3.5-7.6 11.3-3.8 17 6.5 9.7 14.4 20.1 23.5 30.6-9 7.7-18.6 14.8-28.7 21.2-5.4 3.4-7.1 10.5-3.9 16l7.9 13.9c3.4 5.9 11 7.9 16.8 4.2 12.5-7.9 24.6-17 36-26.8 10.7 9.6 22.3 18.6 34.6 26.6 5.8 3.7 13.6 1.9 17-4.1l8-13.9c3.1-5.5 1.5-12.5-3.8-16-9.2-6-18.4-13.1-27.2-20.9 1.5-1.7 2.9-3.3 4.3-5 17.1-20.6 29.6-41.7 36.8-62H540c6.6 0 12-5.4 12-12v-16c0-6.6-5.4-12-12-12h-64v-16c0-6.6-5.4-12-12-12h-16c-6.6 0-12 5.4-12 12v16h-64c-6.6 0-12 5.4-12 12v16c0 6.7 5.4 12.1 12 12.1z"/></svg>
		<span class="sr-only"><?php echo Text::_('MOD_MULTILANGSTATUS'); ?></span>
	</button>

	<?php echo HTMLHelper::_(
		'bootstrap.renderModal',
		'multiLangModal',
		array(
			'title'      => Text::_('MOD_MULTILANGSTATUS'),
			'url'        => Route::_('index.php?option=com_languages&view=multilangstatus&tmpl=component'),
			'height'     => '400px',
			'width'      => '800px',
			'bodyHeight' => 70,
			'modalWidth' => 80,
			'footer'     => '<button type="button" class="btn btn-secondary" data-dismiss="modal">' . Text::_('JTOOLBAR_CLOSE') . '</button>',
		)
	); ?>
</div>
