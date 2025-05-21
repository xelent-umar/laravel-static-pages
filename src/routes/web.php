<?php

use Illuminate\Support\Facades\Route;
use XelentUmar\StaticPages\Http\Controllers\StaticPageController;

Route::get('pages/{slug}', [StaticPageController::class, 'show']);
Route::middleware([
    'web',
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    $routes = glob(__DIR__ . "/admin/*.php");
    foreach ($routes as $route) require($route);

});