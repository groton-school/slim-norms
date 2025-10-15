<?php

declare(strict_types=1);

namespace GrotonSchool\Slim\Norms;

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;
use Slim\Http\ServerRequest;

abstract class AbstractAction
{
    protected function action(
        ServerRequest $request,
        Response $response,
        array $args = []
    ): ResponseInterface {
        // TODO delete AbstractAction::action() @ v3.0.0
        return $this->invokeHook($request, $response, $args);
    }

    /**
     * @deprecated 2.2.0 Override AbstractAction::action() instead
     * @see AbstractAction::action()
     * @param ServerRequest $request
     * @param Response $response
     * @param array $args
     * @return ResponseInterface
     */
    protected function invokeHook(
        ServerRequest $request,
        Response $response,
        array $args = []
    ): ResponseInterface {
        return $response;
    }

    public function __invoke(
        ServerRequest $request,
        Response $response,
        array $args = []
    ): ResponseInterface {
        return $this->action($request, $response, $args);
    }
}
