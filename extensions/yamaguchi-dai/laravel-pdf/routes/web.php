<?php

use Laravel\Pdf\Http\Controllers\PdfController;

Route::get('laravel-pdf', PdfController::class . '@index');