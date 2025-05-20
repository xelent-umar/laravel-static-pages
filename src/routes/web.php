<?php

use Illuminate\Support\Facades\Route;
use XelentUmar\StaticPages\Http\Controllers\StaticPageController;

Route::get('pages/{slug}', [StaticPageController::class, 'show']);
