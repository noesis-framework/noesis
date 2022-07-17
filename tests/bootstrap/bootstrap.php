<?php declare(strict_types=1);
$root = dirname(__DIR__, 2);
require_once $root . '/vendor/autoload.php';

use Dotenv\Dotenv;
use Noesis\App\AppFactory;
use Noesis\App\Router\ApiRouterInvoker;
use Noesis\App\Router\WebRouterInvoker;
use Noesis\App\Container\ContainerInvoker;
use Noesis\App\Middleware\AppMiddlewareInvoker;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$app = AppFactory::createFromContainer((new ContainerInvoker)());
$app = (new AppMiddlewareInvoker)($app);
$app = (new ApiRouterInvoker)($app);
$app = (new WebRouterInvoker)($app);

return $app;
