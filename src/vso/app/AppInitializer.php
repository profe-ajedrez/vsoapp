<?php declare(strict_types=1);

namespace vso\app;

/**
 * AppInitializer
 *
 * This class is an stub and an example, you should write your own class implementing InterfaceAppInitializer
 * which initialize and bootstrap your app taking into account your own requirements.
 *
 * Initialize the app. Implements InterfaceAppInitializer,
 * and in its declared method initialize(), do bootstraping tasks
 */
class AppInitializer implements InterfaceAppInitializer
{
    public string $envPath;
    public string $envFile;
    public InterfaceLoadEnvironment $envLoader;

    public function initialize(App $application) : void
    {
        /* Load Environment vars */
        $this->envLoader->load();
    }
}
