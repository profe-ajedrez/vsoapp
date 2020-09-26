<?php declare(strict_types=1);

namespace vso\app;

use \Monolog\Logger;
use \Whoops\Run;
use \vso\http\router\InterfaceRouter;

interface InterfaceApp
{
    public function getLogger() : logger;
    public function getWhooper() : Run;
    public function getRouter() : InterfaceRouter;
}
