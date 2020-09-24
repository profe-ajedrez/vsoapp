<?php declare(strict_types=1);

namespace vso\app;

use \Monolog\Logger;
use \Whoops\Run;
use \vso\http\router\BaseRouter;
use \vso\http\router\InterfaceRouter;

/**
 * App
 *
 * This class represents your application.
 * It has references to the logger, the exception handler, and the url router system.-white
 *
 * To be initialized, receives in its construct method an instance of a class implementing
 * the `InterfaceAppInitilizer` interface, which has the responsability of initialize and
 * bootstrap the application, througt the exposed method `initialize()`.
 *
 */
abstract class App
{
    protected Logger $logger;
    protected Run $whooper;
    protected InterfaceRouter $router;


    public function __construct(AppInitializer $initializer)
    {
        if (is_null($initializer)) {
            throw new \InvalidArgumentException(
                'Expecting an AppInitializer. Null or empty received in ' . __CLASS__ . '::' . __METHOD__
            );
        }

        $initializer->initialize($this);
    }

    public function __get(string $property)
    {
        switch ($property) {
            case 'logger':
                return $this->logger;
                break;
            case 'whooper':
                return $this->whooper;
                break;
            case 'router':
                return $this->router;
                break;
            default:
                throw new \Exception('Property ' . $property . ' doesnt exists in ' . __CLASS__);
        }
    }
}
