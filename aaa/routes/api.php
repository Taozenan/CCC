<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Api'
], function($api) {
    // 资讯
    $api->get('notics', 'NoticeController@index')
        ->name('api.notic.index');
    $api->get('notics/notic', 'NoticeController@show')
        ->name('api.notic.show');
    $api->get('rotation/image','RotationController@index')->name('api.image.index');
    $api->get('rotation/url','RotationController@show')->name('api.imageurl.index');
    $api->get('product/main','ProductController@index')->name('api.product.index');
    $api->get('product/introduction','ProductController@introduction')->name('api.product.introduction');
    $api->get('product/product','ProductController@show')->name('api.product.show');
    $api->get('category','CategoryController@show')->name('api.category.show');
});