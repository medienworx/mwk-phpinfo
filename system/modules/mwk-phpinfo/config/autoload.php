<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'medienworx',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Src
	'medienworx\ModulesPhpInfo' => 'system/modules/mwk-phpinfo/src/medienworx/modules/ModulesPhpInfo.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_mwk_phpinfo' => 'system/modules/mwk-phpinfo/templates',
));
