<?php declare(strict_types=1);

namespace vso\app;

use \Closure;
use \Dotenv\Dotenv;

/**
 * EnvironmentloaderExampler
 *
 * This class is a stub and an example, you should write your own class
 * that implements InterfaceloadEnvironment
 * and load your environment taking into account your needs
 *
 * This example has a Closure property which can be used to
 * execute a hook at the moment of env loading, by example,
 * to write a log
 */
class EnvironmentLoaderExample implements InterfaceLoadEnvironment
{

    private Dotenv $dotEnv;
    private Closure $onEnvLoading;

    public function __construct(string $envFilePath, string $envFileName, Closure $onEnvLoading)
    {
        if (empty($envFilePath)) {
            throw new \InvalidArgumentException(
                'Expecting a string environment file path. Null or empty received in ' . __CLASS__ . '::' . __METHOD__
            );
        }

        if (empty($envFileName)) {
            throw new \InvalidArgumentException(
                'Expecting a string environment file name. Null or empty received in ' . __CLASS__ . '::' . __METHOD__
            );
        }

        $this->dotEnv = Dotenv::createImmutable(__DIR__, 'myconfig');

        if (is_null($onEnvLoading)) {
            $onEnvLoading = function () {
            };
        }
        $this->onEnvLoading = $onEnvLoading;
    }

    public function load() : void
    {
        /**
         * Put here the list of required environment variables
         * also the validation rules as told in https://github.com/vlucas/phpdotenv
         */
        $this->dotEnv->load();
        $hookOnLoading = $this->onEnvLoading;
        $hookOnLoading();
    }
}
