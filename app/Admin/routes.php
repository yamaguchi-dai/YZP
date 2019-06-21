<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    Route::prefix('master')->group(function (Router $router) {

        $router->resource('customer', \MCustomerController::class);
        $router->resource('item', \MItemController::class);
        $router->resource('tax', \MTaxController::class);

    });

});
