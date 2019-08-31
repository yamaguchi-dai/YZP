<?php

namespace Laravel\Pdf;

use Illuminate\Support\ServiceProvider;

class PdfServiceProvider extends ServiceProvider {
    /**
     * {@inheritdoc}
     */
    public function boot(PdfExtension $extension) {
        if (!PdfExtension::boot()) {
            return;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laravel-pdf');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/yamaguchi-dai/laravel-pdf')],
                'laravel-pdf'
            );


        }

        $this->app->booted(function () {
            PdfExtension::routes(__DIR__ . '/../routes/web.php');
        });
    }
}