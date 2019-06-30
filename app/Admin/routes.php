<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    /**
     * Api
     */
    $router->get('api/{api_name}','ApiController@index')->name('api');
    $router->post('post_api/{api_name}', 'ApiController@index')->name('post_api');

    /**
     * マスタ
     */
    Route::prefix('master')->group(function (Router $router) {
        $router->resource('customer', \MCustomerController::class);
        $router->resource('item', \MItemController::class);
        $router->resource('tax', \MTaxController::class);
    });

    /**
     * 業務
     */
    Route::prefix('service')->group(function (Router $router) {
        $router->resource('estimate', \TEstimateController::class);
        $router->resource('delivery', \TDeliveryController::class);
        $router->resource('invoice', \TInvoiceController::class);
        $router->resource('payment',\TPaymentController::class);
        $router->resource('receipt', \TReceiptController::class);

    });
});
