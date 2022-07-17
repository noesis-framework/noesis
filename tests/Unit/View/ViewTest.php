<?php declare(strict_types=1);

use Noesis\View\View;
use Psr\Http\Message\ResponseInterface;

test('test views::renderToString returns plain template', function() {
    // Mock response
    $response = new Laminas\Diactoros\Response\HtmlResponse('', 200);

    // Test
    $view = new View($response, dirname(__DIR__, 2) . '/bootstrap/resources/views');
    expect($view->renderToString('html.php'))->toBe('<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test View</title>
</head>
<body>
    <h1>Test</h1>
</body>
</html>

');
});

test('test views::renderToString returns template with variables parsed correctly', function() {
    // Mock response
    $response = new Laminas\Diactoros\Response\HtmlResponse('', 200);

    // Test
    $view = new View($response, dirname(__DIR__, 2) . '/bootstrap/resources/views');
    expect($view->renderToString('with-variable.php', ['page' => 'Testing variables']))->toBe('<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test View</title>
</head>
<body>
    <h1>Testing variables</h1>
</body>
</html>
');
});
