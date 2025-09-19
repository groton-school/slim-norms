<?php

declare(strict_types=1);

namespace GrotonSchool\Slim\Norms;

use Psr\Http\Server\MiddlewareInterface;
use Slim\App;
use Slim\Interfaces\RouteGroupInterface;

interface RouteBuilderInterface
{
    public function define(App $app, ?MiddlewareInterface ...$innerMiddleware): RouteGroupInterface;
}
