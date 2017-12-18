<?php

namespace Shopware\Themes\GwennyTheme;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Gwenny's Theme
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
includes files & settings from responsive theme with optional styles.
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
https://github.com/Gwennyphar
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'
MIT
SHOPWARE_EOD;
            
    protected $css = array(
//      'src/css/no_notepad.css'
    );
    
    protected $javascript = array(
      'src/js/functions.js'
    );

    public function createConfig(Form\Container\TabContainer $container)
    {
    }
}
