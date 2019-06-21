<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->resource('master/customer',\MCustomerController::class);

    $router->resource('master/item',\MItemController::class);
    $router->resource('master/tax',\MTaxController::class);

});
