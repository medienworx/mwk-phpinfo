<?php

 /**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 - 2015 Agentur medienworx
 *
 * @package     mwk-phpinfo
 * @author      Christian Kienzl <christian.kienzl@medienworx.eu>
 * @author      Peter Ongyert <peter.ongyert@medienworx.eu>
 * @link        http://www.medienworx.eu
 * @license     http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Back end modules
 */

array_insert($GLOBALS['BE_MOD'], 2, array

(
	'mwk-supportcenter' => array
	(
		'mwk_phpinfo' => array
		(
			'callback'      =>      'ModulesPhpInfo',
			'icon'          =>      'system/modules/mwk-phpinfo/assets/images/phpinfo-icon.png',
			'stylesheet'    =>      'system/modules/mwk-phpinfo/assets/css/mwk-phpinfo.css'
		),
	)
));
