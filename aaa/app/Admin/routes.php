<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    
    $router->resource('notice',NoticeController::class);
    $router->resource('rotation',RotationController::class);
    $router->resource('product',ProductController::class);
    $router->resource('category',CategoryController::class);
    $router->resource('activity',ActivityController::class);

});
