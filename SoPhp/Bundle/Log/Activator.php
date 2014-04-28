<?php


namespace SoPhp\Bundle\Log;


use SoPhp\Framework\Activator\ActivatorInterface;
use SoPhp\Framework\Activator\Context\Context;

class Activator implements ActivatorInterface {
    /** @var  Listener */
    protected $listener;

    /**
     * @param Context $context
     */
    public function start(Context $context)
    {
        $this->listener = new Listener($context->getFramework()->getChannel());
        $this->listener->start();
    }

    /**
     * @param Context $context
     */
    public function stop(Context $context)
    {
        $listener->stop();
        unset($this->listener);
    }

} 