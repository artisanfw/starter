<?php

namespace Api\Routers;

use Api\Controllers\HomeController;
use Artisan\Routing\Interfaces\IRouter;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class RouterList implements IRouter
{
    private const string GET = 'GET';
    private const string POST = 'POST';
    private const string PUT = 'PUT';
    private const string PATCH = 'PATCH';
    private const string DELETE = 'DELETE';

    public function getRoutes(): RouteCollection
    {
        $routes = new RouteCollection();

        $routes->add('home', new Route('/', [
            '_authRequired' => false,
            '_methods' => [self::GET],
            '_controller' => [HomeController::class, 'landing'],
        ]));

        return $routes;
    }
}