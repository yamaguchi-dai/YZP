<?php

namespace Laravel\Pdf;

use Encore\Admin\Extension;

class PdfExtension extends Extension {
    public $name = 'laravel-pdf';

    public $views = __DIR__ . '/../resources/views';

    public $assets = __DIR__ . '/../resources/assets';

    public $menu = [
        'title' => 'Pdf',
        'path' => 'laravel-pdf',
        'icon' => 'fa-gears',
    ];
}