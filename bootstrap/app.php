<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

// Vercel: filesystem somente leitura, então o storage vai para /tmp.
if (isset($_ENV['VERCEL']) || isset($_SERVER['VERCEL'])) {
    $storage = '/tmp/storage';

    foreach (['app', 'framework/cache', 'framework/sessions', 'framework/views', 'logs'] as $dir) {
        is_dir("$storage/$dir") || mkdir("$storage/$dir", 0755, true);
    }

    $app->useStoragePath($storage);
}

return $app;
