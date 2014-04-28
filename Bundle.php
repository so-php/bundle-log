<?php


namespace SoPhp\Bundle\Log;


use SoPhp\Framework\Activator\Context\Context;
use SoPhp\Framework\Bundle\ActivatorProviderInterface;
use SoPhp\Framework\Bundle\AutoloaderProviderInterface;
use SoPhp\Framework\Bundle\BundleInterface;

class Bundle implements BundleInterface, ActivatorProviderInterface, AutoloaderProviderInterface {
    /** @var  Context */
    protected $context;
    /** @var  ActivatorInterface */
    protected $activator;

    /**
     * @param Context $context
     */
    public function setContext(Context $context)
    {
        $this->context = $context;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Should return a singleton instance of activator
     * @return ActivatorInterface
     */
    public function getActivator()
    {
        if(!$this->activator) {
            $this->activator = new Activator();
        }

        return $this->activator;
    }

    public function getAutoloader()
    {
        require_once __DIR__ . '/vendor/autoload.php';
    }


}