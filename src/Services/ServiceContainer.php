<?php

namespace Api\Services;

use Artisan\Routing\Entities\Config;
use Exception;

class ServiceContainer extends \Pimple\Container
{
    private static ServiceContainer $instance;

    /**
     * @throws Exception
     */
    public static function initialize(): static
    {
        return self::$instance = new static();
    }

    public static function i(): ServiceContainer
    {
        return self::$instance;
    }

    /**
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct();
        $this->initializeServices();
    }


    /**
     * @throws Exception
     */
    private function initializeServices(): void
    {
        // Start your services here
    }
}