<?php

namespace Laravel\Pdf\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class PdfController extends Controller {
    public function index(Content $content) {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('laravel-pdf::index'));
    }
}