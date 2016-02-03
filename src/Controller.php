<?php

namespace Arek\Slim\Controller;

class Controller
{
    private $container;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    public function __call($method, $arguments)
    {
        $action = $this->getAction($method);

        return $this->dispatchAction($action, $arguments);
    }

    private function getAction($method)
    {
        $action = '\\' . str_replace('_', '\\', $method);

        return new $action;
    }

    private function dispatchAction($action, $arguments)
    {
        return $action($this->container, ...$arguments);
    }
}
