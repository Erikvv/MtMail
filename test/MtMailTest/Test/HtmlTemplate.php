<?php
/**
 * MtMail - e-mail module for Zend Framework
 *
 * @link      http://github.com/mtymek/MtMail
 * @copyright Copyright (c) 2013-2017 Mateusz Tymek
 * @license   BSD 2-Clause
 */

namespace MtMailTest\Test;

use MtMail\Template\HtmlTemplateInterface;
use MtMail\Template\TemplateInterface;

class HtmlTemplate implements TemplateInterface, HtmlTemplateInterface
{

    /**
     * @return string
     */
    public function getHtmlTemplateName()
    {
        return 'template';
    }
}
