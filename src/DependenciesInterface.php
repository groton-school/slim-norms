<?php

declare(strict_types=1);

namespace GrotonSchool\Slim\Norms;

use DI\ContainerBuilder;

interface DependenciesInterface
{
    public static function inject(ContainerBuilder $containerBuilder): void;
}
