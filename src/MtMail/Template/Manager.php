<?php

namespace MtMail\Template;


use MtMail\Exception\RuntimeException;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\Exception;

class Manager extends AbstractPluginManager
{

    /**
     * Validate the plugin
     *
     * Checks that the filter loaded is either a valid callback or an instance
     * of FilterInterface.
     *
     * @param  mixed $plugin
     * @throws RuntimeException
     * @return void
     */
    public function validatePlugin($plugin)
    {
        if (!$plugin instanceof TemplateInterface) {
            $class = get_class($plugin);
            throw new RuntimeException("E-mail template must implement TemplateInterface, '$class' was given.");
        }
    }
}
