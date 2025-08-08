<?php
namespace Api\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Artisan\Routing\Interfaces\IApiResponse;
use Throwable;

class HomeController
{
    /**
     * @throws Throwable
     */
    public function landing(Request $request, IApiResponse $response): void
    {
        $response->setPayload([
            'success' => true,
            'ENV' => ENVIRONMENT,
        ]);
    }
}