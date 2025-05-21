<?php

use XelentUmar\StaticPages\Http\Controllers\OPD\GlassController;
use Illuminate\Support\Facades\Route;

Route::resource('glasses', GlassController::class)->names('glasses');
