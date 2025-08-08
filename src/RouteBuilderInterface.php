<?php

declare(strict_types=1);

namespace GrotonSchool\Slim\Norms;

use Slim\App;
use Slim\Interfaces\RouteGroupInterface;

interface RouteBuilderInterface
{
    public static function define(App $app): RouteGroupInterface;
}
