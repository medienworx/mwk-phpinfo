<?php

 /**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package     mwk-phpinfo
 * Copyright    (c) 2015 Agentur medienworx
 * @author      Peter Ongyert <peter.ongyert@medienworx.eu>
 * @license     http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace medienworx;

class ModulesPhpInfo extends \Module
{

    /**
     * Template
     * @var string
     */

    protected $strTemplate = 'be_mwk_phpinfo';


    public function compile()
    {

        ob_start();
        phpinfo();
        $mwkphpinfo = ob_get_clean();

        // get content
        $mwkphpinfo = preg_replace('%^.*<body>(.*)</body>.*$%ms', '$1', $mwkphpinfo);


        // remove <a> from <h2>
        $mwkphpinfo = preg_replace('%<h2><a .*>(.*)</a></h2>%', '<h2>$1</h2>', $mwkphpinfo);


        $this->Template->showScreen = $mwkphpinfo;
    }

}
