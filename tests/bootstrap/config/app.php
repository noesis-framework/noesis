<?php declare(strict_types=1);

use Monolog\Handler\StreamHandler;
use Monolog\Level;

$root = dirname(__DIR__, 2);

return [
    'environment' => 'test',
    'views_directory' => "$root/server/resources/views",
    'logs' => [
        'channel'   => 'logs',
        'handler'   => StreamHandler::class,
        'path'      => "$root/server/logs/{date}_{channel}.log",
        'level'     => Level::Info
    ],
];
