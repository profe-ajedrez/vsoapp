<?php declare(strict_types=1);

namespace vso\app;

/**
 * InterfaceAppInitializer
 *
 * The classes that implements this interface will be used
 * to initialize the application, hence the method initialize()
 * This methos has passed as parameter a reference to the App object,
 * so could access to the public defined properties or methods
 *
 * You should use this to load env vars, setting up loggers
 * and any bootstraping task.
 */
interface InterfaceAppInitializer
{
    /**
     * initialize
     *
     * Use the implememntations of this method to initialize your app
     *
     * @param App $application  Ref. to the app.
     * @return void
     */
    public function initialize(App $application) : void;
}
