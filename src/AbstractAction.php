<?php

declare(strict_types=1);

namespace GrotonSchool\Slim\Norms;

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;
use Slim\Http\ServerRequest;

abstract class AbstractAction
{
    abstract protected function invokeHook(
        ServerRequest $request,
        Response $response
    ): ResponseInterface;

    public function __invoke(
        ServerRequest $request,
        Response $response
    ): ResponseInterface {
        return $this->invokeHook($request, $response);
    }
}
