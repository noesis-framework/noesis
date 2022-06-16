<?php declare(strict_types=1);

use App\Http\Presenter\PagesPresenter;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Rist\View\View;

$route->get('/', [PagesPresenter::class, 'home']);

$route->get('/contact', [PagesPresenter::class, 'contact']);

$route->get('/non-inertia-view', function(RequestInterface $request, Response $response)  {
    $view = $this->get(View::class);
    $view->setLayout('layout.php');
    return $view->render($response, 'non-inertia-view.php', ['author' => 'Luke Watts']);
});