<?php declare(strict_types=1);
namespace Noesis\Presenter;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Presenter Interface
 */
interface PresenterInterface
{
    /**
     * Invoke
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * 
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface;
}