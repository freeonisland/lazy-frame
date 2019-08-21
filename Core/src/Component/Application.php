<?php

namespace Core\Component;

if (!defined('APP_ROOT')) {
    die("Application non définie");
}

use Core\Contract\ApplicationComponentInterface;
use Core\Traits\SingletonTrait;
use Core\Tool\Config;

class Application 
{
    use SingletonTrait;

    /**
     * Internal config
     */
    protected static $coreConfig = [

    ];

    /**
     * Public configuration
     * 
     * @var Config
     */
    public static $config;

    private function __construct()
    {
        $this->_loadComponents();
        $this->_runningKernelApplication();
    }

    /**
     * Launch application
     */
    public static function run( Config $config )
    {
        self::$config = $config;
        self::getInstance();
    }

    /**
     * Load components globally in Lazyloading
     */
    private function _loadComponents()
    {
        $this->container = new \Core\Component\Container();

        $this->_append('HttpRequest');
        $this->_append('HttpResponse');
        $this->_append('Kernel');
        $this->_append('Router');
        $this->_append('Template');
        $this->_append('Database');
    }

    /**
     * RUNNING Kernel Application
     */
    private function _runningKernelApplication()
    {
        $httpResponse = $this->container->get('Kernel')->getResponse(
            $this->container->get('Router')->getModule(),
            $this->container->get('Router')->getController(), 
            $this->container->get('Router')->getAction()
        );
        $httpResponse->send();
    }

    private function _append($name)
    {
        $this->container->append($name);
    }
}
