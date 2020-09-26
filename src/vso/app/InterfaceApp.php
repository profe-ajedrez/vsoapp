<?php declare(strict_types=1);

namespace vso\app;

use \Monolog\Logger;
use \Whoops\Run;
use \vso\http\router\InterfaceRouter;
use \vso\mailcontainer\InterfaceMailContainer;

interface InterfaceApp
{
    public function getLogger() : logger;
    public function getWhooper() : Run;
    public function getRouter() : InterfaceRouter;
    public function getMailContainer() : InterfaceMailContainer;
    public function setLogger(logger $logger) : void;
    public function setWhooper(Run $whooper) : void;
    public function setRouter(InterfaceRouter $router) : void;
    public function setMailContainer(InterfaceMailContainer $mailContainer) : void;
}
